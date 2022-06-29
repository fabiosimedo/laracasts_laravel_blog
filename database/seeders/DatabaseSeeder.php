<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        $newUser = User::factory()->create([
            'name' => 'Jhon Doe'
        ]);

        Post::factory(6)->create([
            'user_id' => $newUser->id
        ]);

        // $user = \App\Models\User::factory()->create();

        // $pessoal = Category::create([
        //     'name' => 'Pessoal',
        //     'slug' => 'slug-pessoal'
        // ]);
        // $trabalho = Category::create([
        //     'name' => 'Trabalho',
        //     'slug' => 'slug-trabalho'
        // ]);
        // $hobby = Category::create([
        //     'name' => 'Hobby',
        //     'slug' => 'slug-hobby'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $hobby->id,
        //     'title' => 'Hobby Post Title',
        //     'slug' => 'slug-hobby-post',
        //     'excerpt' => 'Excerpt para hobbies...',
        //     'body' => 'Body para post de hobby com texto aleatório descrevendo o post'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $trabalho->id,
        //     'title' => 'Work Post Title',
        //     'slug' => 'slug-work-post',
        //     'excerpt' => 'Excerpt para work...',
        //     'body' => 'Body para post de trabalho com texto aleatório descrevendo o post'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $pessoal->id,
        //     'title' => 'Personal Post Title',
        //     'slug' => 'slug-personal-post',
        //     'excerpt' => 'Excerpt para personal...',
        //     'body' => 'Body para post de pessoal com texto aleatório descrevendo o post'
        // ]);
    }
}
