<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // قائمة بالبيانات التي ترغب في إضافتها إلى جدول الغرف
        $roomData = [
            [
                'roomSize' => 25.50,
                'floor_id' => 1,
            ],
            [
                'roomSize' => 30.25,
                'floor_id' => 2,
            ],
        ];

        // إضافة البيانات إلى جدول الغرف
        foreach ($roomData as $data) {
            Room::create($data);
        }
    }
}
