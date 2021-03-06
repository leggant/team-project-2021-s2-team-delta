<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class Evidence extends Model
{
    protected $table = 'evidence';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'description',
        'filepath',
        'originalFileName',
        'student_id',
        'user_id',
        'updated_at',
        'created_at',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
    /**
     * shortened button text.
     *
     * @return string
     */
    public function getShortTitleAttribute()
    {
        return Str::of($this->title)->limit(25, '...');
    }
    protected $appends = ['short_title'];
}
