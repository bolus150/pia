<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriesFilms = array('Komedia', 'Dramat', 'Horror', 'Fantasy', 'Obyczajowy');

        foreach ($categoriesFilms as $categoriesFilm) {
            DB::table('categories')->insert([
                'name' => $categoriesFilm
            ]);
        }

    }
}
