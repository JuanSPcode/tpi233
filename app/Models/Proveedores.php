<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    /** @use HasFactory<\Database\Factories\ProveedoresFactory> */
    use HasFactory;
    
    protected $table = "proveedor";

    protected $fillable = ["nombreproveedor", "direccion", "codigo"];

        public function producto(){
        return $this->belongsTo("producto", "id");
    }
}
