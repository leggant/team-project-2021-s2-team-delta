<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Papers;
use App\Models\Student;

class Cohort extends Model
{
    use HasFactory;

    protected $table = 'cohorts';
    protected $fillable = ['subject', 'year', 'semester', 'stream', 'paper_id'];

    public function papers()
    {
        return $this->hasOne(Paper::class, 'foreign_key');
    }

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
