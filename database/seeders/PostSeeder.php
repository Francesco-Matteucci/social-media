<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {
            $post = new Post();
            $post->user_id = $faker->numberBetween(1, 10);
            $post->category_id = $faker->numberBetween(1, 5);
            $post->content = $faker->text(500);
            $post->save();
        }
    }
}
