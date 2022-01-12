<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PKkhachhangInKhachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Khachhang', function (Blueprint $table) {
            $table->foreign('id_taikhoan')
            ->references('id')->on('Taikhoan')
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
        Schema::table('Khachhang', function (Blueprint $table) {
            //
        });
    }
}
