<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'f_name',
        's_name',
        'email',
        'password',
        'dob',
        'gender',
        'class_id',
        'phone',
        'nationality',
        'address',
        'initials',
        'photo'
    ];
}
