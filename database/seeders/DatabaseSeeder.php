<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\category;
use App\Models\coment;
use App\Models\product;
use App\Models\product_category;
use App\Models\product_user;
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
            'category_name' => 'fresh',
            'image_url' => 'https://i.pinimg.com/564x/8e/cd/45/8ecd4551c8a6e776c639174f453d8234.jpg'
        ]);
        category::create([
            'category_name' => 'sweet',
            'image_url' => 'https://i.pinimg.com/564x/1c/a2/94/1ca2943ef4109589b426d6a213bcfaac.jpg'
        ]);
        category::create([
            'category_name' => 'woody',
            'image_url' => "https://i.pinimg.com/564x/66/3f/99/663f99a41af86d694a90c69818991047.jpg"
        ]);
        category::create([
            'category_name' => 'Floral',
            'image_url' => "https://i.pinimg.com/enabled_hi/564x/16/65/8b/16658b2f6e3240b3fd9a20627621df5b.jpg"
        ]);

        //product seeder create product

        product::create([
            'product_name' => 'Saff & Co s.o.t.b mini',
            'description' => 'a flower fragrant',
            'price' => 45000,
            'image_url' => 'https://api.watsons.co.id/medias/prd-front-35863.jpg?context=bWFzdGVyfGltYWdlc3wzNjkyMXxpbWFnZS9qcGVnfGFEaG1MMmhoTnk4eE1qUTBPRGd4T0RjeU5EZzVOQzlYVkVOSlJDMHpOVGcyTXkxbWNtOXVkQzVxY0djfDA1MDA4YTUxNWY0NzQzOThhNzgwNTc4NGJjNGM5ZDkyZDM2MGRiOWFkNDMwY2Y3NWJiZDJiMDA4YWI5MDQ4Mzc'
        ]);
        product::create([
            'product_name' => 'Saff & Co chno mini',
            'description' => 'a flora things here',
            'price' => 45000,
            'image_url' => "https://www.beautyhaul.com/assets/uploads/products/thumbs/800x800/CHNO__1_-removebg-preview.png"
        ]);
        product::create([
            'product_name' => 'Saff & Co solaris mini',
            'description' => 'fresh things come on',
            'price' => 45000,
            'image_url' => 'https://hglhouse.com/cdn/shop/files/id-11134207-7qul2-lgorwps1p3u39a.jpg?v=1715238026&width=2048'
        ]);
        product::create([
            'product_name' => 'Saff & Co 540 mini',
            'description' => ' a wood fragrant perfume',
            'price' => 45000,
            'image_url' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//101/MTA-93781702/saff_-_co-_saff_-_co-_mini_size_-_540_full01_dg8lqr2b.jpg'
        ]);

        product::create([
            'product_name' => 'Saff & Co Cascavel mini',
            'description' => 'a sweet and aromatic perfume',
            'price' => 45000,
            'image_url' => 'https://image.astronauts.cloud/product-images/2024/2/SAFFCo_6063513f-718b-4887-a06c-f33cd0a1b2d5_900x900.jpg'
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
            'coment_text' => 'yang solaris favorite aku nih'
        ]);
        coment::create([
            'product_id' => 1,
            'user_id' => 2,
            'coment_text' => 'kaya nya yg sotb nih yang paling laris'
        ]);
        coment::create([
            'product_id' => 2,
            'user_id' => 4,
            'coment_text' => 'love love bgt sama yg ini'
        ]);
        coment::create([
            'product_id' => 4,
            'user_id' => 3,
            'coment_text' => 'gila aku pake tiap hari njir saking enak nya'
        ]);
        coment::create([
            'product_id' => 5,
            'user_id' => 2,
            'coment_text' => 'wanginya kaya gulali'
        ]);
        coment::create([
            'product_id' => 1,
            'user_id' => 3,
            'coment_text' => 'premium best lah'
        ]);

        product_user::create([
            'product_id' => 1,
            'user_id' => 2,
            'is_checkout' => true
        ]);

        product_user::create([
            'product_id' => 2,
            'user_id' => 3,
            'is_checkout' => true
        ]);

    }
}
