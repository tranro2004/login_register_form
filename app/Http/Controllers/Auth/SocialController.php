<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\UserRepository;
use App\Services\Auth\AuthService;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialController extends Controller {
    protected $authService;
    protected $userRepository;

    public function __construct(AuthService $authService, UserRepository $userRepository) {
        $this->authService = $authService;
        $this->userRepository = $userRepository;
    }

    public function redirectToProvider(string $provider) {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback(string $provider) {
        try {
            $socialUser = Socialite::driver($provider)->user();
            $user = $this->userRepository->findByEmail($socialUser->getEmail());

            if (!$user) {
                $user = $this->userRepository->create([
                    'lastname' => $socialUser->getName() ? explode(' ', $socialUser->getName())[0] : '',
                    'firstname' => $socialUser->getName() ? explode(' ', $socialUser->getName())[1] ?? '' : '',
                    'email' => $socialUser->getEmail(),
                    'phone' => '', // Có thể thêm logic để lấy số điện thoại nếu có
                    'password' => bcrypt(Str::random(16)),
                    'email_verified_at' => now(),
                ]);
            }

            Auth::login($user, true);
            $this->authService->logLoginHistory($user->id);

            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors(['social' => 'Đăng nhập bằng ' . ucfirst($provider) . ' thất bại.']);
        }
    }
}