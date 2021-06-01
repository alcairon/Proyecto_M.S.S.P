<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TratamientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
        Categoria::create([
			'id'=> '1',
            'enfermedad' => 'Fractura',
			'tratamiento'=> 'Inmovilización  con férula'

		]);
		
		Categoria::create([
			'id'=> '2',
            'enfermedad' => 'Apendicitis',
			'tratamiento'=> 'Operación, de extracción del apéndice'

		]);
		
		Categoria::create([
			'id'=> '3',
            'enfermedad' => 'Traumatismo Craneoencefalico Leve',
			'tratamiento'=> 'Rehabilitación'

		]);
		
		Categoria::create([
			'id'=> '4',
            'enfermedad' => 'Broncoespasmos',
			'tratamiento'=> 'Medicamentos como: broncodilatadores o anticolinérgicos'

		]);
		
		Categoria::create([
			'id'=> '5',
            'enfermedad' => 'Gastritis Crónica',
			'tratamiento'=> 'Medicamentos llamados inhibidores de la bomba de protones y antiácidos'

		]);
    }
}
