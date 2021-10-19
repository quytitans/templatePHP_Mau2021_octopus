<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class eventSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'Lập trình PHP',
                'slug' => str_slug('Lập trình PHP'),
                'content' => '....',
                'category_id' => rand(1,3),
            ],
            [
                'id' => 2,
                'title' => 'Lập trình Ruby',
                'slug' => str_slug('Lập trình Ruby'),
                'content' => '....',
                'category_id' => rand(1,3),
            ]
        ];

        try {
            foreach ($posts as $post) {
                Post::create($post);
            }
        } catch (\Throwable $th) {

        }
    }
}
