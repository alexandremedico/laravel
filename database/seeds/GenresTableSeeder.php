<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
      {
      DB::table('genres')->insert([
        [
          "name" => "Heroic-fantasy",
        ],
        [
          "name" => "Horror",
        ],
        [
          "name" => "Kids",
        ],
        [
          "name" => "Science-fiction",
        ],
        [
          "name" => "Hentaï",
        ],
        [
          "name" => "Yaoï",
        ],
      ]);
  }
}
