<?php

namespace Database\Factories;

use App\Models\Especialidade;
use Illuminate\Database\Eloquent\Factories\Factory;

class EspecialidadeFactory extends Factory
{

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    public function withFaker()
    {
        return \Faker\Factory::create(app()->getLocale());
    }

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Especialidade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->unique()->jobTitle(),
        ];
    }
}
