<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Fish;

class Aquarium extends Model
{
    protected $table = 'aquarium';

    use HasFactory;

    public function fish()
    {
        return $this->hasMany(Fish::class);
    }

    function checkCompatible($fish)
    {
        if ($fish->species == 'goldfish') {
            if ($this->fish()->where('species', 'guppy')->exists()) {
                return false;
            }
        }
        if ($fish->species == 'guppy') {
            if ($this->fish()->where('species', 'goldfish')->exists()) {
                return false;
            }
        }
        if ($fish->number_of_fins >= 3) {
            if ($this->size <= 75) {
                return false;
            }
        }
        return true;
    }
}
