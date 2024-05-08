<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttractionCategoriesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \DB::table('attraction_categories')->insert([
            [
                'name' => 'Замок',
            ],
            [
                'name' => 'Дворец',
            ],
            [
                'name' => 'Парк',
            ],
            [
                'name' => 'Крепость',
            ],
            [
                'name' => 'Музей',
            ],
            [
                'name' => 'Природное место',
            ],
            [
                'name' => 'Религиозное место',
            ],

        ]);
    }
}
