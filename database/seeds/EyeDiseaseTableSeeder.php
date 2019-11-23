<?php

use Illuminate\Database\Seeder;

class EyeDiseaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\EyeDisease::class, 30)->create();
    }
}
