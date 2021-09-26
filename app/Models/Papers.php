<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Cohort;

class Papers extends Model
{
    use HasFactory;

    protected $table = 'courses';
    public $timestamps = false;

    protected $fillable = ['paper_name'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_papers', 'paper_id', 'user_id',);
    }

    public function cohort()
    {
        return $this->hasOne(Cohort::class);
    }
}
