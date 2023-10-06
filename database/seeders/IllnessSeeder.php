<?php

namespace Database\Seeders;

use App\Models\Illness;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IllnessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // قائمة بالبيانات التي ترغب في إضافتها إلى جدول الغرف
        $illnessData = [
            [
                'name' => 'كريب',

            ],
            [
                'name' => 'حمى',

            ],
            // يمكنك إضافة المزيد من البيانات هنا
        ];

        // إضافة البيانات إلى جدول الغرف
        foreach ($illnessData as $data) {
            Illness::create($data);
        }
    }
}
