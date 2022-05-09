<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'username' => 'admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('password'),
                'role' => 'admin'
            ]
        );
        foreach($data as $d){
            User::create([
                'username' => $d['username'],
                'email' => $d['email'],
                'password' => $d['password'],
                'role' => $d['role'],
            ]);
        }
    }
}
