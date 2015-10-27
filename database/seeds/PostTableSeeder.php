<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 30; $i++) {
            $title = $faker->sentence();
            $body  = $faker->text(3000);
            $slug  = Str::slug($title);

            DB::table('posts')->insert([
                'title' => $title,
                'body'  => $body,
                'slug'  => $slug
            ]);
        }
    }
}
