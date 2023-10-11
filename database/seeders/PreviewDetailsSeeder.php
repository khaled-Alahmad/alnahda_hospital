<?php

namespace Database\Seeders;

use App\Models\PreviewDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PreviewDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $previewDetailData = [
            [
                'preview_id' => 1,
                'medicine_id' => 1,
                'illness_id' => 2,

            ],
            [
                'preview_id' => 1,
                'medicine_id' => 2,
                'illness_id' => 2,

            ],
            [
                'preview_id' => 2,
                'medicine_id' => 2,
                'illness_id' => 2,

            ],
        ];
        foreach ($previewDetailData as $data) {
            PreviewDetails::create($data);
        }
    }
}
