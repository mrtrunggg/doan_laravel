<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        Admin::create([
        'name' => 'Trung',
        'email' => 'trung@gmail.com',
        'password' => bcrypt('123456'),
        ]);
    }
}
