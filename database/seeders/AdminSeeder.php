<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            'name' => 'Alex',
            'address' => 'Angamos 0610',
            'email' => 'alex@correo.com',
            'password' => Bcrypt('example1')
        ]);

        DB::table('admins')->insert([
            'name' => 'Alejandro',
            'address' => 'Matta 2166',
            'email' => 'alejandro@correo.mx',
            'password' => Bcrypt('example2')
        ]);

        DB::table('admins')->insert([
            'name' => 'Popeye',
            'address' => 'Ossa 0213',
            'email' => 'popeye@htomail.com',
            'password' => Bcrypt('example3')
        ]);

        DB::table('admins')->insert([
            'name' => 'Camila',
            'address' => 'Las Venturas 2021',
            'email' => 'cami@outlook.cl',
            'password' => Bcrypt('example4')
        ]);

        DB::table('admins')->insert([
            'name' => 'Napoleon',
            'address' => 'Prat 2215',
            'email' => 'napoleon@gmail.mx',
            'password' => Bcrypt('example5')
        ]);
    }
}
