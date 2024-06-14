<?php

namespace Database\Seeders;
use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config("comics");
        foreach($comics as $curComic) {
            $newComic = new Comic();
            $newComic->title        = $curComic["title"];
            $newComic->description  = $curComic["description"];
            $newComic->thumb        = $curComic["thumb"];
            $newComic->price        = $curComic["price"];
            $newComic->series       = $curComic["series"];
            $newComic->sale_date    = $curComic["sale_date"];
            $newComic->type         = $curComic["type"];
            $newComic->save();
        }
    }
}
