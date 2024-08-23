<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'f_name',
        's_name',
        'email',
        'password',
        'dob',
        'gender',
        'roll_id',
        'class_id',
        'phone_number',
        'nationality',
        'address',
        'guardian',
        'photo',
        'created_by',
        'updated_by'
    ];
}
