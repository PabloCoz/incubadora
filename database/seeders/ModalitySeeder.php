<?php

namespace Database\Seeders;

use App\Models\Modality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Modality::create([
            'name' => 'Presencial',
        ]);

        Modality::create([
            'name' => 'Virtual',
        ]);

        Modality::create([
            'name' => 'Semi-Presencial',
        ]);

        Modality::create([
            'name' => 'A distancia',
        ]);
    }
}
