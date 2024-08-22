<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\category;
use App\Models\coment;
use App\Models\product;
use App\Models\product_category;
use App\Models\rating;
use App\Models\User;
use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'username' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //user seeder create user

        User::create([
            'username' => 'adrianhamzah',
            'email' => "ryanhzashari13@gmail.com",
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);
        User::create([
            'username' => 'zein akbar',
            'email' => "zeinAkbar22@gmail.com",
            'password' => Hash::make('admin123'),
            'role' => 'user'
        ]);
        User::create([
            'username' => 'faraz',
            'email' => "Farazzz3@gmail.com",
            'password' => Hash::make('admin123'),
            'role' => 'user'
        ]);
        User::create([
            'username' => 'hasban fardani',
            'email' => "fardanihasban@gmail.com",
            'password' => Hash::make('admin123'),
            'role' => 'user'
        ]);

        //categories seeder create category

        category::create([
            'category_name' => 'makanan_ringan'
        ]);
        category::create([
            'category_name' => 'makanan_berat'
        ]);
        category::create([
            'category_name' => 'desert'
        ]);
        category::create([
            'category_name' => 'minuman'
        ]);

        //product seeder create product

        product::create([
            'product_name' => 'kopi janji jiwa',
            'description' => 'kopi asoy geboy enaken buat ngods',
            'price' => 20000
        ]);
        product::create([
            'product_name' => 'kopi kenangan',
            'description' => 'kopi seger nikmat enaken buat ngods',
            'price' => 15000
        ]);
        product::create([
            'product_name' => 'tela tela singkong',
            'description' => 'tela tela manis gurih',
            'price' => 5000
        ]);
        product::create([
            'product_name' => 'stuff roti creamy',
            'description' => 'stuff roti dengan whif cream yang creamy',
            'price' => 10000
        ]);
        product::create([
            'product_name' => 'mie gacoan mantap',
            'description' => 'mie gacoan manis gurih',
            'price' => 13000
        ]);

        //product_category seeder create relation product_category
        product_category::create([
            'product_id' => 1,
            'category_id' => 4,
        ]);
        product_category::create([
            'product_id' => 2,
            'category_id' => 4,
        ]);
        product_category::create([
            'product_id' => 3,
            'category_id' => 1,
        ]);
        product_category::create([
            'product_id' => 4,
            'category_id' => 3,
        ]);
        product_category::create([
            'product_id' => 5,
            'category_id' => 2,
        ]);

        //rating seeder create rating

        rating::create([
            'product_id' => 1,
            'user_id' => 2,
            'rating_value' => 5
        ]);
        rating::create([
            'product_id' => 1,
            'user_id' => 3,
            'rating_value' => 5
        ]);
        rating::create([
            'product_id' => 2,
            'user_id' => 4,
            'rating_value' => 5
        ]);
        rating::create([
            'product_id' => 2,
            'user_id' => 2,
            'rating_value' => 3
        ]);
        rating::create([
            'product_id' => 3,
            'user_id' => 3,
            'rating_value' => 5
        ]);
        rating::create([
            'product_id' => 3,
            'user_id' => 4,
            'rating_value' => 3
        ]);
        rating::create([
            'product_id' => 4,
            'user_id' => 2,
            'rating_value' => 5
        ]);
        rating::create([
            'product_id' => 4,
            'user_id' => 3,
            'rating_value' => 4
        ]);
        rating::create([
            'product_id' => 5,
            'user_id' => 4,
            'rating_value' => 4
        ]);
        rating::create([
            'product_id' => 5,
            'user_id' => 2,
            'rating_value' => 2
        ]);


        //coment seeder create dummy comment
        coment::create([
            'product_id' => 3,
            'user_id' => 2,
            'coment_text' => 'waduh enak bangett tela tela nya'
        ]);
        coment::create([
            'product_id' => 1,
            'user_id' => 2,
            'coment_text' => 'kopi nee swegerrrr cik'
        ]);
        coment::create([
            'product_id' => 2,
            'user_id' => 4,
            'coment_text' => 'kopi nya enaken buat temen ngoding'
        ]);
        coment::create([
            'product_id' => 4,
            'user_id' => 3,
            'coment_text' => 'stuff nya creamy banget '
        ]);
        coment::create([
            'product_id' => 5,
            'user_id' => 2,
            'coment_text' => 'mie nya gurih banget cuyyyy'
        ]);
    }
}
