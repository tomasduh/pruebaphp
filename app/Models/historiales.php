<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historiales extends Model
{
    use HasFactory;
    protected $table = "historiales";
    public function bodega(){
        return $this->belongsTo(bodega::class, "id");
    }
    public function inventario(){
        return $this->belongsTo(inventario::class, "id");
    }
}
