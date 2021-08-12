<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student';
    protected $primaryKey = 'id';
    protected $fillable = ['student_id', 'first_name', 'last_name', 'email', 'github'];
    protected $hidden = ['created_at', 'updated_at'];

    public function evidence()
    {
        return $this->hasMany(Evidence::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
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
