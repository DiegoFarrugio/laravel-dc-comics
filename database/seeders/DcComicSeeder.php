<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\DcComic;


class DcComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dcComicsData = config('dcdc');

        foreach ($dcComicsData as $index => $singleDcComic) {
            $dcComic = new DcComic();
            $dcComic->title = $singleDcComic['title'];
            $dcComic->description = $singleDcComic['description'];
            $dcComic->thumb = $singleDcComic['thumb'];
            $replacedprice = str_replace('$', '', $singleDcComic['price']);
            $dcComic->price = intval($replacedprice);
            $dcComic->series = $singleDcComic['series'];
            $dcComic->sale_date = $singleDcComic['sale_date'];
            $dcComic->type = $singleDcComic['type'];

            //salvo
            $dcComic->save();

        }
    }
}
