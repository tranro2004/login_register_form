<?php 
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Services\Auth\AuthService;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller {
    protected $authService;

    public function __construct(AuthService $authService) {
        $this->authService = $authService;
        $this->middleware('guest');
    }

    public function showRegistrationForm() {
        return view('auth.register');
    }

    public function register(RegisterRequest $request): RedirectResponse {
        $this->authService->register($request->validated());
        return redirect()->route('verification.notice');
    }
}