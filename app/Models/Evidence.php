<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Student;

class Evidence extends Model
{
    protected $table = 'evidence';
    
    protected $fillable = ['title', 'description', 'filepath', 'student_id', 'user_id', 'updated_at', 'created_at'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
