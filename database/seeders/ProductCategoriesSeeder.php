<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Models\ProductCategory();
        $category->name = "Antiek en kunst";
        $category->save();
        $category = new \App\Models\ProductCategory();
        $category->name = "Audio, tv en foto";
        $category->save();
        $category = new \App\Models\ProductCategory();
        $category->name = "Auto diversen";
        $category->save();
        $category = new \App\Models\ProductCategory();
        $category->name = "Auto's";
        $category->save();
        $category = new \App\Models\ProductCategory();
        $category->name = "Auto-onderdelen";
        $category->save();
        $category = new \App\Models\ProductCategory();
        $category->name = "Boeken";
        $category->save();
        $category = new \App\Models\ProductCategory();
        $category->name = "Caravans en kamperen";
        $category->save();
        $category = new \App\Models\ProductCategory();
        $category->name = "Cd's";
        $category->save();
        $category = new \App\Models\ProductCategory();
        $category->name = "Dvd's";
        $category->save();
        $category = new \App\Models\ProductCategory();
        $category->name = "Computers";
        $category->save();
        $category = new \App\Models\ProductCategory();
        $category->name = "Elektronische apparatuur";
        $category->save();
        $category = new \App\Models\ProductCategory();
        $category->name = "Fietsen";
        $category->save();
        $category = new \App\Models\ProductCategory();
        $category->name = "Brommers";
        $category->save();
        $category = new \App\Models\ProductCategory();
        $category->name = "Games";
        $category->save();
        $category = new \App\Models\ProductCategory();
        $category->name = "Spelcomputers";
        $category->save();
        $category = new \App\Models\ProductCategory();
        $category->name = "Motoren";
        $category->save();
        $category = new \App\Models\ProductCategory();
        $category->name = "Diversen";
        $category->save();
    }
}
