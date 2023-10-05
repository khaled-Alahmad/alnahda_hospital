<?php

namespace Database\Seeders;

use App\Models\DoctorDepartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // قائمة بالبيانات التي ترغب في إضافتها إلى جدول الأقسام الطبية
        $departments = [
            [
                'title' => 'قسم الأمراض الباطنية',
                'description' => 'وصف قسم الأمراض الباطنية',
            ],
            [
                'title' => 'قسم جراحة القلب',
                'description' => 'وصف قسم جراحة القلب',
            ],
            // يمكنك إضافة المزيد من الأقسام هنا
        ];

        // إضافة البيانات إلى جدول الأقسام الطبية
        foreach ($departments as $department) {
            DoctorDepartment::create($department);
        }
    }
}
