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
		User::create([
			'id'=> '1',
            'nombre' => 'carlos',
			'email'=> 'carlosfelipemartin@gmail.com',
			'password'=> '12345678'
		]);
        User::create([
			'id'=> '2',
            'nombre' => 'jose',
			'email'=> 'jose@gmail.com',
			'password'=> '12345678'
		]);
		User::create([
			'id'=> '3',
            'nombre' => 'manolo',
			'email'=> 'manolo@gmail.com',
			'password'=> '12345678'
		]);
    }
}
