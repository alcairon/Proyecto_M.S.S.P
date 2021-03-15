<?php

namespace App\Models;
use App\Models\Categoria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class Urgencia extends Model
{
    use HasFactory;
	
	protected $filable = [];
	protected $guarded = [];
	
	protected $casts = [
		'f_entrada' => 'date:Y-m-d',
	];
	
	public $timetamps = false;
	
	protected $primaryKey = 'id';
	
	
	
	
	public function pacient()
		{
			return $this->belongsTo(Paciente::class, 'paciente');
		}
	
	public function categoria()
	{
		return $this->belongsTo(Categoria::class,'tipo_urgencia');
	}
	
	public function trat()
	{
		return $this->belongsTo(Tratamiento::class,'tratamiento');
	}
	
	public function doctor()
	{
		return $this->belongsTo(Medico::class,'medico');
	}
}
