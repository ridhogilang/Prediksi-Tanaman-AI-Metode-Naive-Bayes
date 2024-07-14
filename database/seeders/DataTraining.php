<?php

namespace Database\Seeders;

use App\Models\DataTraining as ModelsDataTraining ;
use Illuminate\Database\Seeder;


class DataTraining extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            "Cabai" => [
                "Oksigen" => [42, 37, 45, 39, 48, 41, 43, 38, 46, 50],
                "Tekstur" => [0.06, 0.03, 0.07, 0.05, 0.09, 0.04, 0.08, 0.02, 0.1, 0.02],
                "Kelembapan" => [75, 78, 73, 79, 76, 72, 77, 80, 71, 74],
                "Suhu" => [12, 14, 15, 11, 13, 10, 16, 18, 20, 22],
                "Keasaman" => [7.2, 6.8, 7.4, 6.6, 7.1, 7.3, 6.9, 7.0, 7.5, 6.7]
            ],
            "Jagung" => [
                "Oksigen" => [68, 64, 72, 70, 66, 62, 69, 63, 67, 71],
                "Tekstur" => [1.5, 0.8, 1.2, 1.0, 0.5, 0.3, 1.8, 1.3, 0.6, 1.7],
                "Kelembapan" => [50, 45, 55, 52, 48, 42, 57, 46, 49, 54],
                "Suhu" => [30, 32, 34, 31, 28, 36, 29, 33, 35, 28],
                "Keasaman" => [6.0, 5.8, 6.2, 5.9, 5.7, 6.4, 6.1, 5.6, 6.3, 5.6]
            ],
            "Padi" => [
                "Oksigen" => [55, 53, 58, 56, 52, 59, 57, 54, 60, 51],
                "Tekstur" => [1.5, 0.8, 1.2, 1.0, 0.5, 0.3, 1.8, 1.3, 0.6, 1.7],
                "Kelembapan" => [65, 62, 68, 63, 61, 67, 64, 66, 69, 61],
                "Suhu" => [25, 24, 26, 23, 27, 25, 26, 24, 23, 27],
                "Keasaman" => [6.3, 5.8, 6.1, 5.7, 6.0, 5.6, 6.2, 5.9, 6.4, 5.6]
            ],
            "Kacang Tanah" => [
                "Oksigen" => [40, 44, 37, 43, 48, 38, 41, 46, 50, 36],
                "Tekstur" => [0.05, 0.08, 0.03, 0.06, 0.1, 0.02, 0.04, 0.07, 0.1, 0.03],
                "Kelembapan" => [75, 78, 71, 76, 80, 72, 74, 77, 80, 71],
                "Suhu" => [24, 26, 23, 25, 27, 24, 23, 26, 27, 23],
                "Keasaman" => [6.8, 7.2, 6.6, 7.0, 7.5, 6.7, 6.6, 7.3, 7.5, 6.6]
            ],
            "Kedelai" => [
                "Oksigen" => [55, 53, 58, 56, 52, 59, 57, 54, 60, 51],
                "Tekstur" => [1.5, 0.8, 1.2, 1.0, 0.5, 0.3, 1.8, 1.3, 0.6, 1.7],
                "Kelembapan" => [65, 62, 68, 63, 61, 67, 64, 66, 69, 61],
                "Suhu" => [30, 32, 34, 31, 28, 36, 29, 33, 35, 28],
                "Keasaman" => [6.0, 5.8, 6.2, 5.9, 5.7, 6.4, 6.1, 5.6, 6.3, 5.6]
            ],
            "Semangka" => [
                "Oksigen" => [53, 58, 56, 52, 59, 57, 54, 60, 51, 55],
                "Tekstur" => [1.5, 0.8, 1.2, 1.0, 0.5, 0.3, 1.8, 1.3, 0.6, 1.7],
                "Kelembapan" => [65, 68, 63, 61, 67, 64, 66, 69, 61, 65],
                "Suhu" => [24, 25, 26, 27, 23, 24, 25, 26, 27, 23],
                "Keasaman" => [5.8, 6.2, 5.9, 5.7, 6.4, 6.1, 5.6, 6.3, 5.6, 6.0]
            ]
        ];

        foreach ($data as $tanaman => $attributes) {
            for ($i = 0; $i < count($attributes["Oksigen"]); $i++) {
                ModelsDataTraining::create([
                    'tanaman' => $tanaman,
                    'oksigen' => $attributes["Oksigen"][$i],
                    'tekstur' => $attributes["Tekstur"][$i],
                    'kelembapan' => $attributes["Kelembapan"][$i],
                    'suhu' => $attributes["Suhu"][$i],
                    'keasaman' => $attributes["Keasaman"][$i]
                ]);
            }
        }
    }
}
