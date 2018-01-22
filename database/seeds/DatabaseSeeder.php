<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        DB::table('post_types')->truncate();

         $this->call([
             PostTypesSeeder::class,
             PostsSeeder::class
         ]);
    }
}
