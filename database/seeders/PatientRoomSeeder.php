<?php

namespace Database\Seeders;

use App\Models\PatientRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'patient_id' => 1,
                'room_id' => 1,
                'from' => now(),
                'to' => now()->addHours(2),
            ],
            [
                'patient_id' => 2,
                'room_id' => 2,
                'from' => now()->addDays(1),
                'to' => now()->addDays(1)->addHours(3),
            ],
            // إضافة المزيد من البيانات حسب الحاجة
        ];

        foreach ($data as $item) {
            PatientRoom::create($item);
        }
    }
}
