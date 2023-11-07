<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Wina Agustina',
        //     'email' => 'wina@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Indira Putri',
        //     'email' => 'indira@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, sed!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque blanditiis atque quae voluptates temporibus minus ad laudantium, sed labore placeat! Reiciendis sed sit incidunt modi ratione nam temporibus optio consectetur, nesciunt quam. Perferendis iste veniam aperiam cupiditate inventore magni. Alias mollitia delectus cupiditate consequuntur. Saepe, porro debitis similique at, et nihil quo autem, sunt velit obcaecati amet ipsum! Impedit eos possimus molestiae explicabo sed minima, nostrum optio hic temporibus? Iusto excepturi, sint magni veniam totam, obcaecati illum nobis repellendus laborum eligendi ipsum, natus minima aperiam consectetur voluptatem eius! Dicta pariatur sint vitae fugit nobis ipsa nam tempora provident dolore voluptatum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, sed!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque blanditiis atque quae voluptates temporibus minus ad laudantium, sed labore placeat! Reiciendis sed sit incidunt modi ratione nam temporibus optio consectetur, nesciunt quam. Perferendis iste veniam aperiam cupiditate inventore magni. Alias mollitia delectus cupiditate consequuntur. Saepe, porro debitis similique at, et nihil quo autem, sunt velit obcaecati amet ipsum! Impedit eos possimus molestiae explicabo sed minima, nostrum optio hic temporibus? Iusto excepturi, sint magni veniam totam, obcaecati illum nobis repellendus laborum eligendi ipsum, natus minima aperiam consectetur voluptatem eius! Dicta pariatur sint vitae fugit nobis ipsa nam tempora provident dolore voluptatum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, sed!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque blanditiis atque quae voluptates temporibus minus ad laudantium, sed labore placeat! Reiciendis sed sit incidunt modi ratione nam temporibus optio consectetur, nesciunt quam. Perferendis iste veniam aperiam cupiditate inventore magni. Alias mollitia delectus cupiditate consequuntur. Saepe, porro debitis similique at, et nihil quo autem, sunt velit obcaecati amet ipsum! Impedit eos possimus molestiae explicabo sed minima, nostrum optio hic temporibus? Iusto excepturi, sint magni veniam totam, obcaecati illum nobis repellendus laborum eligendi ipsum, natus minima aperiam consectetur voluptatem eius! Dicta pariatur sint vitae fugit nobis ipsa nam tempora provident dolore voluptatum.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, sed!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque blanditiis atque quae voluptates temporibus minus ad laudantium, sed labore placeat! Reiciendis sed sit incidunt modi ratione nam temporibus optio consectetur, nesciunt quam. Perferendis iste veniam aperiam cupiditate inventore magni. Alias mollitia delectus cupiditate consequuntur. Saepe, porro debitis similique at, et nihil quo autem, sunt velit obcaecati amet ipsum! Impedit eos possimus molestiae explicabo sed minima, nostrum optio hic temporibus? Iusto excepturi, sint magni veniam totam, obcaecati illum nobis repellendus laborum eligendi ipsum, natus minima aperiam consectetur voluptatem eius! Dicta pariatur sint vitae fugit nobis ipsa nam tempora provident dolore voluptatum.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        
    }
}
