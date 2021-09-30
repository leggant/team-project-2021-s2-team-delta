<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Str;

class Evidence extends Model
{
    protected $table = 'evidence';

    protected $fillable = [
        'title',
        'description',
        'filepath',
        'originalFileName',
        'student_id',
        'user_id',
        'updated_at',
        'created_at',
        'url',
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
    /**
     * get shortend version of title to use as button text.
     * @var string
     */
    protected $appends = 'short_title';
}
