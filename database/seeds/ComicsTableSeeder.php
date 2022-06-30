<?php

use App\Comic;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class ComicsTableSeeder extends Seeder
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
            $current_comic = new Comic();
            $current_comic->title = $comic['title'];
            $current_comic->description = $comic['description'];
            $current_comic->thumb = $comic['thumb'];
            $current_comic->price = $comic['price'];
            $current_comic->series = $comic['series'];
            $current_comic->sale_date = $comic['sale_date'];
            $current_comic->type = $comic['type'];
            
            $current_comic->save();
        }
    }
}
