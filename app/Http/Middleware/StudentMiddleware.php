<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\User;

class StudentMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if ($user && $user->status === 'Student') {
            // User is a student, restrict access
            $student = User::join('students','students.email','users.email')
            ->select('users.status as status','students.id as id')
            ->where('users.email', $user->email)->first();

            return redirect()->route('student', ['id' => $student->id]);
        }

        return $next($request);
    }
}
