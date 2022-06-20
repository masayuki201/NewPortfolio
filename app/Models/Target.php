<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
//    use HasFactory;

    protected $fillable = [
        'target_grade'
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public $timestamps = false;
}
