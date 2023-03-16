<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //factory(Product::class, 50)->create();
        for($i = 1; $i <= 50; $i++){
            $value = rand(1,50)*$i;
            Product::create([
                'name' => 'Product '.$i,
                'price' => $value,
                'created_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
