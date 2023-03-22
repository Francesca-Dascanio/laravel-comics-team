<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Recupero dati in config
         $comics = config('comics');

         // Inserisco dati in DB
         foreach ($comics as $comic) {
             $singleComic = new Comic();
             $singleComic->title = $comic['title'];
             $singleComic->description = $comic['description'];
             $singleComic->thumb = $comic['thumb'];
             $singleComic->price = $comic['price'];
             $singleComic->series = $comic['series'];
             $singleComic->sale_date = $comic['sale_date'];
             $singleComic->type = $comic['type'];
             $singleComic->save();
         }
    }
}
