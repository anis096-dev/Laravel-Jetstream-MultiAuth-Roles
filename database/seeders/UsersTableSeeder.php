<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@test.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'role_id'        => 1,
                'address'=> null,
                'cin'=>null,
                'ehealthcare_qualifications'=>null,
            ],
            [
                'id'             => 2,
                'name'           => 'Pro. de santé',
                'email'          => 'p.s@test.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'role_id'        => 2,
                'address'=> null,
                'cin'=>null,
                'ehealthcare_qualifications'=>'1st Infirmier',
            ],
            [
                'id'             => 3,
                'name'           => 'Patient',
                'email'          => 'patient@test.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'role_id'        => 3,
                'address'=> '17 AV Tunis',
                'cin'=>123456,
                'ehealthcare_qualifications'=>null,
            ]
        ];

        User::insert($users);
    }
}