<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostType;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostType::create([
            'type' => 'Información',
        ]);
        PostType::create([
            'type' => 'Evaluación',
        ]);

        Post::factory(60)->create();

    }
}
