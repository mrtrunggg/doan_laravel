<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Hoadonban', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('khachhang_id')->unsigned();
            $table->integer('nhanvien_id')->unsigned();
            $table->string('ngaylap');
            $table->integer('tongtien');
            $table->string('thongtinnguoinhan');
            $table->integer('trangthai')->nullable()->default(1);     
            $table->timestamps();
            $table->softDeletes();
            
        });

        // Schema::table('Nhanvien', function($table) {
        //     $table->foreign('nhanvien_id')->references('id')->on('Nhanvien');
        // });

        // Schema::table('Khachhang', function($table) {
        //     $table->foreign('khachhang_id')->references('id')->on('Khachhang');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Hoadonban');
    }
}
