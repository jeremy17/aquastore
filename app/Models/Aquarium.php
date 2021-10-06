<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Fish;

class Aquarium extends Model
{
    use HasFactory;

    public function fish()
    {
        return $this->hasMany(Fish::class);
    }
}
