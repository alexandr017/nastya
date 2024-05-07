<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StaticPagesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \DB::table('static_pages')->insert([
            [
                'title' => 'Главная страница title',
                'h1' => 'Главная страница h1',
                'meta_description' => 'Главная страница meta_description',
                'breadcrumb' => 'Главная',
                'lead' => 'If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.',
                'content' => ''
            ],
            [
                'title' => 'attractions страница title',
                'h1' => 'attractions страница h1',
                'meta_description' => 'attractions страница meta_description',
                'breadcrumb' => 'Список достопримечательностей',
                'lead' => 'We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day to.',
                'content' => ''
            ],
            [
                'title' => 'favorites страница title',
                'h1' => 'attractions страница h1',
                'meta_description' => 'favorites страница meta_description',
                'breadcrumb' => 'Избранные достопримечательности',
                'lead' => null,
                'content' => null
            ],
            [
                'title' => 'blog страница title',
                'h1' => 'Список записей в блоге',
                'meta_description' => 'blog страница meta_description',
                'breadcrumb' => 'Список записей в блоге',
                'lead' => null,
                'content' => null
            ],
        ]);
    }
}
