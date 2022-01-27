<?php

use App\Comic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach ($comics as $comic) {
          $newComic = new Comic();
          $newComic->title = $comic['title'];
          $newComic->slug = Str::slug($newComic->title, '-');
          $newComic->description = $comic['description'];
          $newComic->thumbnail = $comic['thumb'];
          $newComic->price = $comic['price'];
          $newComic->series = $comic['series'];
          $newComic->sale_date = $comic['sale_date'];
          $newComic->type = $comic['type'];
          $newComic->save();
        }

    }
}
