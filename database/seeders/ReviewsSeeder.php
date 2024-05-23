<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        \DB::table('reviews')->insert([
            [
                'name' => 'Иван Иванов',
                'attraction_id'  => 1,
                'rating'  => 4,
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore itaque, nobis! Aliquid atque cumque deleniti, eligendi fugiat illum impedit, incidunt maiores molestias nam necessitatibus obcaecati pariatur, reiciendis saepe soluta voluptatem?'
            ],
            [
                'name' => 'Иван Иванов 2',
                'attraction_id'  => 3,
                'rating'  => 4,
                'review' => 'Lorem ipsum incidunt maiores molestias nam necessitatibus obcaecati pariatur, reiciendis saepe soluta voluptatem?'
            ],
            [
                'name' => 'Иван Иванов 3',
                'attraction_id'  => 2,
                'rating'  => 2,
                'review' => ' Aliquid atque cumque deleniti, eligendi fugiat illum impedit, incidunt maiores molestias nam necessitatibus obcaecati pariatur, reiciendis saepe soluta voluptatem?'
            ],
            [
                'name' => 'Иван Иванов 4',
                'attraction_id'  => 1,
                'rating'  => 4,
                'review' => 'Lorempariatur, reiciendis saepe soluta voluptatem?'
            ],
            [
                'name' => 'Иван Иванов 5',
                'attraction_id'  => 1,
                'rating'  => 4,
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore itaque, nobis! Aliquid atque cumque deleniti, eligendi fugiat illum impedit, incidunt maiores molestias nam necessitatibus obcaecati pariatur, reiciendis saepe soluta voluptatem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore itaque, nobis! Aliquid atque cumque deleniti, eligendi fugiat illum impedit, incidunt maiores molestias nam necessitatibus obcaecati pariatur, reiciendis saepe soluta voluptatem?'
            ],
            [
                'name' => 'Иван Иванов 6',
                'attraction_id'  => 2,
                'rating'  => 3,
                'review' => 'Lorem ipsum dolor sit amet, consectetcidunt maiores molestias nam necessitatibus obcaecati pariatur, reiciendis saepe soluta voluptatem?'
            ],
            [
                'name' => 'Иван Иванов 7',
                'attraction_id'  => 2,
                'rating'  => 5,
                'review' => 'Lorem ipsum dolor sit amet, consecteleniti, eligendi fugiat illum impedit, incidunt maiores molestias nam necessitatibus obcaecati pariatur, reiciendis saepe soluta voluptatem?'
            ],


        ]);
    }
}
