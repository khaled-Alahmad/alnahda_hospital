<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Floor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);

        $this->call(FloorSeeder::class);
        $this->call(DoctorDepartmentSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(DoctorSeeder::class);

        $this->call(PatientSeeder::class);
        $this->call(PatientRoomSeeder::class);
        $this->call(IllnessSeeder::class);
        $this->call(PreviewSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(MedicineSeeder::class);
        $this->call(PreviewDetailsSeeder::class);
        $this->call(OperationSeeder::class);
        $this->call(OperationDoctorSeeder::class);
    }
}
