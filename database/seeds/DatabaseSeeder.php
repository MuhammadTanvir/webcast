<?php

use App\Series;
use App\Video;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factory(Series::class,10)->create();
        factory(Series::class, 10)->create()->each(function($series){
            $series->videos()->saveMany(factory(Video::class, 10)->make());
        });
    }
}
