<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTipoUrgencia extends FormRequest
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
         return [
			
			
			'tipo_urgencia'=>'required',
			'descripcion_urgencia'=>'required',
			
			
		];
		
		
    }	

	public function messages()
	{
		return[
			
			//
		];
	}
	
}
