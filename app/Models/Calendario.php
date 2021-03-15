<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;
	
	protected $filable = [];
	protected $guarded = [];
	 protected $primaryKey = 'id';
	
	
	public $timetamps = false;
	
	

}
