<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Belongsto;

class Personal extends Model
{
    use HasFactory;
    public function equipos(): HasMany
    {
        return $this->hasMany(Equipo::class);
    }
    public function grado(): Belongsto
    {
        return $this->belongsto(Grado::class);
    }
}
