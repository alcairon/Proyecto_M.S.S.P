<?php

namespace Database\Factories;

use App\Models\Urgencia;
use Illuminate\Database\Eloquent\Factories\Factory;

class UrgenciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Urgencia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
         	'id'=>$this->faker->unique()->numberbetween(100,10000),
			'f_entrada'=>$this->faker->dateTime(),
			'tipo_urgencia'=>$this->faker->randomElement(['Esguince','Fractura','Migrañas','Fiebre','Apendicitis']),
			'tratamiento'=>$this->faker->randomElement(['A la espera de un tratamiento','A la espera de un tratamiento']),
            'paciente'=>$this->faker->name(),
			'medico'=>$this->faker->name(),
		];
    }
}
