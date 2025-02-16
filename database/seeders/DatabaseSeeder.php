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
            'image_url' => '/foto_categories/fresh.jpg'
        ]);
        category::create([
            'category_name' => 'sweet',
            'image_url' => '/foto_categories/sweet.jpg'
        ]);
        category::create([
            'category_name' => 'woody',
            'image_url' => "/foto_categories/woody.jpg"
        ]);
        category::create([
            'category_name' => 'Floral',
            'image_url' => "/foto_categories/flora.jpg"
        ]);

        //product seeder create product

        product::create([
            'product_name' => 'Saff & Co sotb',
            'description' => 'wowowowowowowow',
            'price' => 45000,
            'image_url' => "/foto/sotb.webp"
        ]);
        product::create([
            'product_name' => 'Saff & Co chno mini',
            'description' => 'a flora things here',
            'price' => 45000,
            'image_url' => "/foto/chino.png"
        ]);
        product::create([
            'product_name' => 'Saff & Co solaris mini',
            'description' => 'fresh things come on',
            'price' => 45000,
            'image_url' => '/foto/solaris.webp'
        ]);
        product::create([
            'product_name' => 'Saff & Co 540 mini',
            'description' => ' a wood fragrant perfume',
            'price' => 45000,
            'image_url' => '/foto/540.webp'
        ]);

        product::create([
            'product_name' => 'Saff & Co Cascavel mini',
            'description' => 'a sweet and aromatic perfume',
            'price' => 45000,
            'image_url' => '/foto/cascavel.jpg'
        ]);

        // Seed data product_category
$product = product::first(); // Ambil produk pertama
$category = category::first(); // Ambil kategori pertama

if ($product && $category) {
    product_category::create([
        'product_id' => $product->id,
        'category_id' => $category->id,
    ]);
}

$product = product::skip(1)->first();
$category = category::skip(1)->first();

if ($product && $category) {
    product_category::create([
        'product_id' => $product->id,
        'category_id' => $category->id,
    ]);
}

$product = product::skip(2)->first();
$category = category::skip(2)->first();

if ($product && $category) {
    product_category::create([
        'product_id' => $product->id,
        'category_id' => $category->id,
    ]);
}
$product = product::skip(3)->first();
$category = category::skip(3)->first();

if ($product && $category) {
    product_category::create([
        'product_id' => $product->id,
        'category_id' => $category->id,
    ]);
}
$product = product::skip(4)->first();
$category = category::skip(1)->first();

if ($product && $category) {
    product_category::create([
        'product_id' => $product->id,
        'category_id' => $category->id,
    ]);
}

        //rating seeder create rating
$product = product::skip(0)->first();
$user = user::skip(0)->first();
if($product && $user){
    rating::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'rating_value' => 5
    ]);
}

$product = product::skip(0)->first();
$user = user::skip(2)->first();
if($product && $user){
    rating::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'rating_value' => 5
    ]);
}

$product = product::skip(1)->first();
$user = user::skip(3)->first();
if($product && $user){
    rating::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'rating_value' => 5
    ]);
}

$product = product::skip(1)->first();
$user = user::skip(1)->first();
if($product && $user){
    rating::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'rating_value' => 3
    ]);
}

$product = product::skip(2)->first();
$user = user::skip(2)->first();
if($product && $user){
    rating::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'rating_value' => 5
    ]);
}

$product = product::skip(2)->first();
$user = user::skip(3)->first();
if($product && $user){
    rating::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'rating_value' => 3
    ]);
}

$product = product::skip(3)->first();
$user = user::skip(1)->first();
if($product && $user){
    rating::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'rating_value' => 5
    ]);
}
$product = product::skip(3)->first();
$user = user::skip(2)->first();
if($product && $user){
    rating::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'rating_value' => 4
    ]);
}

$product = product::skip(4)->first();
$user = user::skip(3)->first();
if($product && $user){
    rating::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'rating_value' => 4
    ]);
}

$product = product::skip(4)->first();
$user = user::skip(1)->first();
if($product && $user){
    rating::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'rating_value' => 2
    ]);
}




        //coment seeder create dummy comment

$product = product::skip(2)->first();
$user = user::skip(1)->first();
if($product && $user){
    coment::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'coment_text' => 'yang solaris favorite aku nih'
    ]);
}


$product = product::skip(0)->first();
$user = user::skip(1)->first();
if($product && $user){
    coment::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'coment_text' => 'kaya nya yg sotb nih yang paling laris'
    ]);
}

$product = product::skip(1)->first();
$user = user::skip(3)->first();
if($product && $user){
    coment::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'coment_text' => 'love love bgt sama yg ini'
    ]);
}

$product = product::skip(3)->first();
$user = user::skip(2)->first();
if($product && $user){
    coment::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'coment_text' => 'gila aku pake tiap hari njir saking enak nya'
    ]);
}

$product = product::skip(4)->first();
$user = user::skip(1)->first();
if($product && $user){
    coment::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'coment_text' => 'wanginya kaya gulali'
    ]);
}

$product = product::skip(0)->first();
$user = user::skip(2)->first();
if($product && $user){
    coment::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'coment_text' => 'premium best lah'
    ]);
}
$product = product::skip(0)->first();
$user = user::skip(1)->first();
if($product && $user){
    coment::create([
        'product_id' => $product->id,
        'user_id' => $user->id,
        'coment_text' => 'premium best lah'
    ]);
}



    }
}
