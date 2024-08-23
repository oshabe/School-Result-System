<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\User;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     *
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Get the authenticated user
                $user = Auth::guard($guard)->user();

                $student = User::join('students','students.email','users.email')
                ->select('users.status as status','students.id as id')
                ->where('users.email', $user->email)->first();

                // Check if the user's status is 'student'
                if ($student && $student->status === 'Student') {
                    // Redirect to the student page with the user's ID
                    return redirect()->route('student', ['id' => $student->id]);
                }

                // For other user types, you can add your logic here (e.g., redirect to different pages)
                // By default, redirect to the home page
                return redirect(theme()->getPageUrl(RouteServiceProvider::HOME));
            }
        }

        return $next($request);
    }
}
