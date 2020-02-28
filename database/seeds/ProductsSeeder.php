<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'shortName' => 'Fruit-rouge',
            'longName' => 'Fruit-rouge',
            'shortDesc' => 'Ecran: 6.1" Mémoire RAM/ROM: 4Go/64Go Caméra arrière: 16+8+2Mpx',
            'longDesc' => "Mémoire RAM/ROM: 4Go/64Go Caméra arrière: 16+8+2Mpx 1080p Caméra avant: 16Mpx Système d'exploitation: Android 9 Avec lecteur d'empreintes Double SIM Réseau: 2G/3G/4G",
            'price' => '11300',
            'categories_id' => '1',
        ]);
        $product->save();

        $product = new \App\Product([
            'shortName' => 'Tomate',
            'longName' => 'Tomate',
            'shortDesc' => 'Ecran: 6.1" Mémoire RAM/ROM: 4Go/64Go Caméra arrière: 16+8+2Mpx',
            'longDesc' => "Mémoire RAM/ROM: 4Go/64Go Caméra arrière: 16+8+2Mpx 1080p Caméra avant: 16Mpx Système d'exploitation: Android 9 Avec lecteur d'empreintes Double SIM Réseau: 2G/3G/4G",
            'price' => '11300',
            'categories_id' => '1',
        ]);
        $product->save();

        $product = new \App\Product([
            'shortName' => 'Haricot-vert',
            'longName' => 'Haricot-vert',
            'shortDesc' => 'Ecran: 6.1" Mémoire RAM/ROM: 4Go/64Go Caméra arrière: 16+8+2Mpx',
            'longDesc' => "Mémoire RAM/ROM: 4Go/64Go Caméra arrière: 16+8+2Mpx 1080p Caméra avant: 16Mpx Système d'exploitation: Android 9 Avec lecteur d'empreintes Double SIM Réseau: 2G/3G/4G",
            'price' => '11300',
            'categories_id' => '1',
        ]);
        $product->save();

        $product = new \App\Product([
            'shortName' => 'Légume',
            'longName' => 'Légume',
            'shortDesc' => 'Ecran: 6.1" Mémoire RAM/ROM: 4Go/64Go Caméra arrière: 16+8+2Mpx',
            'longDesc' => "Mémoire RAM/ROM: 4Go/64Go Caméra arrière: 16+8+2Mpx 1080p Caméra avant: 16Mpx Système d'exploitation: Android 9 Avec lecteur d'empreintes Double SIM Réseau: 2G/3G/4G",
            'price' => '11300',
            'categories_id' => '1',
        ]);
        $product->save();

        $product = new \App\Product([
            'shortName' => 'Poivre',
            'longName' => 'Poivre',
            'shortDesc' => 'Ecran: 6.1" Mémoire RAM/ROM: 4Go/64Go Caméra arrière: 16+8+2Mpx',
            'longDesc' => "Mémoire RAM/ROM: 4Go/64Go Caméra arrière: 16+8+2Mpx 1080p Caméra avant: 16Mpx Système d'exploitation: Android 9 Avec lecteur d'empreintes Double SIM Réseau: 2G/3G/4G",
            'price' => '11300',
            'categories_id' => '1',
        ]);
        $product->save();
    }
}
