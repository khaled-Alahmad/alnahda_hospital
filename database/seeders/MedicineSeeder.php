<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $medicines = [
            ['name' => 'دواء 1', 'category_id' => 1, 'brand_id' => 1, 'price' => 10.99],
            ['name' => 'دواء 2', 'category_id' => 2, 'brand_id' => 2, 'price' => 15.50],
            // قد تضيف المزيد من الأدوية هنا
        ];

        foreach ($medicines as $medicine) {
            Medicine::create($medicine);
        }
    }
}
