<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SeederSuperAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = array(
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '12345678',
            'email_verified_at' => now()
        );
        $datos['password'] = Hash::make($datos['password']);
        User::create($datos);
    }
}
