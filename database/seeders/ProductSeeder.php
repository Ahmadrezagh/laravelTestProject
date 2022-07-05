<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::query()->select('id')->where('type','=',1)->get();
        $product_names = [
            'Chipotle Chicken Bowl',
            'Bacon Ranch Pasta',
            'Slow Cooker Chile',
            'Party Platter Wings',
            'Craft Burgers',
            'Grilled Smoked Chicken',
            'Cream Chicken chiladas',
            'Boneless Chicken Salad',
            'Guacamole Burger',
            'Caribbean Grilled Chicken',
            'Baked Potato Soup',
            'Margarita Chicken Bowl'
        ];
        $products = Product::factory(12)->create();
        foreach ($products as $key => $product)
        {
            $product->update([
                'name' => $product_names[$key]
            ]);
            $product->categories()->saveMany($categories->random(2));
        }
    }
}
