<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\Auth\AuthService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth; 


class LoginController extends Controller {
    protected $authService;

    public function __construct(AuthService $authService) {
        $this->authService = $authService;
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm() {
        return view('auth.login');
    }

    public function login(LoginRequest $request): RedirectResponse {
        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember');

        if ($this->authService->login($credentials, $remember)) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors(['email' => 'Thông tin đăng nhập không hợp lệ']);
    }

    public function logout(): RedirectResponse {
        Auth::logout();
        return redirect()->route('login');
    }
}