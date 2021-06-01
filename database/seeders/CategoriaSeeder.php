<?php

namespace Database\Seeders;
use App\Models\Categoria;

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
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
            'tipo_urgencia' => 'Fractura',
			'descripcion_urgencia'=> 'Consiste en una ruptura de un huesos'

		]);
		
		Categoria::create([
			'id'=> '2',
            'tipo_urgencia' => 'Apendicitis',
			'descripcion_urgencia'=> 'Consiste en una inflamación del apéndice,provocando dolor abdominal'

		]);
		
		Categoria::create([
			'id'=> '3',
            'tipo_urgencia' => 'Traumatismo Craneoencefalico Leve',
			'descripcion_urgencia'=> 'Consiste en una lesión que provoca la perdida de conocimiento dura menos de 30 minutos, alterando el estado mental'

		]);
		
		Categoria::create([
			'id'=> '4',
            'tipo_urgencia' => 'Broncoespasmos',
			'descripcion_urgencia'=> 'Se produce cuando la mucosa interna de los bronquios se inflama haciendo disminuir el espacio para que entre el aire'

		]);
		
		Categoria::create([
			'id'=> '5',
            'tipo_urgencia' => 'Gastritis Crónica',
			'descripcion_urgencia'=> 'Es la inflamación inespecífica de la mucosa gástrica, de etiología múltiple y mecanismos patogénicos diversos.'

		]);
    }
}
