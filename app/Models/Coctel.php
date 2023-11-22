<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coctel extends Model
{
    use HasFactory;
    protected $primaryKey = "id_coctel";
    protected $table = "cocteles";
    public $timestamps = false;

    public function ingredientesCoctel()
    {
        return $this->hasMany(IngredienteCoctel::class, "id_ingredientes_cocteles");
    }
}
