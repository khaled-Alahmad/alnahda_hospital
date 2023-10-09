<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleData = [
            ['role' => 'admin'], ['role' => 'patient'], ['role' => 'doctor']
        ];
        foreach ($roleData as $data) {
            Role::create($data);
        }
    }
}
