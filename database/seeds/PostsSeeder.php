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
        factory(Post::class, 15)->create()->each(function ($u) {
            $u->save(factory(Post::class)->make());
        });
    }
}
