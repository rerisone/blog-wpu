<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'=>'Reris Pratama',
            'email'=>'rerisone@gmail.com',
            'password'=>bcrypt('12345'),
        ]);
        User::create([
            'name'=>'Gawr Gura',
            'email'=>'gawr@gmail.com',
            'password'=>bcrypt('12345'),
        ]);

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming',
        ]);
        Category::create([
            'name'=>'Personal',
            'slug'=>'personal',
        ]);

        Post::create([
            'title'=>'Judul Pertama',
            'slug'=>'judul-pertama',
            'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde saepe dicta dignissimos accusamus dolor nisi voluptatem maiores exercitationem iure, quaerat possimus qui reprehenderit amet eligendi tenetur ducimus corporis voluptatum beatae sapiente veniam',
            'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde saepe dicta dignissimos accusamus dolor nisi voluptatem maiores exercitationem iure, quaerat possimus qui reprehenderit amet eligendi tenetur ducimus corporis voluptatum beatae sapiente veniam, rem id suscipit inventore totam. Quia, voluptates et distinctio iste perferendis eos nihil excepturi, voluptatem quibusdam culpa non officiis totam? Accusantium, fugiat, veniam maiores doloribus velit error totam numquam voluptates enim saepe tenetur dicta? Eum cum, quidem assumenda nostrum itaque debitis, maxime cupiditate eius distinctio repellat ad praesentium. Labore veniam doloribus quaerat, exercitationem sunt nisi nobis dolorem odit quam necessitatibus sint voluptatem nesciunt dolorum adipisci iste similique aut.',
            'category_id'=>1,
            'user_id'=>1
        ]);

        Post::create([
            'title'=>'Judul Kedua',
            'slug'=>'judul-kedua',
            'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde saepe dicta dignissimos accusamus dolor nisi voluptatem maiores exercitationem iure, quaerat possimus qui reprehenderit amet eligendi tenetur ducimus corporis voluptatum beatae sapiente veniam',
            'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde saepe dicta dignissimos accusamus dolor nisi voluptatem maiores exercitationem iure, quaerat possimus qui reprehenderit amet eligendi tenetur ducimus corporis voluptatum beatae sapiente veniam, rem id suscipit inventore totam. Quia, voluptates et distinctio iste perferendis eos nihil excepturi, voluptatem quibusdam culpa non officiis totam? Accusantium, fugiat, veniam maiores doloribus velit error totam numquam voluptates enim saepe tenetur dicta? Eum cum, quidem assumenda nostrum itaque debitis, maxime cupiditate eius distinctio repellat ad praesentium. Labore veniam doloribus quaerat, exercitationem sunt nisi nobis dolorem odit quam necessitatibus sint voluptatem nesciunt dolorum adipisci iste similique aut.',
            'category_id'=>1,
            'user_id'=>1
        ]);
        Post::create([
            'title'=>'Judul Ketiga',
            'slug'=>'judul-ketiga',
            'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde saepe dicta dignissimos accusamus dolor nisi voluptatem maiores exercitationem iure, quaerat possimus qui reprehenderit amet eligendi tenetur ducimus corporis voluptatum beatae sapiente veniam',
            'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde saepe dicta dignissimos accusamus dolor nisi voluptatem maiores exercitationem iure, quaerat possimus qui reprehenderit amet eligendi tenetur ducimus corporis voluptatum beatae sapiente veniam, rem id suscipit inventore totam. Quia, voluptates et distinctio iste perferendis eos nihil excepturi, voluptatem quibusdam culpa non officiis totam? Accusantium, fugiat, veniam maiores doloribus velit error totam numquam voluptates enim saepe tenetur dicta? Eum cum, quidem assumenda nostrum itaque debitis, maxime cupiditate eius distinctio repellat ad praesentium. Labore veniam doloribus quaerat, exercitationem sunt nisi nobis dolorem odit quam necessitatibus sint voluptatem nesciunt dolorum adipisci iste similique aut.',
            'category_id'=>2,
            'user_id'=>1
        ]);
        Post::create([
            'title'=>'Judul Kempat',
            'slug'=>'judul-keempat',
            'excerpt'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde saepe dicta dignissimos accusamus dolor nisi voluptatem maiores exercitationem iure, quaerat possimus qui reprehenderit amet eligendi tenetur ducimus corporis voluptatum beatae sapiente veniam',
            'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde saepe dicta dignissimos accusamus dolor nisi voluptatem maiores exercitationem iure, quaerat possimus qui reprehenderit amet eligendi tenetur ducimus corporis voluptatum beatae sapiente veniam, rem id suscipit inventore totam. Quia, voluptates et distinctio iste perferendis eos nihil excepturi, voluptatem quibusdam culpa non officiis totam? Accusantium, fugiat, veniam maiores doloribus velit error totam numquam voluptates enim saepe tenetur dicta? Eum cum, quidem assumenda nostrum itaque debitis, maxime cupiditate eius distinctio repellat ad praesentium. Labore veniam doloribus quaerat, exercitationem sunt nisi nobis dolorem odit quam necessitatibus sint voluptatem nesciunt dolorum adipisci iste similique aut.',
            'category_id'=>2,
            'user_id'=>2
        ]);
    }
}
