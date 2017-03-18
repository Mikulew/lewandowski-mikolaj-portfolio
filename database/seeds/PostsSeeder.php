<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 3; $i++) {
            $post = new Post();
            $post->title = $faker->company;
            $post->content = $faker->text(5500);
            $post->slug =  str_slug($post->title);
            $post->save();
        }
    }
}