<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'علامة 1', 'description' => 'وصف العلامة 1'],
            ['name' => 'علامة 2', 'description' => 'وصف العلامة 2'],
            ['name' => 'علامة 3', 'description' => 'وصف العلامة 3'],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
