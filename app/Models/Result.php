<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject',
        'term',
        'marks',
        'student_id',
        'grade',
        'out_of_three',
        'descriptor',
        'initials',
        'status',
        'others',
        'coursework'
    ];
}
