<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Khachhang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('khachhang_name');
            $table->string('email');
            $table->string('atm');
            $table->string('sdt');
            $table->string('diachi');
            $table->string('hinhdaidien');
            $table->integer('id_taikhoan')->unsigned();
            $table->integer('trangthai')->nullable()->default(1);     
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Khachhang');
    }
}
