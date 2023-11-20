<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    public function run()
    {
        foreach (range(1, 20) as $index) {
            News::create([
                'title' => "Post $index",
                'text' => "Lorem ipsum dolor sit amet $index",
                'image' => News::getRandomImageFromUnsplash()
            ]);
        }
    }
}
