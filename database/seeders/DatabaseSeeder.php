<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
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

        Category::create(['name' => 'Textile', 'slug' => 'textile', 'description' => 'Le tissage fait son apparition au Maroc aux
        environs de 1500 avant J.C., il fait partie
        désormais du fleuron de l’artisanat marocain.', 'image' => 'product/T1.jpg']);

        Category::create(['name' => 'Argent', 'slug' => 'argent', 'description' => 'L\'argent est l\'élément chimique de numéro atomique 47, de symbole Ag. Entre le cuivre et l\'or, l\'argent appartient à la colonne de la classification périodique appelée \"colonne des métaux à frapper\".', 'image' => 'product/N1.jpg']);

        Category::create(['name' => 'Zellige', 'slug' => 'zellige', 'description' => 'Le zellige est une mosaïque dont les éléments, appelés « tesselles », sont des morceaux de carreaux de faïence colorés.', 'image' => 'product/Z1.jpg']);

        Category::create(['name' => 'Terre', 'slug' => 'terre', 'description' => 'Les poteries marocaines ont des
        spécificités artistiques en fonction des
        régions.
        Les poteries marocaines des villes sont
        toujours émaillées et décorées. Fès, Safi,
        Salé, Marrakech et Tétouan sont les
        cinq centres de céramique marocaine.', 'image' => 'product/H1.jpg']);

        Category::create(['name' => 'Cuir', 'slug' => 'cuir', 'description' => 'Matière vivante que la patine du temps embellit
        encore, le cuir est indissociable du Maroc depuis
        le XIVème siècle, date à laquelle l’Europe a prit
        passion pour le travail exceptionnel des artisans
        de notre pays, attribuant même le nom de
        «maroquinerie» à l’ensemble des produits à
        base de cuir', 'image' => 'product/I1.jpg']);

        Category::create(['name' => 'Vetement', 'slug' => 'vetement', 'description' => 'Le caftan marocain est une tenue traditionnelle marocaine. Sous la forme d\'une tunique longue, et en général à manche longue, portée avec une ceinture qui se déploie sous énormément de styles et de couleurs.', 'image' => 'product/J1.jpg']);

        Category::create(['name' => 'Salon', 'slug' => 'salon', 'description' => 'Les salons marocains sont souvent connus par leurs couleurs, vous pouvez optez pour des couleurs vives qui permettent de créer une ambiance joyeuse et de procurer de l’énergie, mais également pour des couleurs pastels, tel que le beige ou le crème.', 'image' => 'product/S1.jpg']);

        Category::create(['name' => 'Bois', 'slug' => 'bois', 'description' => 'Au Maroc, l’art du bois occupe depuis une
        période très ancienne, une place très importante
        dans l’architecture et dans le mobilier. Il existe
        plusieurs types de bois travaillés au Maroc
        comme le thuya, le noyer, le citronnier, l’oranger
        mais le cèdre reste parmi les bois les plus utilisés
        et les plus prisés chez les artisans marocains.', 'image' => 'product/KH1.jpg']);


        Subcategory::create(['name' => 'Tapis', 'category_id' => 1]);
        Subcategory::create(['name' => 'Sofa', 'category_id' => 2]);
        Subcategory::create(['name' => 'Bracelet', 'category_id' => 3]);
        Subcategory::create(['name' => 'zellige de Fès', 'category_id' => 4]);
        Subcategory::create(['name' => 'Tajine', 'category_id' => 5]);
        Subcategory::create(['name' => 'sac', 'category_id' => 6]);
        Subcategory::create(['name' => 'Jallabat', 'category_id' => 7]);
        Subcategory::create(['name' => 'Salon moderne', 'category_id' => 8]);


        Product::create([
            'name' => 'Tapis',
            'image' => 'product/T1.jpg',
            'price' => rand(900, 1000),
            'description' => '
            Tapis marocain fait main, Taznakht Rug 250cm * 160cm / 8.20 ft * 5.24 ft',
            'additional_info' => 'Les tapis berbères Taznakht sont tissés à la main par les femmes berbères dans les montagnes de l\'Atlas marocain. Les tapis Taznakht se distinguent par des couleurs fortes et lumineuses.',
            'category_id' => 1,
            'subcategory_id' => 1
        ]);

        Product::create([
            'name' => 'Tapis',
            'image' => 'product/T2.jpg',
            'price' => rand(900, 1000),
            'description' => 'Tapis Marocain "Le Tapis II"',
            'additional_info' => 'Un tapis de type carte réalisé en laine libre Sirois, qui est considérée comme l\'une des plus belles laines au Maroc, pour une durée de tissage de 04 mois à cinq mois, longueur 180 et largeur 122. Ses couleurs naturelles sont le blanc, le noir et gris, d\'origine naturelle. La couleur orange est colorée au henné, ses couleurs chimiques sont le bleu, le rouge, le vert, le jaune et le marron. Il est attribué à la tribu Ait et Gorda située dans le Petit Atlas au sud-est du Maroc.',
            'category_id' => 1,
            'subcategory_id' => 1
        ]);

        Product::create([
            'name' => 'Tapis',
            'image' => 'product/T3.jpg',
            'price' => rand(900, 1000),
            'description' => '
            Tapis marocain fait main, Taznakht Rug 250cm * 160cm / 8.20 ft * 5.24 ft',
            'additional_info' => 'Les tapis berbères Taznakht sont tissés à la main par les femmes berbères dans les montagnes de l\'Atlas marocain. Les tapis Taznakht se distinguent par des couleurs fortes et lumineuses.',
            'category_id' => 1,
            'subcategory_id' => 1
        ]);

        Product::create([
            'name' => 'Tapis',
            'image' => 'product/T4.jpg',
            'price' => rand(900, 1000),
            'description' => 'Tapis Marocain "Le Tapis II"',
            'additional_info' => 'Un tapis de type carte réalisé en laine libre Sirois, qui est considérée comme l\'une des plus belles laines au Maroc, pour une durée de tissage de 04 mois à cinq mois, longueur 180 et largeur 122. Ses couleurs naturelles sont le blanc, le noir et gris, d\'origine naturelle. La couleur orange est colorée au henné, ses couleurs chimiques sont le bleu, le rouge, le vert, le jaune et le marron. Il est attribué à la tribu Ait et Gorda située dans le Petit Atlas au sud-est du Maroc.',
            'category_id' => 1,
            'subcategory_id' => 1
        ]);
        Product::create([
            'name' => 'Tapis',
            'image' => 'product/T5.jpg',
            'price' => rand(900, 1000),
            'description' => '
            Tapis marocain fait main, Taznakht Rug 250cm * 160cm / 8.20 ft * 5.24 ft',
            'additional_info' => 'Les tapis berbères Taznakht sont tissés à la main par les femmes berbères dans les montagnes de l\'Atlas marocain. Les tapis Taznakht se distinguent par des couleurs fortes et lumineuses.',
            'category_id' => 1,
            'subcategory_id' => 1
        ]);

        Product::create([
            'name' => 'Bracelet',
            'image' => 'product/N1.jpg',
            'price' => rand(700, 1000),
            'description' => 'Bracelet en argent',
            'additional_info' => 'Bracelet en argent 925',
            'category_id' => 2,
            'subcategory_id' => 2
        ]);

        Product::create([
            'name' => 'Bracelet',
            'image' => 'product/N2.jpg',
            'price' => rand(700, 1000),
            'description' => 'Bracelet jonc en argent',
            'additional_info' => 'Bracelet en argent 925',
            'category_id' => 2,
            'subcategory_id' => 2
        ]);

        Product::create([
            'name' => 'Bracelet',
            'image' => 'product/N3.jpg',
            'price' => rand(700, 1000),
            'description' => 'Bracelet en argent',
            'additional_info' => 'Bracelet en argent 925',
            'category_id' => 2,
            'subcategory_id' => 2
        ]);

        Product::create([
            'name' => 'Bracelet',
            'image' => 'product/N4.jpg',
            'price' => rand(700, 1000),
            'description' => 'Bracelet jonc en argent',
            'additional_info' => 'Bracelet en argent 925',
            'category_id' => 2,
            'subcategory_id' => 2
        ]);
        Product::create([
            'name' => 'Bracelet',
            'image' => 'product/N5.jpg',
            'price' => rand(700, 1000),
            'description' => 'Bracelet en argent',
            'additional_info' => 'Bracelet en argent 925',
            'category_id' => 2,
            'subcategory_id' => 2
        ]);

        Product::create([
            'name' => 'Bracelet',
            'image' => 'product/N6.jpg',
            'price' => rand(700, 1000),
            'description' => 'Bracelet jonc en argent',
            'additional_info' => 'Bracelet en argent 925',
            'category_id' => 2,
            'subcategory_id' => 2
        ]);
        Product::create([
            'name' => 'Bracelet',
            'image' => 'product/N7.jpg',
            'price' => rand(700, 1000),
            'description' => 'Bracelet en argent',
            'additional_info' => 'Bracelet en argent 925',
            'category_id' => 2,
            'subcategory_id' => 2
        ]);

        Product::create([
            'name' => 'Bracelet',
            'image' => 'product/N8.jpg',
            'price' => rand(700, 1000),
            'description' => 'Bracelet jonc en argent',
            'additional_info' => 'Bracelet en argent 925',
            'category_id' => 2,
            'subcategory_id' => 2
        ]);
        Product::create([
            'name' => 'Bracelet',
            'image' => 'product/N9.jpg',
            'price' => rand(700, 1000),
            'description' => 'Bracelet en argent',
            'additional_info' => 'Bracelet en argent 925',
            'category_id' => 2,
            'subcategory_id' => 2
        ]);

        Product::create([
            'name' => 'Bracelet',
            'image' => 'product/N10.jpg',
            'price' => rand(700, 1000),
            'description' => 'Bracelet jonc en argent',
            'additional_info' => 'Bracelet en argent 925',
            'category_id' => 2,
            'subcategory_id' => 2
        ]);
        Product::create([
            'name' => 'Bracelet',
            'image' => 'product/N11.jpg',
            'price' => rand(700, 1000),
            'description' => 'Bracelet en argent',
            'additional_info' => 'Bracelet en argent 925',
            'category_id' => 2,
            'subcategory_id' => 2
        ]);




        Product::create([
            'name' => 'zellige',
            'image' => 'product/Z1.jpg',
            'price' => rand(700, 1000),
            'description' => 'zellige de fes',
            'additional_info' => 'Zellige Maroc, artisan créateur de carreaux ciment et zellige marocain haute gamme à l\'international de Fes',
            'category_id' => 3,
            'subcategory_id' => 3
        ]);

        Product::create([
            'name' => 'zellige',
            'image' => 'product/Z2.jpg',
            'price' => rand(700, 1000),
            'description' => 'zellige de fes',
            'additional_info' => 'Zellige Maroc, artisan créateur de carreaux ciment et zellige marocain haute gamme à l\'international de Fes',
            'category_id' => 3,
            'subcategory_id' => 3
        ]);

        Product::create([
            'name' => 'zellige',
            'image' => 'product/Z3.jpg',
            'price' => rand(700, 1000),
            'description' => 'zellige de fes',
            'additional_info' => 'Zellige Maroc, artisan créateur de carreaux ciment et zellige marocain haute gamme à l\'international de Fes',
            'category_id' => 3,
            'subcategory_id' => 3
        ]);

        Product::create([
            'name' => 'Tajine',
            'image' => 'product/H1.jpg',
            'price' => rand(700, 1000),
            'description' => 'Tajine noir et blanc Guerza Dialna',
            'additional_info' => 'Un art atavique qui séduit les esprits de chacun. Une expression graphique illustrée sur le tissu et aujourd\'hui sur la collection Dialna. Le Maroc répand la nostalgie et la magie d\'un art sensoriel et d\'un patrimoine riche et mythique',
            'category_id' => 4,
            'subcategory_id' => 4
        ]);

        Product::create([
            'name' => 'Tajine',
            'image' => 'product/H2.jpg',
            'price' => rand(700, 1000),
            'description' => 'Tajine marocain',
            'additional_info' => 'Ce produit est un "tajine marocain" conçu pour être utilisé comme récipient alimentaire',
            'category_id' => 4,
            'subcategory_id' => 4
        ]);
        Product::create([
            'name' => 'Tajine',
            'image' => 'product/H3.jpg',
            'price' => rand(700, 1000),
            'description' => 'Tajine noir et blanc Guerza Dialna',
            'additional_info' => 'Un art atavique qui séduit les esprits de chacun. Une expression graphique illustrée sur le tissu et aujourd\'hui sur la collection Dialna. Le Maroc répand la nostalgie et la magie d\'un art sensoriel et d\'un patrimoine riche et mythique',
            'category_id' => 4,
            'subcategory_id' => 4
        ]);

        Product::create([
            'name' => 'Tajine',
            'image' => 'product/H4.jpg',
            'price' => rand(700, 1000),
            'description' => 'Tajine marocain',
            'additional_info' => 'Ce produit est un "tajine marocain" conçu pour être utilisé comme récipient alimentaire',
            'category_id' => 4,
            'subcategory_id' => 4
        ]);
        Product::create([
            'name' => 'Tajine',
            'image' => 'product/H5.jpg',
            'price' => rand(700, 1000),
            'description' => 'Tajine noir et blanc Guerza Dialna',
            'additional_info' => 'Un art atavique qui séduit les esprits de chacun. Une expression graphique illustrée sur le tissu et aujourd\'hui sur la collection Dialna. Le Maroc répand la nostalgie et la magie d\'un art sensoriel et d\'un patrimoine riche et mythique',
            'category_id' => 4,
            'subcategory_id' => 4
        ]);

        Product::create([
            'name' => 'Tajine',
            'image' => 'product/H6.jpg',
            'price' => rand(700, 1000),
            'description' => 'Tajine marocain',
            'additional_info' => 'Ce produit est un "tajine marocain" conçu pour être utilisé comme récipient alimentaire',
            'category_id' => 4,
            'subcategory_id' => 4
        ]);
        Product::create([
            'name' => 'Tajine',
            'image' => 'product/H7.jpg',
            'price' => rand(700, 1000),
            'description' => 'Tajine noir et blanc Guerza Dialna',
            'additional_info' => 'Un art atavique qui séduit les esprits de chacun. Une expression graphique illustrée sur le tissu et aujourd\'hui sur la collection Dialna. Le Maroc répand la nostalgie et la magie d\'un art sensoriel et d\'un patrimoine riche et mythique',
            'category_id' => 4,
            'subcategory_id' => 4
        ]);

        Product::create([
            'name' => 'Tajine',
            'image' => 'product/H8.jpg',
            'price' => rand(700, 1000),
            'description' => 'Tajine marocain',
            'additional_info' => 'Ce produit est un "tajine marocain" conçu pour être utilisé comme récipient alimentaire',
            'category_id' => 4,
            'subcategory_id' => 4
        ]);
        Product::create([
            'name' => 'Tajine',
            'image' => 'product/H9.jpg',
            'price' => rand(700, 1000),
            'description' => 'Tajine noir et blanc Guerza Dialna',
            'additional_info' => 'Un art atavique qui séduit les esprits de chacun. Une expression graphique illustrée sur le tissu et aujourd\'hui sur la collection Dialna. Le Maroc répand la nostalgie et la magie d\'un art sensoriel et d\'un patrimoine riche et mythique',
            'category_id' => 4,
            'subcategory_id' => 4
        ]);

        Product::create([
            'name' => 'Tajine',
            'image' => 'product/H10.jpg',
            'price' => rand(700, 1000),
            'description' => 'Tajine marocain',
            'additional_info' => 'Ce produit est un "tajine marocain" conçu pour être utilisé comme récipient alimentaire',
            'category_id' => 4,
            'subcategory_id' => 4
        ]);


        Product::create([
            'name' => 'préféré',
            'image' => 'product/I1.jpg',
            'price' => rand(700, 1000),
            'description' => 'Mon préféré',
            'additional_info' => 'Fatigué des ballerines ? Ces sandales sont une excellente alternative : anti-transpirante, originale, classe. Idéal en toutes circonstances !',
            'category_id' => 5,
            'subcategory_id' => 5
        ]);
        Product::create([
            'name' => 'Maktoub',
            'image' => 'product/I2.jpg',
            'price' => rand(700, 1000),
            'description' => 'Maktoub',
            'additional_info' => 'Fatigué des ballerines ? Optez pour ces sandales chics : anti-transpirantes, originales, elles ne passeront pas inaperçues.',
            'category_id' => 5,
            'subcategory_id' => 5
        ]);
        Product::create([
            'name' => 'préféré',
            'image' => 'product/I3.jpg',
            'price' => rand(700, 1000),
            'description' => 'Mon préféré',
            'additional_info' => 'Fatigué des ballerines ? Ces sandales sont une excellente alternative : anti-transpirante, originale, classe. Idéal en toutes circonstances !',
            'category_id' => 5,
            'subcategory_id' => 5
        ]);
        Product::create([
            'name' => 'Maktoub',
            'image' => 'product/I4.jpg',
            'price' => rand(700, 1000),
            'description' => 'Maktoub',
            'additional_info' => 'Fatigué des ballerines ? Optez pour ces sandales chics : anti-transpirantes, originales, elles ne passeront pas inaperçues.',
            'category_id' => 5,
            'subcategory_id' => 5
        ]);

        Product::create([
            'name' => 'kaftan',
            'image' => 'product/J1.jpg',
            'price' => rand(700, 1000),
            'description' => 'HOLY Kaftan',
            'additional_info' => 'Holy Kaftan Col #102 Navy Blue / Col 119 White / Col #112 Royal Blue',
            'category_id' => 6,
            'subcategory_id' => 6
        ]);

        Product::create([
            'name' => 'kaftan',
            'image' => 'product/J2.jpg',
            'price' => rand(700, 1000),
            'description' => 'CHARLIE Kaftan',
            'additional_info' => 'Ce caftan à lacets en noir est facile à porter de la plage au déjeuner.',
            'category_id' => 6,
            'subcategory_id' => 6
        ]);

        Product::create([
            'name' => 'kaftan',
            'image' => 'product/J3.jpg',
            'price' => rand(700, 1000),
            'description' => 'HOLY Kaftan',
            'additional_info' => 'Holy Kaftan Col #102 Navy Blue / Col 119 White / Col #112 Royal Blue',
            'category_id' => 6,
            'subcategory_id' => 6
        ]);

        Product::create([
            'name' => 'kaftan',
            'image' => 'product/J4.jpg',
            'price' => rand(700, 1000),
            'description' => 'CHARLIE Kaftan',
            'additional_info' => 'Ce caftan à lacets en noir est facile à porter de la plage au déjeuner.',
            'category_id' => 6,
            'subcategory_id' => 6
        ]);
        Product::create([
            'name' => 'kaftan',
            'image' => 'product/J5.jpg',
            'price' => rand(700, 1000),
            'description' => 'HOLY Kaftan',
            'additional_info' => 'Holy Kaftan Col #102 Navy Blue / Col 119 White / Col #112 Royal Blue',
            'category_id' => 6,
            'subcategory_id' => 6
        ]);

        Product::create([
            'name' => 'Salan',
            'image' => 'product/S1.jpg',
            'price' => rand(700, 1000),
            'description' => 'Brown Leather Pillowcase',
            'additional_info' => 'This 100% authentic leather cushion cover will add a touch of luxury to your rooms.',
            'category_id' => 7,
            'subcategory_id' => 7
        ]);
        Product::create([
            'name' => 'Salan',
            'image' => 'product/S2.jpg',
            'price' => rand(700, 1000),
            'description' => 'Brown Leather Pillowcase',
            'additional_info' => 'This 100% authentic leather cushion cover will add a touch of luxury to your rooms.',
            'category_id' => 7,
            'subcategory_id' => 7
        ]);
        Product::create([
            'name' => 'Salan',
            'image' => 'product/S3.jpg',
            'price' => rand(700, 1000),
            'description' => 'Brown Leather Pillowcase',
            'additional_info' => 'This 100% authentic leather cushion cover will add a touch of luxury to your rooms.',
            'category_id' => 7,
            'subcategory_id' => 7
        ]);
        Product::create([
            'name' => 'Salan',
            'image' => 'product/S4.jpg',
            'price' => rand(700, 1000),
            'description' => 'Brown Leather Pillowcase',
            'additional_info' => 'This 100% authentic leather cushion cover will add a touch of luxury to your rooms.',
            'category_id' => 7,
            'subcategory_id' => 7
        ]);

        Product::create([
            'name' => 'bois',
            'image' => 'product/KH1.jpg',
            'price' => rand(700, 1000),
            'description' => 'Le bois est un matériau naturel d\'origine végétale',
            'additional_info' => 'Il est constitué par un tissu végétal formant la plus grande partie du tronc des plantes ligneuses.',
            'category_id' => 8,
            'subcategory_id' => 8
        ]);

        Product::create([
            'name' => 'bois',
            'image' => 'product/KH2.jpg',
            'price' => rand(700, 1000),
            'description' => 'Le bois est un matériau naturel d\'origine végétale',
            'additional_info' => 'Il est constitué par un tissu végétal formant la plus grande partie du tronc des plantes ligneuses.',
            'category_id' => 8,
            'subcategory_id' => 8
        ]);

        Product::create([
            'name' => 'bois',
            'image' => 'product/KH3.jpg',
            'price' => rand(700, 1000),
            'description' => 'Le bois est un matériau naturel d\'origine végétale',
            'additional_info' => 'Il est constitué par un tissu végétal formant la plus grande partie du tronc des plantes ligneuses.',
            'category_id' => 8,
            'subcategory_id' => 8
        ]);

        Slider::create([
            'image' => 'public/slider/TsJ3V2fDCkZJrsh97IRrGn3bl3kyOIjgDEZcHr62.png',
            'name' => 'Poterie et Céramique',
            'url' => '2'
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
