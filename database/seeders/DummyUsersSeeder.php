<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Bill Wilson',
                'email'=>'bill_wilson@gmail.com',
                'role'=>'Project Manager',
                'password'=>bcrypt('wilson')
            ],
            [
                'name'=>'Adam El Gato',
                'email'=>'adam@gmail.com',
                'role'=>'Employee',
                'password'=>bcrypt('adam')
            ],
            
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
        
    }
}