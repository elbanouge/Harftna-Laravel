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

        // Category::create(['name' => 'laptop', 'slug' => 'laptop', 'description' => 'laptop category', 'image' => 'files/THYf1ZI6H9DvGoZYfiBel2KDk6VgGtZljoetdPf1.jpg']);
        // Category::create(['name' => 'mobile phone', 'slug' => 'mobile-phone', 'description' => 'mobile phone category', 'image' => 'files/THYf1ZI6H9DvGoZYfiBel2KDk6VgGtZljoetdPf1.jpg']);
        // Category::create(['name' => 'books', 'slug' => 'books', 'description' => 'bookx category', 'image' => 'files/THYf1ZI6H9DvGoZYfiBel2KDk6VgGtZljoetdPf1.jpg']);

        Category::create(['name' => 'Textile', 'slug' => 'Textile', 'description' => 'Le tissage fait son apparition au Maroc aux
        environs de 1500 avant J.C., il fait partie désormais du fleuron de l’artisanat marocain.', 'image' => 'files/product/T1.jpg']);

        Category::create(['name' => 'َArgent', 'slug' => 'argent', 'description' => 'L\'argent est l\'élément chimique de numéro atomique 47, de symbole Ag. Entre le cuivre et l\'or, l\'argent appartient à la colonne de la classification périodique appelée \"colonne des métaux à frapper\".', 'image' => 'files/product/N1.jpg']);

        Category::create(['name' => 'zellige', 'slug' => 'zellige', 'description' => 'Le zellige est une mosaïque dont les éléments, appelés « tesselles », sont des morceaux de carreaux de faïence colorés.', 'image' => 'files/product/Z1.jpg']);

        Category::create(['name' => 'terre', 'slug' => 'terre', 'description' => 'Les poteries marocaines ont des
        spécificités artistiques en fonction des
        régions.
        Les poteries marocaines des villes sont
        toujours émaillées et décorées. Fès, Safi,
        Salé, Marrakech et Tétouan sont les
        cinq centres de céramique marocaine.', 'image' => 'files/product/H1.jpg']);

        Category::create(['name' => 'cuir', 'slug' => 'cuir', 'description' => 'Matière vivante que la patine du temps embellit
        encore, le cuir est indissociable du Maroc depuis
        le XIVème siècle, date à laquelle l’Europe a prit
        passion pour le travail exceptionnel des artisans
        de notre pays, attribuant même le nom de
        «maroquinerie» à l’ensemble des produits à
        base de cuir', 'image' => 'files/product/I1.jpg']);

        Category::create(['name' => 'Vetement', 'slug' => 'Vetement', 'description' => 'Le caftan marocain est une tenue traditionnelle marocaine. Sous la forme d\'une tunique longue, et en général à manche longue, portée avec une ceinture qui se déploie sous énormément de styles et de couleurs.', 'image' => 'files/product/J1.jpg']);

        Category::create(['name' => 'Salon', 'slug' => 'Salon', 'description' => 'Les salons marocains sont souvent connus par leurs couleurs, vous pouvez optez pour des couleurs vives qui permettent de créer une ambiance joyeuse et de procurer de l’énergie, mais également pour des couleurs pastels, tel que le beige ou le crème.', 'image' => 'files/product/S1.jpg']);

        Category::create(['name' => 'bois', 'slug' => 'bois', 'description' => 'Au Maroc, l’art du bois occupe depuis une
        période très ancienne, une place très importante
        dans l’architecture et dans le mobilier. Il existe
        plusieurs types de bois travaillés au Maroc
        comme le thuya, le noyer, le citronnier, l’oranger
        mais le cèdre reste parmi les bois les plus utilisés
        et les plus prisés chez les artisans marocains.', 'image' => 'files/product/KH1.jpg']);

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
