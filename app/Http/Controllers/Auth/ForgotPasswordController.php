<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ForgotPasswordController extends Controller {
    use SendsPasswordResetEmails;

    public function __construct() {
        $this->middleware('guest');
    }

    public function showLinkRequestForm() {
        return view('auth.forgot_password');
    }

    public function sendResetLinkEmail(Request $request) {
        try {
            $response = $this->broker()->sendResetLink(
                $request->only('email')
            );
            Log::info('Password reset email sent to: ' . $request->email);
            return $response == \Illuminate\Support\Facades\Password::RESET_LINK_SENT
                ? back()->with('status', __($response))
                : back()->withErrors(['email' => __($response)]);
        } catch (\Exception $e) {
            Log::error('Failed to send password reset email: ' . $e->getMessage());
            return back()->withErrors(['email' => 'Không thể gửi email đặt lại mật khẩu.']);
        }
    }
}