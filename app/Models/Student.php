<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cohort;
use App\Models\Evidence;
use App\Models\Note;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student';
    protected $primaryKey = 'id';
    protected $fillable = ['student_id', 'first_name', 'last_name', 'username', 'email', 'github', 'cohort_id'];
    protected $hidden = ['created_at', 'updated_at'];

    public function evidence()
    {
        return $this->hasMany(Evidence::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function cohort()
    {
        return $this->belongsTo(Cohort::class, 'foreign_key');
    }

    /**
    * Get the user's full name.
    *
    * @return string
    */
    public function getNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['name'];
}
