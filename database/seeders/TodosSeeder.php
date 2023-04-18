<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
$useradmin=User::create([
    'identidad' => '1001',
	'name' => 'admin paul',
	'email' => 'admin@gmail.com',
	'password' => Hash::make('admin'),
	'tipo' => '1',
	]);


    $user1=User::create([
        'identidad' => '1002',
        'name' => 'usuario Marcos',
        'email' => 'user@gmail.com',
        'password' => Hash::make('admin'),
        'tipo' => '2',
        ]);
    
    
    }
}
