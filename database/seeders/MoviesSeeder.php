<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = config('movie');

        foreach($movies as $element){

            $newMovies =  new Movie();

            $newMovies->Title = $element['title'];
            $newMovies->Description = $element['description'];
            $newMovies->Thumb = $element['thumb'];
            $newMovies->Price = $element['price'];
            $newMovies->Series = $element['series'];
            $newMovies->Sale_date = $element['sale_date'];
            $newMovies->Type = $element['type'];

            $newMovies->save();
        }
    }
}
