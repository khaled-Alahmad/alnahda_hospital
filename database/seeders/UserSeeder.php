<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'firstName' => 'patient',
                'lastName' => 'alahmad',
                'father' => 'ramazan',
                'mother' => 'test',
                'age' => 22,
                'role_id' => 2,
                'gender' => 'ذكر',
                'phone' => '00905394806788',
                'address' => 'azaz',
                'email' => 'patient1@gmail.com',
                'password' => bcrypt('12345678'),


            ],
            [
                'firstName' => 'patient',
                'lastName' => 'alahmad',
                'father' => 'ramazan',
                'mother' => 'test',
                'age' => 22,
                'role_id' => 2,

                'gender' => 'انثى',
                'phone' => '00905394806788',
                'address' => 'azaz',
                'email' => 'patient2@gmail.com',
                'password' => bcrypt('12345678'),
            ], [
                'firstName' => 'doctor',
                'lastName' => 'alahmad',
                'father' => 'ramazan',
                'mother' => 'test',
                'phone' => '00905394806788',
                'age' => 22,
                'role_id' => 3,

                'address' => 'azaz',
                'email' => 'doctor1@gmail.com',
                'password' => bcrypt('12345678'),


            ], [
                'firstName' => 'doctor',
                'lastName' => 'alahmad',
                'father' => 'ramazan',
                'mother' => 'test',
                'phone' => '00905394806788',
                'age' => 22,
                'role_id' => 3,

                'address' => 'azaz',
                'email' => 'doctor2@gmail.com',
                'password' => bcrypt('12346678'),


            ], [
                'firstName' => 'admin',
                'lastName' => 'alahmad',
                'father' => 'ramazan',
                'age' => 22,
                'role_id' => 1,
                'mother' => 'test',
                'phone' => '00905394806788',
                'address' => 'azaz',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),


            ],
        ];

        foreach ($userData as $data) {
            User::create($data);
        }
    }
}
