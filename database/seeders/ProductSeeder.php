<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [                
                'name'=>"Lenovo",
                "price"=> "600",
                "category"=> "Laptop",
                "description"=> "Core i7 with 16GB RAM and 1TB harddisk",
                "gallery"=> "https://www.lg.com/eastafrica/images/monitors/md05857015/24MT48AF-PT_350_140717.jpg",      
            ],
            [                
                'name'=>"Dell Inspiration ",
                "price"=> "700",
                "category"=> "Desktop",
                "description"=> "Core i7 with 16GB RAM and 2TB harddisk",
                "gallery"=> "https://www.lg.com/eastafrica/images/monitors/md05857015/24MT48AF-PT_350_140717.jpg",      
            ],
            [                
                'name'=>"Samsung Galaxy ",
                "price"=> "550",
                "category"=> "Mobile",
                "description"=> "6GB RAM and 128GB internal memeory with 6000amph battery",
                "gallery"=> "https://www.lg.com/eastafrica/images/monitors/md05857015/24MT48AF-PT_350_140717.jpg",      
            ],
            [                
                'name'=>"Iphone",
                "price"=> "600",
                "category"=> "Mobile",
                "description"=> "You get your self a charger please!",
                "gallery"=> "https://www.lg.com/eastafrica/images/monitors/md05857015/24MT48AF-PT_350_140717.jpg",      
            ],
            [                
                'name'=>"Smart Watch",
                "price"=> "200",
                "category"=> "Smart Watch",
                "description"=> "I honestly dont know how to describe a smart watch",
                "gallery"=> "https://www.lg.com/eastafrica/images/monitors/md05857015/24MT48AF-PT_350_140717.jpg",      
            ],
        ]);
    }
}
