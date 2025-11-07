<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    /** @use HasFactory<\Database\Factories\ProductosFactory> */
    use HasFactory;

    protected $table = "";
    protected $fillable = ["nombre", 'precio', 'idcategoria', 'idproveedor'];

    public function categoria(){
        return $this->hasMany('categoria', "idcategoria");
    }

    public function proveedor(){
        return $this->hasMany('proveedor', "idproveedor");
    }
}
