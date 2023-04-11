<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class ProductController extends Controller
{
    //
    public function ListProduct(){
        $product = [
            ['idproduct' => '1',
            'nameproduct' =>'Jeep Wrangler Rubicon Hard Rock (2015-2017)',
            'description-singkat-produk' =>'The Jeep Rubicon is a variant of a Jeep car that is famous for its reliable off-road capabilities.',
            'rarityproduk' => 'Rare',
            'priceproduk' => '10.000.000.000',
            'description-panjang-produk' => 'The Hard Rock Edition is a special trim package featuring a number of special features and accessories that make it even more versatile and capable of handling rough terrain. This package includes specially designed 17-inch aluminum wheels, black-coated hood, Hard Rock logo on the vehicle body, and the stronger and more powerful Rubicon suspension system. In addition, the Hard Rocks interior is equipped with specially designed leather seats, a high-advantage infotainment system, and many other luxury features that make it a highly sought-after special edition for Jeep Wrangler Rubicon fans',
            'image-produk'=>'rubicon.jpg'],

            ['idproduct' => '2',
            'nameproduct' =>'Mini Cooper S John Cooper Works GP (2013)',
            'description-singkat-produk' => 'The Mini Cooper is a small car designed by the British car company Mini.',
            'rarityproduk' => 'S-Rare',
            'priceproduk' => '15.575.000.000',
            'description-panjang-produk' => 'The Mini Cooper S John Cooper Works GP (2013) is equipped with a 1.6-liter turbocharged engine that produces 218 horsepower, a more powerful suspension, bigger brakes, a specially designed aero kit, and many other high-performance features only available on the 2013 edition. this particular. In addition, this car also has a distinctive appearance with a metallic gray color, red stripe on the body, and specially designed 17-inch wheels.',
            'image-produk'=>'cooper.jpg'],

            ['idproduct' => '3',
            'nameproduct' =>'Ferrari F50 GT1',
            'description-singkat-produk' => 'Ferrari is an exclusive sports car brand originating from Italy. Ferrari cars are known for their stunning and innovative performance and designs.',
            'rarityproduk' => 'SS-Rare',
            'priceproduk' => '25.350.000.000',
            'description-panjang-produk' => 'The Ferrari F50 GT1 is a racing variant of the Ferrari F50 designed to participate in GT1 racing. This car is equipped with a 4.7-liter V12 engine that produces power up to 740 horsepower, making it capable of reaching speeds of more than 370 km/hour.',
            'image-produk'=>'ferrari.jpg'],

            ['idproduct' => '4',
            'nameproduct' =>'Lamborghini Veneno',
            'description-singkat-produk' => 'Lamborghini is a luxury sports car brand originating from Italy.',
            'rarityproduk' => 'SS-Rare',
            'priceproduk' => '40.120.000.000',
            'description-panjang-produk' => 'Lamborghini Veneno is one type of Lamborghini car that is very rare because the number of production is very limited. Only 4 units produced in 2013, this car was released to commemorate Lamborghinis 50th anniversary. In addition, these cars cost a lot and were only accessible to people with enormous wealth. This makes the Lamborghini Veneno a car that is very exclusive and difficult to obtain. Apart from that, the design and performance of the Lamborghini Veneno are also very unique and impressive, making it one of the most sought-after cars by collectors and luxury sports car enthusiasts.',
            'image-produk'=>'lambo.jpeg'],

        ];
        return view ('product', compact('product'));
    }

    public function ShowProduct(String $id){
        $product = [
            ['idproduct' => '1',
            'nameproduct' =>'Jeep Wrangler Rubicon Hard Rock (2015-2017)',
            'description-singkat-produk' =>'The Jeep Rubicon is a variant of a Jeep car that is famous for its reliable off-road capabilities.',
            'rarityproduk' => 'Rare',
            'priceproduk' => '10.000.000.000',
            'description-panjang-produk' => 'The Hard Rock Edition is a special trim package featuring a number of special features and accessories that make it even more versatile and capable of handling rough terrain. This package includes specially designed 17-inch aluminum wheels, black-coated hood, Hard Rock logo on the vehicle body, and the stronger and more powerful Rubicon suspension system. In addition, the Hard Rocks interior is equipped with specially designed leather seats, a high-advantage infotainment system, and many other luxury features that make it a highly sought-after special edition for Jeep Wrangler Rubicon fans',
            'image-produk'=>'rubicon.jpg'],

            ['idproduct' => '2',
            'nameproduct' =>'Mini Cooper S John Cooper Works GP (2013)',
            'description-singkat-produk' => 'The Mini Cooper is a small car designed by the British car company Mini.',
            'rarityproduk' => 'S-Rare',
            'priceproduk' => '15.575.000.000',
            'description-panjang-produk' => 'The Mini Cooper S John Cooper Works GP (2013) is equipped with a 1.6-liter turbocharged engine that produces 218 horsepower, a more powerful suspension, bigger brakes, a specially designed aero kit, and many other high-performance features only available on the 2013 edition. this particular. In addition, this car also has a distinctive appearance with a metallic gray color, red stripe on the body, and specially designed 17-inch wheels.',
            'image-produk'=>'cooper.jpg'],

            ['idproduct' => '3',
            'nameproduct' =>'Ferrari F50 GT1',
            'description-singkat-produk' => 'Ferrari is an exclusive sports car brand originating from Italy. Ferrari cars are known for their stunning and innovative performance and designs.',
            'rarityproduk' => 'SS-Rare',
            'priceproduk' => '25.350.000.000',
            'description-panjang-produk' => 'The Ferrari F50 GT1 is a racing variant of the Ferrari F50 designed to participate in GT1 racing. This car is equipped with a 4.7-liter V12 engine that produces power up to 740 horsepower, making it capable of reaching speeds of more than 370 km/hour.',
            'image-produk'=>'ferrari.jpg'],

            ['idproduct' => '4',
            'nameproduct' =>'Lamborghini Veneno',
            'description-singkat-produk' => 'Lamborghini is a luxury sports car brand originating from Italy.',
            'rarityproduk' => 'SS-Rare',
            'priceproduk' => '40.120.000.000',
            'description-panjang-produk' => 'Lamborghini Veneno is one type of Lamborghini car that is very rare because the number of production is very limited. Only 4 units produced in 2013, this car was released to commemorate Lamborghinis 50th anniversary. In addition, these cars cost a lot and were only accessible to people with enormous wealth. This makes the Lamborghini Veneno a car that is very exclusive and difficult to obtain. Apart from that, the design and performance of the Lamborghini Veneno are also very unique and impressive, making it one of the most sought-after cars by collectors and luxury sports car enthusiasts.',
            'image-produk'=>'lambo.jpeg'],

        ];
        return view ('penjelasan', compact('product','id'));
    }
}
