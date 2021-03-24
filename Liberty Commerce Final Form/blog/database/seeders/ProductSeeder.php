<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => 'Lot de trois étagère métal, Hina',
            'description' => "Lot de 3 étagères en métal Hina. 
Des lignes légères et discrètes, qui donnent à ces étagères une petite touche d'inspiration industrielle.
Recouvert d'une peinture époxy mate
A suspendre
Vis et chevilles non fournies

Dimensions :

Modèle 1 : 40 x 12 x 28 cm
Modèle 2 : 35 x 12 x 24 cm
Modèle 3 : 25 x 12 x 18 cm",
            'photo' => '../css/image/shopping.png',
            'category' => 'Meubles muraux / Étagère',
            'stock' => '100',
            'reference' =>'Hina',
            'price' => 40.09
        ]);

/*----------------------------------------------------------------------------------------------------------------------------------------------------------*/

        DB::table('product')->insert([
            'name' => 'Cache-pot mural métal, Ike',
            'description' => "Cache-pot mural métal Ike
La tendance est à la déco végétale, plantes grasses, cactus et pourquoi pas mini plantes aromatiques seront magnifiquement mises en valeur dans ce cache-pot mural en métal au design géométrique.

Caractéristiques :

Métal finition époxy
8 pots amovibles
Fixation murale non fournie

Dimensions :

L 105 x H 65 x P 11 cm
Dimension d'un pot : L 23 x H 16,3 cm",
            'photo' => '../css/image/cache-pot.png',
            'category' => 'Meubles muraux / Cache-pot',
            'stock' => '0',
            'reference' =>'Ike',
            'price' => 79.99
        ]);

/*----------------------------------------------------------------------------------------------------------------------------------------------------------*/

        DB::table('product')->insert([
            'name' => 'Console / planteur Consuela',
            'description' => "Console/planteur consuela noir mate
Un style contemporain épuré. Console/planteur extérieure en métal.

Caractéristiques :

En métal finition epoxy noir mat traité anti-corrosion

Dimensions de la console/planteur :

L 90 x H 80 x P 24 cm",
            'photo' => '../css/image/console.png',
            'category' => 'Décoration jardin / Console/planteur',
            'stock' => '50',
            'reference' =>'Console',
            'price' => 227.99
        ]);

/*----------------------------------------------------------------------------------------------------------------------------------------------------------*/

        DB::table('product')->insert([
            'name' => 'Lampe tarbes',
            'description' => "Lampe tarbes
Cette lampe à poser en acier vous séduira par sa structure filaire au coloris cuivre et sa forme de diamant qui font d'elle un luminaire original et tendance. Elle a tout ce qu'il faut pour briller dans votre salon ou votre chambre.

Caractéristiques :

Couleur : Cuivré
Détails : Ce luminaire nécessite une ampoule culot E27, non incluse

Dimensions :

H 26,5 x D 17,5 cm",
            'photo' => '../css/image/lumiere.png',
            'category' => 'Décoration interieur / Lampe tarbes',
            'stock' => '90',
            'reference' =>'Lampe',
            'price' => 19.50
        ]);

/*----------------------------------------------------------------------------------------------------------------------------------------------------------*/

        DB::table('product')->insert([
            'name' => 'Canapé velours, Lazare',
            'description' => "Canapé velours, Lazare
Canapé fixe 3, 4 ou 5 places, Lazare, velours. Fabrication italienne.
Un canapé très élégant sous influence classique, totalement actualisé !

Caractéristiques :

Confort d'assise :
Confort souple et moelleux
Coussins d'assise garnis de mousse polyuréthane 30kg/m ³ et d'une poche de flocons de fibres polyester, pour un accueil moelleux.

Confort de dossier :

Moelleux et enveloppant
Coussins de dossier, dimensions 64 x 64 cm, en fibres polyester et plumes d'oie.

Dimensions :

L 198 x H 93 x P 103cm
Assise : L 185 x H 45 x P 50 cm",
            'photo' => '../css/image/canap.png',
            'category' => 'Décoration interieur / Canapé',
            'stock' => '10',
            'reference' =>'Lazare',
            'price' => 2033.90
        ]);

/*----------------------------------------------------------------------------------------------------------------------------------------------------------*/

        DB::table('product')->insert([
            'name' => 'Meuble TV, Rick',
            'description' => "Meuble TV, Rick
Inspirée du design scandinave ce meuble TV confirme le regain d'intérêt pour les meubles en bois clair, aux pieds fuselés et évasés typiques, aux lignes toutes simples et tellement stylées.

Caractéristiques :

Plateau et côtés : paulownia massif
Fonds : contreplaqué
Façades : hévéa naturel
Tiroirs : 6
Pieds (à fixer) : pin massif
Poids : 12 kg

Dimensions :

L 120 x H 54 x P 30 cm",
            'photo' => '../css/image/meubletv.png',
            'category' => 'Décoration interieur / Meuble TV',
            'stock' => '100',
            'reference' =>'Rick',
            'price' => 89.00
        ]);

/*----------------------------------------------------------------------------------------------------------------------------------------------------------*/

            DB::table('product')->insert([
            'name' => 'Bureau chêne massif abouté, Edgar',
            'description' => "Bureau chêne massif abouté, Edgar
Robustesse, ergonomie et modularité : le bureau Edgar vous offre de nombreuses possibilités d'organisation et de rangements pour un espace de travail idéal.

Caractéristiques :

Chêne massif abouté, finition huilée
1 caisson réversible : 1 niche + 1 porte réversible avec étagère ajustable à l'intérieur.
1 caisson amovible : 1 niche et 1 tiroir, à poser sur le plateau ou à fixer au mur.

Dimensions :

Totales :

Largeur : 120 cm.
Hauteur : 75 cm (plateau) / 105 cm (avec caisson amovible).
Profondeur : 50 cm.

Caisson amovible :

L 35 x H 30 x P 28 cm",
            'photo' => '../css/image/bureau.png',
            'category' => 'Décoration interieur / Bureau',
            'stock' => '110',
            'reference' =>'Edgar',
            'price' => 337.68
        ]);

/*----------------------------------------------------------------------------------------------------------------------------------------------------------*/

        DB::table('product')->insert([
            'name' => 'Lit avec sommier, Elori',
            'description' => "Lit avec sommier, Elori
Un design contemporain, inspiré du style scandinave.
Ses plus : ses tiroirs de rangement astucieux (vendus séparément sur notre site), qui permettent un gain d'espace en toute discrétion.

Caractéristiques :

Structure et piétement en frêne massif, finition vernis nitrocellulosique.
Tête et pied de lit en frêne et multiplis, garnis de mousse
Sommier à lattes en multiplis intégré.

Dimensions :

Taille 160 x 200 cm (couchage 160 x 200 cm)
Longueur 208,5 cm
Largeur 170 cm
Hauteur 80 cm",
            'photo' => '../css/image/lit.png',
            'category' => 'Décoration interieur / Lit',
            'stock' => '20',
            'reference' =>'Elori',
            'price' => 450.58
        ]);

/*----------------------------------------------------------------------------------------------------------------------------------------------------------*/

        DB::table('product')->insert([
            'name' => 'Table basse ronde en verre trempé, Sola',
            'description' => "Table basse ronde en verre trempé, Sola
Son plateau rond en verre trempé surplombe sa base en manguier massif habillée de dessins contrastés, le tout posé sur un piétement en métal à la finition laiton.

Caractéristiques :

Plateau supérieur : verre trempé
Plateau inférieur : manguier massif
Pieds : métal coloris laiton

Dimensions :

Dimensions (cm): H 34.2 x L 80 x P 80
Poids (kg): 18.5",
            'photo' => '../css/image/table.png',
            'category' => 'Décoration interieur / Tables / Table basse',
            'stock' => '17',
            'reference' =>'Sola',
            'price' => 299.00
        ]);

/*----------------------------------------------------------------------------------------------------------------------------------------------------------*/

        DB::table('product')->insert([
            'name' => 'Lot de 2 chaises, Jimi',
            'description' => "Lot de 2 chaises, Jimi
Les 2 chaises revêtement légèrement chiné Jimi. Enveloppantes et ergonomiques pour le confort, design super stylé pour un effet super, les chaises JIMI apportent du caractère autour de la table.

Caractéristiques :

Forme enveloppante ergonomique
Revêtement dossier et assise en tissu légèrement chiné 100% polyester


Dimensions :

Longueur : 48 cm
Hauteur : 82.5 cm",
            'photo' => '../css/image/chaises.png',
            'category' => 'Décoration interieur / Salle à manger / Chaise',
            'stock' => '84',
            'reference' =>'Jimi',
            'price' => 208.23
        ]);

/*----------------------------------------------------------------------------------------------------------------------------------------------------------*/

        DB::table('product')->insert([
            'name' => 'Bibliothèque en orme massif recyclé Sumiko',
            'description' => "Bibliothèque en orme massif recyclé Sumiko
Elle est réalisée à partir de portes ou volets récupérés d'anciennes demeures dans des villages en Chine. Chaque pièce est unique et révèle les imperfections et traces de vie témoins de son histoire.

Caractéristiques :

En orme massif recyclé, chaque pièce est unique.
Peut s'installer horizontalement ou verticalement.


Dimensions :

L100 x H170 x P33 cm
Dimensions utiles étagères : 37,7 x 31 et 37,7 x 23 cm",
            'photo' => '../css/image/biblio.png',
            'category' => 'Meubles / Bibliothèque',
            'stock' => '100',
            'reference' =>'Sumiko',
            'price' =>  599.00
        ]);

/*----------------------------------------------------------------------------------------------------------------------------------------------------------*/

        DB::table('product')->insert([
            'name' => 'Table marbre, Buondi',
            'description' => "Table marbre, Buondi
Élégance, évidence et simplicité sont ses maîtres mots et pour lui, le souci du détail est une réalité de chaque instant dans la ligne, la forme, et la fonctionnalité.

Caractéristiques :

Plateau en marbre de Carrare (chaque pièce est unique, les marbrures sont plus ou moins marquées).
Piètement en chêne massif sablé FSC*
Pour 8 couverts.
  * Le Label FSC délivré par le Conseil International de Gestion Forestière (Forest Stewardship Council), vous certifie la gestion durable de la forêt,
la légalité et la traçabilité du bois, le maintien de la biodiversité et le respect des communautés locales.

Dimensions :

L 220 x H 72 x P 90 cm",
            'photo' => '../css/image/tablemanger.png',
            'category' => 'Décoration interieur / Salle à manger / Table',
            'stock' => '58',
            'reference' =>'Buondi',
            'price' => 2199.00
        ]);



    }
}

