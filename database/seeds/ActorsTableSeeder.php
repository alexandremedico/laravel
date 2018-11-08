<?php

use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('actors')->insert(
      [
        [
          "first_name" => "Tom",
          "last_name" => "Cruise",
        ],
        [
          "first_name" => "Chuck",
          "last_name" => "Norris",
        ],
        [
          "first_name" => "Jet",
          "last_name" => "Lee",
        ],
        [
          "first_name" => "Morgan",
          "last_name" => "Freeman",
        ],
        [
          "first_name" => "Andrew",
          "last_name" => "Garfield",
        ]
      ]);
  }
}
