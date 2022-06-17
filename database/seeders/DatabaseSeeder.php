<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BookSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(WrittenBySeeder::class);
        $this->call(BookshopSeeder::class);
        //$this->call(HasSeeder::class);
        //$this->call(SubscribedSeeder::class);
    }
}
