<?php

namespace App\Http\Controllers;

use App\Models\Attractions\Attraction;
use App\Models\Blog\Post;
use DB;
use Illuminate\Support\Str;

class ParserController
{
    public function attractions()
    {
        DB::delete('delete from attractions');
        DB::update("ALTER TABLE attractions AUTO_INCREMENT = 1;");

        $id = '1ZwitTCHrGlgllxD9DZJgaTR7gMdSlDzOzCe1CclzcB0';
        $gid = '0';


        $csv = file_get_contents('https://docs.google.com/spreadsheets/d/' . $id . '/export?format=csv&gid=' . $gid);
        $csv = explode("\r\n", $csv);
        $data = array_map('str_getcsv', $csv);

        $isFirstLine = true;

        //DB::transaction(function() use($data, $isFirstLine) {
            foreach ($data as $row) {

                if ($isFirstLine) {
                    $isFirstLine = false;
                    continue;
                }


                $_data = [
                    'category_id' => $row[1],
                    'alias' => Str::slug($row[3]),
                    'title' => $row[2],
                    'h1' => $row[3],
                    'meta_description' => $row[4],
                    'breadcrumb' => $row[5],
                    'preview' => $row[6],
                    'content' => $row[7],
                    'distance_from_center' => str_replace(',', '.', $row[8]),
                    'is_free_entry' => $row[9],
                    'is_availability_of_excursions' => $row[10],
                    'status' => $row[11]
                ];

                $attraction = new Attraction($_data);
                $attraction->save();
            }
        //});

        echo 'Все ок';
    }

    public function blog()
    {
        DB::delete('delete from posts');
        DB::update("ALTER TABLE posts AUTO_INCREMENT = 1;");

        $id = '1ZwitTCHrGlgllxD9DZJgaTR7gMdSlDzOzCe1CclzcB0';
        $gid = '2019397197';


        $csv = file_get_contents('https://docs.google.com/spreadsheets/d/' . $id . '/export?format=csv&gid=' . $gid);
        $csv = explode("\r\n", $csv);
        $data = array_map('str_getcsv', $csv);

        $isFirstLine = true;

        DB::transaction(function() use($data, $isFirstLine) {
            foreach ($data as $row) {

                if ($isFirstLine) {
                    $isFirstLine = false;
                    continue;
                }


                $tmpDate = date('Y-m-d', strtotime($row[7]));
                $data = [
                    'alias' => Str::slug($row[4]),
                    'title'=> $row[1],
                    'h1'=> $row[3],
                    'meta_description' => $row[2],
                    'breadcrumb' => $row[4],
                    'preview' => $row[5],
                    'content' => $row[6],
                    'date' => date($tmpDate),
                    'status' => $row[8]
                ];

                $post = new Post($data);
                $post->save();

            }
        });

        echo 'Все ок';
    }
}
