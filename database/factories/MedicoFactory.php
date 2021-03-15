<?php

namespace Database\Factories;

use App\Models\Medico;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medico::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
         	'id'=>$this->faker->unique()->numberbetween(1,1000),
			'nombre' => $this->faker->name(),
			'apellido' => $this->faker->lastName(),
			'dni' =>$this->faker->dni,
			//'regex : /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/',
			'telefono' =>$this->faker->unique()->phoneNumber,
			
			

		];
    }
}