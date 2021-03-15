<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Urgencia;

class Paciente extends Model
{
    use HasFactory;
	
	protected $filable = ['nombre'];
	protected $guarded = [];
	
	
	
	public $timetamps = false;
	

	
	public function urgencias()
	{
		return $this->hasMany(Urgencia::class);
	}
	
	
}
