<?php

namespace App\Models;
use App\Models\Categoria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;
use Carbon\Carbon;


class Urgencia extends Model
{
    use HasFactory;
	
	protected $filable = [];
	protected $guarded = [];
	
	protected $casts = [
		'f_entrada' => 'date:Y-m-d',
	];
	
	public $timestamps = false;
	
	protected $primaryKey = 'id';
	

	public function getEstadoAttribute()
	{
		return $this->f_entrada > Carbon::now() ? "En espera" : "Finalizado";
	}
		
	
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
	
	public static function getUrgenciasEnEspera()
	{
		return Urgencia::select()->where("f_entrada",">",Carbon::now())->get();
	}
}
