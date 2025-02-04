<?php

namespace Database\Seeders;

use App\Models\Jhonpabz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JhonpabzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jhonpabz::factory()->count(50)->create();
    }
}
