<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'nome'      => $this->faker->name,
            'email'     => $this->faker->unique->email,
            'cpf'       => $this->faker->unique->text(14),
            'cep'       => $this->faker->text(9),
            'endereco'  => $this->faker->streetName,
            'numero'    => $this->faker->year,
            'uf'        => "MG",
            'cidade'    => $this->faker->city,
            'telefone'  => "(99) 99999-9999"
        ];
    }
}
