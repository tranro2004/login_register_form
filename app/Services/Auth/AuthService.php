<?php

namespace App\Services\Auth;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Contracts\LoginHistoryRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthService {
    protected $userRepository;
    protected $loginHistoryRepository;

    public function __construct(
        UserRepositoryInterface $userRepository,
        LoginHistoryRepositoryInterface $loginHistoryRepository
    ) {
        $this->userRepository = $userRepository;
        $this->loginHistoryRepository = $loginHistoryRepository;
    }

   public function register(array $data): void {
    $data['password'] = Hash::make($data['password']);
    $user = $this->userRepository->create($data);
    Log::info('User created: ' . $user->email);
    try {
        $user->sendEmailVerificationNotification();
        Log::info('Verification email sent to: ' . $user->email);
    } catch (\Exception $e) {
        Log::error('Failed to send verification email: ' . $e->getMessage());
    }
    }

    public function login(array $credentials, bool $remember = false): bool {
        if (Auth::attempt($credentials, $remember)) {
            $this->logLoginHistory(Auth::id());
            return true;
        }
        return false;
    }

    public function logLoginHistory(int $userId): void {
        $this->loginHistoryRepository->create([
            'user_id' => $userId,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'login_at' => now(),
        ]);
    }

    public function getLoginHistory(int $userId){
        return $this->loginHistoryRepository->getByUserId($userId);
    }

}