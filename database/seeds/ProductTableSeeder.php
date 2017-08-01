<?php

use Illuminate\Database\Seeder;
use App\ZaraProduct;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://i1.adis.ws/i/jpl/jd_030664_a?qlt=80&w=600&h=425&v=1',
            'title' => 'Nike Air Force 1 Lo',
            'price' => 71.99
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://i1.adis.ws/i/jpl/jd_083278_a?qlt=80&w=600&h=425&v=1',
            'title' => 'Nike Air Max 90',
            'price' => 99
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://i1.adis.ws/i/jpl/jd_025919_spin_15?qlt=80&w=920&h=652&v=1',
            'title' => 'Nike Air Max 95',
            'price' => 104.99
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://i1.adis.ws/i/jpl/jd_047951_spin_05?qlt=80&w=920&h=652&v=1',
            'title' => 'Nike Air Force 1 Lo',
            'price' => 71.99
        ]);
        $product->save();
        //Zara
        $product = new \App\ZaraProduct([
            'imagePath' => 'https://static.zara.net/photos///2017/I/0/2/p/1887/300/250/2/w/400/1887300250_2_1_1.jpg?ts=1500533964789',
            'title' => 'Basic Relaxed fir T-shirt',
            'price' => 7.99
        ]);
        $product->save();
        $product = new \App\ZaraProduct([
            'imagePath' => 'https://static.zara.net/photos///2017/I/0/2/p/5575/423/407/2/w/400/5575423407_1_1_1.jpg?ts=1500548350864',
            'title' => 'Regular Basic Jeans',
            'price' => 29.99
        ]);
        $product->save();
        $product = new \App\ZaraProduct([
            'imagePath' => 'https://static.zara.net/photos///2017/I/0/2/p/5320/400/505/2/w/400/5320400505_1_1_1.jpg?ts=1500548099863',
            'title' => 'Basic Bomber Jacket',
            'price' => 49.99
        ]);
        $product->save();
        $product = new \App\ZaraProduct([
            'imagePath' => 'https://static.zara.net/photos///2017/I/0/2/p/1887/300/250/2/w/400/1887300250_2_1_1.jpg?ts=1500533964789',
            'title' => 'Basic Relaxed fir T-shirt',
            'price' => 7.99
        ]);
        $product->save();
    }
}
