<?php

namespace Database\Factories;

use App\Models\Especialidade;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $especialidades = Especialidade::pluck('id')->toArray();
        return [
            'nome'                  => $this->faker->name,
            'crm'                   => $this->faker->ipv4,
            'especialidade_id'      => $this->faker->randomElement($especialidades),
        ];
    }
}
