<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherRole extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'name',
        'teacher_id',
        'status',
        'created_by',
        'updated_at'
    ];
}
