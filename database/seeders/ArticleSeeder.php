<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleTag;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate(); //把所有資料清空,並重置主機
        //$faker = Factory::create('zh_TW');

        //建立資料
        //for ($i = 0; $i < 10; $i++) {
        //Article::create(['user_id' => $faker->randomNumber, 'author' => $faker->name, 'subject' => $faker->address, 'content' => $faker->realtext, 'pic' => $faker->imageUrl]);
        //}

        $articles = Article::factory()->times(100)->create();

        foreach ($articles as $article) {
            $at = new ArticleTag;
            $at->article_id = $article->id;
            $at->tag_id = rand(1, 30);
            $at->save();
        }

    }
}
