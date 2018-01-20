<?php

use App\PostType;
use Illuminate\Database\Seeder;

class PostTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post_types = [
            'News',
            'Blog',
            'Services',
            'Pages'
        ];

        foreach($post_types as $post_type)
        {
            PostType::create([
                'name' => $post_type,
                'slug' => str_slug($post_type),
                'is_active' => 1
            ]);
        }
    }
}
