<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    protected $table = "productos";
    public function inventario(){
        return $this->hasMany(inventario::class);
    }
}
