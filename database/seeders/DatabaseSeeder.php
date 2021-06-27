<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

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
        // $this->call(UsersTableSeeder::class);
        
        Category::create(['name' => 'laptop', 'slug' => 'laptop', 'description' => 'laptop category', 'image' => 'files/THYf1ZI6H9DvGoZYfiBel2KDk6VgGtZljoetdPf1.jpg']);
        Category::create(['name' => 'mobile phone', 'slug' => 'mobile-phone', 'description' => 'mobile phone category', 'image' => 'files/THYf1ZI6H9DvGoZYfiBel2KDk6VgGtZljoetdPf1.jpg']);
        Category::create(['name' => 'books', 'slug' => 'books', 'description' => 'bookx category', 'image' => 'files/THYf1ZI6H9DvGoZYfiBel2KDk6VgGtZljoetdPf1.jpg']);

        Subcategory::create(['name' => 'dell', 'category_id' => 1]);
        Subcategory::create(['name' => 'hp', 'category_id' => 1]);
        Subcategory::create(['name' => 'lenovo', 'category_id' => 1]);

        Product::create([
            'name' => 'HP LAPTOPS ',
            'image' => 'product/qdzo36WWGu7zRTMGwC5XZasYKDgqGR1FT5l0dSM7.jpg',
            'price' => rand(700, 1000),
            'description' => 'This is the description of a product',
            'additional_info' => 'This is additional info',
            'category_id' => 1,
            'subcategory_id' => 1
        ]);

        Product::create([
            'name' => 'Dell LAPTOPS ',
            'image' => 'product/Tmm9zdWnDZE4kdWui4Y3M8kCpaLmkG6UW3bULFcu.jpg',
            'price' => rand(800, 1000),
            'description' => 'This is the description of a product',
            'additional_info' => 'This is additional info',
            'category_id' => 1,
            'subcategory_id' => 1
        ]);

        Product::create([
            'name' => 'LENOVO LAPTOPS ',
            'image' => 'product/qdzo36WWGu7zRTMGwC5XZasYKDgqGR1FT5l0dSM7.jpg',
            'price' => rand(700, 1000),
            'description' => 'This is the description of a product',
            'additional_info' => 'This is additional info',
            'category_id' => 1,
            'subcategory_id' => 2
        ]);

                Product::create([
            'name' => 'HP LAPTOPS ',
            'image' => 'product/qdzo36WWGu7zRTMGwC5XZasYKDgqGR1FT5l0dSM7.jpg',
            'price' => rand(700, 1000),
            'description' => 'This is the description of a product',
            'additional_info' => 'This is additional info',
            'category_id' => 1,
            'subcategory_id' => 1
        ]);

        Product::create([
            'name' => 'Dell LAPTOPS ',
            'image' => 'product/Tmm9zdWnDZE4kdWui4Y3M8kCpaLmkG6UW3bULFcu.jpg',
            'price' => rand(800, 1000),
            'description' => 'This is the description of a product',
            'additional_info' => 'This is additional info',
            'category_id' => 1,
            'subcategory_id' => 1
        ]);

        Product::create([
            'name' => 'LENOVO LAPTOPS ',
            'image' => 'product/qdzo36WWGu7zRTMGwC5XZasYKDgqGR1FT5l0dSM7.jpg',
            'price' => rand(700, 1000),
            'description' => 'This is the description of a product',
            'additional_info' => 'This is additional info',
            'category_id' => 1,
            'subcategory_id' => 2
        ]);

                Product::create([
            'name' => 'HP LAPTOPS ',
            'image' => 'product/qdzo36WWGu7zRTMGwC5XZasYKDgqGR1FT5l0dSM7.jpg',
            'price' => rand(700, 1000),
            'description' => 'This is the description of a product',
            'additional_info' => 'This is additional info',
            'category_id' => 1,
            'subcategory_id' => 1
        ]);

        Product::create([
            'name' => 'Dell LAPTOPS ',
            'image' => 'product/Tmm9zdWnDZE4kdWui4Y3M8kCpaLmkG6UW3bULFcu.jpg',
            'price' => rand(800, 1000),
            'description' => 'This is the description of a product',
            'additional_info' => 'This is additional info',
            'category_id' => 1,
            'subcategory_id' => 1
        ]);

        Product::create([
            'name' => 'LENOVO LAPTOPS ',
            'image' => 'product/qdzo36WWGu7zRTMGwC5XZasYKDgqGR1FT5l0dSM7.jpg',
            'price' => rand(700, 1000),
            'description' => 'This is the description of a product',
            'additional_info' => 'This is additional info',
            'category_id' => 1,
            'subcategory_id' => 2
        ]);

                Product::create([
            'name' => 'HP LAPTOPS ',
            'image' => 'product/qdzo36WWGu7zRTMGwC5XZasYKDgqGR1FT5l0dSM7.jpg',
            'price' => rand(700, 1000),
            'description' => 'This is the description of a product',
            'additional_info' => 'This is additional info',
            'category_id' => 1,
            'subcategory_id' => 1
        ]);

        Product::create([
            'name' => 'Dell LAPTOPS ',
            'image' => 'product/Tmm9zdWnDZE4kdWui4Y3M8kCpaLmkG6UW3bULFcu.jpg',
            'price' => rand(800, 1000),
            'description' => 'This is the description of a product',
            'additional_info' => 'This is additional info',
            'category_id' => 1,
            'subcategory_id' => 1
        ]);

        Product::create([
            'name' => 'LENOVO LAPTOPS ',
            'image' => 'product/qdzo36WWGu7zRTMGwC5XZasYKDgqGR1FT5l0dSM7.jpg',
            'price' => rand(700, 1000),
            'description' => 'This is the description of a product',
            'additional_info' => 'This is additional info',
            'category_id' => 1,
            'subcategory_id' => 2
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => NOW(),
            'address' => 'Maroc',
            'phone_number' => '0576232',
            'is_admin' => 1
        ]);
    }
}
