<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscribedSeeder extends Seeder
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
                'email' => '1',
                'ISBN' => '9786073132411',
            ],
            [
                'id_user' => '1',
                'ISBN' => '9788466662321',
            ],
            [
                'id_user' => '2',
                'ISBN' => '9786073132411',
            ],
            [
                'id_user' => '3',
                'ISBN' => '9786073132411',
            ]
        ];
        DB::table('subscribed')->insert($data);
    }
}
