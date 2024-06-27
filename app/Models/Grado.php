<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Grado extends Model
{
    use HasFactory;
    public function personal(): HasOne
    {
        return $this->hasOne(Personal::class);
    }
}
