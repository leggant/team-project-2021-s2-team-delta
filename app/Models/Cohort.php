<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Papers;

class Cohort extends Model
{
    use HasFactory;

    protected $table = 'cohorts';
    protected $fillable = ['subject', 'year', 'semester', 'stream'];

    public function papers()
    {
        return $this->hasOne(Paper::class);
    }
}
