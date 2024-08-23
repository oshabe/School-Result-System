<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EndTerm extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'subject',
        'end_marks',
        'term',
        'status',
        'created_by',
        'updated_by'
    ];
}
