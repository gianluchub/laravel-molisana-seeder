<?php

use Illuminate\Database\Seeder;
use App\Pasta;
use Illuminate\Support\Str;

class PastasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    

        $pastaArray = config('pasta');

        foreach ($pastaArray as $item) {
            $pasta = new Pasta();
            // $pasta->{'src-h'} = "pippo";
        //    $pasta->src = $item['src'];
        //    $pasta->titolo = $item['titolo'];
            $item["slug"] = Str::slug($item["titolo"], '-'); 

            $pasta->fill($item);
            // $pasta->slug = Str::slug($item["titolo"], '-');
            $pasta->save();
        }
    }
}
