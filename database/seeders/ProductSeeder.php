<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'Dell Laptop',
            'price'=>'2000',
            'description'=>'A smartphone with 4gb ram and much more feature',
            'category'=>"laptop",
            'gallery'=>"https://i.dell.com/is/image/DellContent//content/dam/ss2/product-images/dell-client-products/notebooks/latitude-notebooks/14-3420/media-gallery/peripherals_laptop_latitude_3420nt_gallery_1.psd?fmt=png-alpha&pscan=auto&scl=1&hei=402&wid=555&qlt=100,0&resMode=sharp2&size=555,402"
            ] ,            
        
            [
                'name'=>'HP',
                'price'=>'2000',
                'description'=>'A smartphone with 4gb ram and much more feature',
                'category'=>"Laptop",
                'gallery'=>"https://www.hp.com/fr-fr/shop/Html/Merch/Images/c07961476_1750x1285.jpg?imwidth=869"
                ] ,

                [
                    'name'=>'Nokia',
                    'price'=>'2000',
                    'description'=>'A smartphone with 4gb ram and much more feature',
                    'category'=>"mobile",
                    'gallery'=>"https://images.ctfassets.net/wcfotm6rrl7u/1LCTkkKeIeQRFxUclhVy5s/0d9abe1e8a0711454034fffc6460d8e6/nokia-IFA_2022-DTC-Hero-desktop-RTL.png?w=1205&h=1205&fm=webp&q=88"
                    ] 


        ]);
    }
}
