<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshopSeeder extends Seeder
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
                'name' => 'Librería Don Quijote',
                'city' => 'Bahía Blanca',
                'street' => 'Fitz Roy',
                'number' => '92',
                'user_email' => 'donquijote@donquijote.com'
            ],
            [
                'name' => 'Cúspide',
                'city' => 'CABA',
                'street' => 'Avenida Santa Fe',
                'number' => '3492',
                'user_email' => 'cuspide@cuspide.com'
            ],
            [
                'name' => 'Cúspide',
                'city' => 'CABA',
                'street' => 'Avenida Rivadavia',
                'number' => '5045',
                'user_email' => 'cuspide@cuspide.com'
            ]
        ];
        DB::table('bookshops')->insert($data);
        DB::table('bookshops')->insert([
            'name' => "BuscaLibre",
            'user_email' => 'buscalibre@buscalibre.com'
        ]);
    }
}
