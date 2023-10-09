<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoriesData = [
            ['name' => 'الأدوية الفموية'],
            ['name' => 'الأدوية عن طريق الحقن'],
            ['name' => 'اللقاحات'],
            ['name' => 'ادوية الاستعمال الخارجي'],
        ];
        foreach ($categoriesData as $category) {
            Category::create($category);
        }
    }
}
