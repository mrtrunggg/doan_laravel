<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PKtaikhoanInTaikhoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Taikhoan', function (Blueprint $table) {
            $table->foreign('khachhang_id')
            ->references('id')->on('Khachhang')
            ->onDelete('cascade'); 
            $table->foreign('nhanvien_id')
          ->references('id')->on('Nhanvien')
          ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_taikhoan', function (Blueprint $table) {
            //
        });
    }
}
