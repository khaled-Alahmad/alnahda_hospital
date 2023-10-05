<?php

namespace Database\Seeders;

use App\Models\Floor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FloorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // قائمة بالبيانات التي ترغب في إضافتها إلى جدول الغرف
        $roomData = [
            [
                'numberOfFloor' => 1,
                'numberOfRooms' => 10,
            ],
            [
                'numberOfFloor' => 2,
                'numberOfRooms' => 9,
            ],
            // يمكنك إضافة المزيد من البيانات هنا
        ];

        // إضافة البيانات إلى جدول الغرف
        foreach ($roomData as $data) {
            Floor::create($data);
        }
    }
}
