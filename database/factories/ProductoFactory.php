<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        return [
			'nombre' => $this->faker->name,
			'precio' => $this->faker->name,
			'marca' => $this->faker->name,
			'cantidad' => $this->faker->name,
        ];
    }
}
