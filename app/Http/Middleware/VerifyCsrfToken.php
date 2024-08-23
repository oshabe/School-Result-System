<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use App\Http\Controllers\StudentCOntroller;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/save-result',
        '/student-form',
        '/teacher_edit_form',
        '/teacher-form',
        '/login',
        '/teachers/{id}',
        '/check-marks-status/{id}',
        '/update-status/{id}'
    ];
}
