<?php

namespace Database\Factories;

use App\Models\Finanza;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FinanzaFactory extends Factory
{
    protected $model = Finanza::class;

    public function definition()
    {
        return [
			'tipo_transaccion' => $this->faker->name,
			'descripcion' => $this->faker->name,
			'monto' => $this->faker->name,
			'fecha' => $this->faker->name,
        ];
    }
}
