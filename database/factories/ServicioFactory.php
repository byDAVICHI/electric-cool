<?php

namespace Database\Factories;

use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServicioFactory extends Factory
{
    protected $model = Servicio::class;

    public function definition()
    {
        return [
			'nombre' => $this->faker->name,
			'descripcion' => $this->faker->name,
			'costo' => $this->faker->name,
			'fecha_inicio' => $this->faker->name,
			'fecha_fin' => $this->faker->name,
			'estatus' => $this->faker->name,
        ];
    }
}
