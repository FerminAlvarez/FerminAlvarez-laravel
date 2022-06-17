<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'ISBN' => '9788466662321',
                'name' => 'ARCANUM ILIMITADO',
                'publisher' => 'Nova',
                'total_pages' => '650',
                'published_at' => '2018-02-27',
                'category' => '2',
                'image_link' => 'https://images.cdn3.buscalibre.com/fit-in/360x360/14/03/1403a39bad3856ad95b820ea74194345.jpg',
                'image_path' => ''
            ],
        ];
        DB::table('books')->insert($data);
    }
}
