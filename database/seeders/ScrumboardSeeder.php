<?php

namespace Database\Seeders;

use App\Models\Scrumboard;
use Illuminate\Database\Seeder;

class ScrumboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Scrumboard::factory()->count(5)->create();
    }
}
