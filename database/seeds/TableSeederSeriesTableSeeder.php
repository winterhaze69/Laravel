<?php

use Illuminate\Database\Seeder;

class TableSeederSeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('series')->insert([
         'title' => "Dirk Gently",
         'publication_year' => 2016,

     ]);
    }
}
