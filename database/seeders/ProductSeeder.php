<?php

namespace Database\Seeders;
use Illuminate\support\facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                "name"=>'Iphone 15 pro max',
                "price"=>"5,69,00 Rs.",
                "description"=>"6.78 inch screen, 256 gb storage, 6 gb ram, platinum color",
                "category"=>"mobile",
                "gallery"=>"https://appleman.pk/cdn/shop/files/7_2bb62f25-5336-4668-a20a-f7abc5eaa585_800x.png?v=1697624202"
            ],
            [
                "name"=>'Corsair keyboard',
                "price"=>"12,000 Rs.",
                "description"=>"Black Color",
                "category"=>"Computer Accessories",
                "gallery"=>"https://duet-cdn.vox-cdn.com/thumbor/0x0:2048x1365/2400x1600/filters:focal(546x1080:547x1081):format(webp)/cdn.vox-cdn.com/uploads/chorus_asset/file/24840316/236738_Corsair_K70_Max_hands_on_JPorter_008.jpg"
            ],
            [
                "name"=>'Samsung Ultra HD TV',
                "price"=>"1,87,00 Rs.",
                "description"=>"Bazelless, 70 inch, black backcover",
                "category"=>"TV",
                "gallery"=>"https://m.media-amazon.com/images/I/51I7hdconEL._SL500_.jpg"
            ],
            [
                "name"=>'Corsair Dark Mouse',
                "price"=>"7,900 Rs.",
                "description"=>"Wireless, dark color",
                "category"=>"Computer Accessories",
                "gallery"=>"https://www.tejar.pk/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/c/o/corsair_m65_rgb_ultra_wireless_tunable_fps_gaming_mouse2_-_tejar.jpg"
            ],
            [
                "name"=>'Macbook Pro',
                "price"=>"6,50,000 Rs.",
                "description"=>"16 inch screen, 1TB storage, 6 gb ram, platinum color",
                "category"=>"Laptop",
                "gallery"=>"https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP809/sp809-mbp16touch-silver-2019.jpeg"
            ]
        ]);
    }
}
