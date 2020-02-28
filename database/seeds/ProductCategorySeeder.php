<?php

use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productCategory = new \App\ProductCategory([
            'title' => 'Légumes'
        ]);
        $productCategory->save();

        $productCategory = new \App\ProductCategory([
            'title' => 'Bétails'
        ]);
        $productCategory->save();

        $productCategory = new \App\ProductCategory([
            'title' => 'Volailles'
        ]);
        $productCategory->save();

        $productCategory = new \App\ProductCategory([
            'title' => 'Fruits'
        ]);
        $productCategory->save();
    }
}
