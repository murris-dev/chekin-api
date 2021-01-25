<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = new User();

    	$user->usuario = 'admin';
    	$user->nombre = 'admin';
    	$user->apellidos = 'admin';
    	$user->telefono = '4444444';
    	$user->email = 'admin@admin.com';
    	$user->estado = true;
    	$user->password = bcrypt('secret');
    	// dd($user);
    	$user->save();
    }
}
