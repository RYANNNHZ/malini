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
            'category_name' => 'makanan ringan',
            'image_url' => 'https://img.freepik.com/free-photo/top-view-delicious-fries-sauce_23-2149235944.jpg?w=360&t=st=1726114065~exp=1726114665~hmac=98da22e54b7cb73e18299c769bb1bbd8b073dacbd5d7304a2fdf290a466ed799'
        ]);
        category::create([
            'category_name' => 'makanan berat',
            'image_url' => 'https://img.freepik.com/free-photo/macaroni-with-cheese-chicken-mushrooms-baked-oven_2829-11120.jpg?t=st=1726115592~exp=1726119192~hmac=c18d96e40f458571c4684a8a60f00fa924d47aac6e21599507474f30f489daf4&w=360'
        ]);
        category::create([
            'category_name' => 'dessert',
            'image_url' => "https://img.freepik.com/free-photo/top-view-assortment-donuts-with-waffles-chocolate_23-2148526480.jpg?ga=GA1.1.900510402.1726533843&semt=ais_hybrid"
        ]);
        category::create([
            'category_name' => 'minuman',
            'image_url' => "https://img.freepik.com/free-photo/delicious-cappuccino-coffee_144627-30474.jpg?ga=GA1.1.900510402.1726533843&semt=ais_hybrid"
        ]);

        //product seeder create product

        product::create([
            'product_name' => 'kopi janji jiwa',
            'description' => 'kopi asoy geboy enaken buat ngods',
            'price' => 20000,
            'image_url' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//99/MTA-8119395/kopi-janji-jiwa_kopi-janji-jiwa_full01.jpg'
        ]);
        product::create([
            'product_name' => 'kopi kenangan',
            'description' => 'kopi seger nikmat enaken buat ngods',
            'price' => 15000,
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQC9rkwbNEwRPKsNxW_0v0nHomEloEZPIlkY1jQXnpYzLgsaE9hVIAs1Kf5pwQNA1G8D7Q&usqp=CAU'
        ]);
        product::create([
            'product_name' => 'bread toast',
            'description' => 'bread toast manis gurih',
            'price' => 5000,
            'image_url' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzJ1R7xow_PctocrMnkHtb8KlYfw9s9Lm9XamU_FUOQFn5UAHsDq3vDfdNVmNYri8ZB5E&usqp=CAU"
        ]);
        product::create([
            'product_name' => 'chesee bread',
            'description' => 'chesee dengan whif cream yang creamy',
            'price' => 10000,
            'image_url' => 'https://media-cdn.yummyadvisor.com/store/8fe8c189-9ca2-484e-b9ef-5d081195a33e.jpg?x-oss-process=style/type_4'
        ]);
        product::create([
            'product_name' => 'sangobox',
            'description' => ' sango box manis gurih',
            'price' => 13000,
            'image_url' => 'https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/a7a82323-a209-44ec-bd31-57d142a4ae30_menu-item-image_1724655446226.jpg'
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
        coment::create([
            'product_id' => 1,
            'user_id' => 3,
            'coment_text' => 'kopi aren nya gurih banget cuyyyy'
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
