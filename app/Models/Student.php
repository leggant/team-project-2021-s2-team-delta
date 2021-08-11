<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'github'];
    protected $hidden = ['created_at', 'updated_at'];

    public function evidence()
    {
        return $this->hasMany(Evidence::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
