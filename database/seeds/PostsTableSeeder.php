<?php

use App\Post;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
//        清空資料庫

        $total = 10;
        $faker = Factory::create('zh_TW');

        foreach(range(1, $total) as $i) {
            Post::create([
                'title' => $faker->realText(rand(10, 12)),
                'content' => $faker->realText(rand(100, 300)),
                'created_at' => Carbon::now()->subDays($total-$i)->addHours(rand(1,2))->addMinutes(rand(1, 10))->addSeconds(rand(1, 30)),
                'updated_at' => Carbon::now()->subDays($total-$i)->addHours(rand(1, 5))->addMinutes(rand(1, 30)),
            ]);
        }
        //
    }
}
