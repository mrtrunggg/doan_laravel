<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sanpham;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class sanphamseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Sanpham')->insert([
            ['sanpham_name'=>'trung','loaisanpham_id'=>'1','thuonghieu'=>'QC trung tín','dongia'=>'2000','soluong'=>'6','mota'=>'123123sadjkasd','chatlieu'=> 'trung nè','kichthuoc'=>'xl','hinhanh'=>'1.png','nhacungcap_id'=>'1','trangthai'=>'0']

        ]);
    }
}



