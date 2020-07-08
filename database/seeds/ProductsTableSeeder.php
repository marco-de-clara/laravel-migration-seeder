<?php

use Illuminate\Database\Seeder;

use App\Product;

use Faker\Generator as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $data_products = [
        //     [
        //         'type' => 'Waterproof Boots',
        //         'amount' => '97.25',
        //         'ratings' => '4'
        //     ],
        //     [
        //         'type' => 'Stereo Headset',
        //         'amount' => '39.89',
        //         'ratings' => '5'
        //     ],
        //     [
        //         'type' => 'Quartz Watch',
        //         'amount' => '45.84',
        //         'ratings' => '3'
        //     ]
        // ];

        // foreach ($data_products as $data_product) {
        //     $new_product = new Product();
        //     $new_product->type = $data_product['type'];
        //     $new_product->amount = $data_product['amount'];
        //     $new_product->ratings = $data_product['ratings'];
        //     $new_product->save();
        // }

        for ($i=0; $i < 10; $i++) { 
            $new_product = new Product();
            $new_product->type = $faker->word;
            $new_product->amount = $faker->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 100);
            $new_product->ratings = $faker->numberBetween($min = 1, $max = 5);
            $new_product->save();
        }
    }
}
