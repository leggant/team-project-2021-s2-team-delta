<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Cohort;

class Papers extends Model
{
    use HasFactory;

    protected $table = 'papers';

    protected $fillable = ['paper_name'];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function cohort()
    {
        return $this->hasOne(Cohort::class);
    }
}
