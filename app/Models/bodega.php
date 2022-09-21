<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bodega extends Model
{
    use HasFactory;
    protected $table = "bodegas";
    public function inventario(){
        return $this->hasMany(inventario::class);
    }
    public function historial(){
        return $this->hasMany(historial::class);
    }
    public function usuario(){
        return $this->belongsTo(User::class, "id");
    }
}
