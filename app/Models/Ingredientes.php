<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredientes extends Model
{
    use HasFactory;
    protected $primaryKey = "id_ingrediente";
    protected $table = "ingredientes";
    public $timestamps = false;

    public function ingredientesCoctel()
    {
        return $this->hasMany(IngredienteCoctel::class, "id_ingredientes_cocteles");
    }
}
