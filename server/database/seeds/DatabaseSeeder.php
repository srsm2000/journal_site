<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ArticleTableSeeder（シーダークラス）の呼び出し
        $this->call(ArticleTableSeeder::class);
    }
}
