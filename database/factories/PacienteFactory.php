<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paciente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
         	'id'=>$this->faker->unique()->numberbetween(1,10000),
			'nombre' => $this->faker->name(),
			'apellido' => $this->faker->lastName(),
			'dni' =>$this->faker->dni,
			//'regex : /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/',
			'telefono' =>$this->faker->unique()->phoneNumber,
			
			

		];
    }
}