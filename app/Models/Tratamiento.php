<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    use HasFactory;
	
	protected $filable = [];
	protected $guarded = [];
	 protected $primaryKey = 'id';
	
	
	public $timestamps = false;
	
	public function urgencias()
		{
			return $this->hasMany(Urgencia::class);
		}
}