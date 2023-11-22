<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredienteCoctel extends Model
{
    use HasFactory;
    protected $primaryKey = "id_ingredientes_cocteles";
    protected $table = "ingredientes_cocteles";
    public $timestamps = false;

    public function coctel()
    {

        return $this->belongsTo(Coctel::class, "id_coctel");
    }

    public function ingrediente()
    {

        return $this->belongsTo(Ingredientes::class, "id_ingrediente");
    }
}
