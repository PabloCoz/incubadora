<?php

namespace Database\Seeders;

use App\Models\Postulant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostulantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Postulant::factory(10)->create();
    }
}
