<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TestTemp;

class TestTempSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TestTemp::factory()->count(10)->create();
    }
}
