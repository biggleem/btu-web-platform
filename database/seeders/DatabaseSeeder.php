<?php

namespace Database\Seeders;

use App\Models\Faqs;
use App\Models\MainImage;
use App\Models\Product;
use App\Models\Terms;
use App\Models\User;
use App\Models\Category;
use App\Models\Sale;
use App\Models\Like;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1234'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'testUser',
            'email' => 'test@gmail.com',
            'password' => Hash::make('test1234'),
            'role' => 'user'
        ]);
        Product::create([
            'userId' => 1,
            'title' => 'firstProduct',
            'price' => 100,
            'description' => 'firstProduct',
            'category' => 1,
            'sale' => 30,
            'link' => 'https://goto.link',
            'status' => 'approved',
            'imagecount' => 1,
            'imageextensions' => 'png',
        ]);
        Product::create([
            'userId' => 2,
            'title' => 'secondProduct',
            'price' => 100,
            'description' => 'secondProduct',
            'category' => 1,
            'sale' => 30,
            'link' => 'https://goto.link',
            'status' => 'approved',
            'imagecount' => 2,
            'imageextensions' => 'png,png',
        ]);
        Product::create([
            'userId' => 2,
            'title' => 'thirdProduct',
            'price' => 100,
            'description' => 'thirdProduct',
            'category' => 1,
            'sale' => 30,
            'link' => 'https://goto.link',
            'status' => 'approved',
            'imagecount' => 1,
            'imageextensions' => 'png',
        ]);

        Category::create([
            'categoryname' => 'HOMEGOODS',
            'parentCategory' => 0,
        ]);

        Category::create([
            'categoryname' => 'FACE AND HAIR',
            'parentCategory' => 0,
        ]);

        Category::create([
            'categoryname' => 'EDIBLES',
            'parentCategory' => 0,
        ]);

        Category::create([
            'categoryname' => 'AMAZON HURRIES',
            'parentCategory' => 0,
        ]);

        Category::create([
            'categoryname' => 'WYDTYN',
            'parentCategory' => 0,
        ]);

        Category::create([
            'categoryname' => 'HOMEGOODS sub',
            'parentCategory' => 1,
        ]);

        Category::create([
            'categoryname' => 'FACE AND HAIR sub',
            'parentCategory' => 2,
        ]);

        Category::create([
            'categoryname' => 'EDIBLES sub',
            'parentCategory' => 3,
        ]);

        Category::create([
            'categoryname' => 'AMAZON HURRIES sub',
            'parentCategory' => 4,
        ]);

        Category::create([
            'categoryname' => 'WYDTYN sub',
            'parentCategory' => 5,
        ]);

        Sale::create([
            'start' => 0,
            'end' => 0,
        ]);
        Sale::create([
            'start' => 0,
            'end' => 30,
        ]);
        Sale::create([
            'start' => 30,
            'end' => 50,
        ]);
        Sale::create([
            'start' => 50,
            'end' => 60,
        ]);
        Sale::create([
            'start' => 60,
            'end' => 100,
        ]);
        Like::create([
            'productId' => 1,
            'userId' => 1,
            'status' => 1
        ]);
        Like::create([
            'productId' => 2,
            'userId' => 1,
            'status' => 0
        ]);
        Like::create([
            'productId' => 3,
            'userId' => 1,
            'status' => 1
        ]);
        MainImage::create([
            'name' => 'dashboard',
            'ext' => 'png',
        ]);
        MainImage::create([
            'name' => 'homegoods',
            'ext' => 'png',
        ]);
        MainImage::create([
            'name' => 'faceandhair',
            'ext' => 'png',
        ]);
        MainImage::create([
            'name' => 'edibles',
            'ext' => 'png',
        ]);
        MainImage::create([
            'name' => 'amazonhurries',
            'ext' => 'png',
        ]);
        MainImage::create([
            'name' => 'wydtyn',
            'ext' => 'png',
        ]);
    }
}
