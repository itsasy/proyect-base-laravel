<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::factory(20)->create();
    }
}
