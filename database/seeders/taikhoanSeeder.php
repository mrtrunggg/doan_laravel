<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class taikhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('taikhoan')->insert([
'tentaikhoan' => 'user1',
'matkhau' => '123456',
'loaitk' => 'user',
'trangthai' => '1',
]);
    }
}
