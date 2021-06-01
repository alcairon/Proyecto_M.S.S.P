<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;


class StoreUrgencia extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
		$f_actual = Carbon::now();
         return [

			'f_entrada'=> 'required|after:today',
			/*'categorias'=>'required',
			'tratamientos' => 'required',
			 'pacientes'=>'required',
			 'medicos'=>'required',*/

			
		];
		
		
    }	

	public function messages()
	{
		return[
		
			/*'f_entrada.required' => 'Es necesario rellenar el campo Fecha',
			'categorias.required' => 'Es necesario rellenar el campo Tipo de Urgencia',
			'tratamientos.required' => 'Es necesario rellenar el campo Tratamiento',
			'pacientes.required' => 'Es necesario rellenar el campo Paciente',
			'medicos.required' => 'Es necesario rellenar el campo Médico'*/

			
			'Falta informacion o la fecha tiene que ser mayor a la actual'
		];
	}
	
}






