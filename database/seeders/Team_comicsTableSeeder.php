<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
             $singleComic->name = $comic['title'];
             $singleComic->image = $comic['description'];
             $singleComic->price = $comic['thumb'];
             $singleComic->availability = $comic['price'];
             $singleComic->type = $comic['series'];
             $singleComic->description = $comic['sale_date'];
             $singleComic->description = $comic['type'];
             $singleComic->save();
         }
    }
}