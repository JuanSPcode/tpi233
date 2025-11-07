<?php

namespace Database\Factories;

use App\Models\Categorias;
use App\Models\Proveedores;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productos>
 */
class ProductosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoria = Categorias::all();
        $proveedor = Proveedores::all();
        return [
            "nombre"=> fake()->name(),
            "precio"=> fake()->numberBetween(1, 10),
            "idcategoria"=>$categoria->random()->id,
            "idproveedor"=>$proveedor->random()->id
        ];
        /**
         * 
         "nombre", 'precio', 'idcategoria', 'idproveedor']
         */
    }
}
