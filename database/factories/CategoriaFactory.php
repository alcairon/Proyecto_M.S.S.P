<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categoria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
         	'id'=>$this->faker->unique()->numberbetween(1,1000),
			'tipo_urgencia' => $this->faker->randomElement(['Fractura','Traumatismo Craneoencefálico Leve','Broncoespasmos','Apendicitis','Migraña']),
			//'descripción_urgencia' => $this->faker->null,
		];
    }
}