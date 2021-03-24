<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
	
	protected $filable = [];
	protected $guarded = [];
	 protected $primaryKey = 'id';
	
	
	const UPDATED_AT = null;
	const CREATE_AT = null;
	public $timestamps = false;
	
	
	public function urgencias()
		{
			return $this->hasMany(Urgencia::class);
		}
}
