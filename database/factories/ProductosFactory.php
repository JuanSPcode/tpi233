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
        return [
            "nombre"=>$this->faker->name(),
            "precio"=>$this->faker->numberBetween(1, 10),
            "idcategoria"=>Categorias::inRandomOrder()->value("id"),
            "idproveedor"=>Proveedores::inRandomOrder()->value("id"),
        ];
    }
}
