<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_products = [
            [
                'type' => 'Waterproof Boots',
                'amount' => '97,25€',
                'ratings' => '4'
            ],
            [
                'type' => 'Stereo Headset',
                'amount' => '39,89€',
                'ratings' => '5'
            ],
            [
                'type' => 'Quartz Watch',
                'amount' => '45,84€',
                'ratings' => '3'
            ]
        ];

        foreach ($data_products as $data_product) {
            $new_product = new Product();
            $new_product->type = $data_product['type'];
            $new_product->amount = $data_product['amount'];
            $new_product->ratings = $data_product['ratings'];
            $new_product->save();
        }
    }
}
