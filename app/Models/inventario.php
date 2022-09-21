<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    use HasFactory;
    protected $table = "inventarios";
    public function producto(){
        return $this->belongsTo(producto::class, "id");
    }

    public function historial(){
        return $this->hasMany(historial::class);
    }
}
