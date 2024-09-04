<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();
        
        // تحقق من صلاحية المستخدم
        if ($user && in_array($user->role_id, explode('|', $role))) {
            return $next($request);
        }

        // إعادة توجيه إذا لم يكن المستخدم لديه الصلاحية
        return redirect('/home')->with('error', 'You do not have access to this page.');
    }
}
