<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthenticateAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();


        if (!$user) {
            return redirect('/');
        }

     
        if ($user->is_admin) {
            return $next($request);
        }

  
        $routeName = $request->route()->getName();
        $allowRoutes = [
            'admin.post.index',
            'admin.post.create',
            'admin.post.store',
        ];

        if (in_array($routeName, $allowRoutes)) {
            return $next($request);
        }
        return abort(403, 'Bạn không có quyền truy cập chức năng này.');
    }
}
