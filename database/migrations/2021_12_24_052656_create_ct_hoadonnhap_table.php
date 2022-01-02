<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtHoadonnhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CTHoadonN', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hoadonnhap_id')->unsigned();
            $table->integer('sanpham_id')->unsigned();
            $table->integer('soluomg');
            $table->integer('dongia');
            $table->integer('thanhtien');
            $table->integer('trangthai')->nullable()->default(1);     
            $table->timestamps();     
            $table->softDeletes();     
        });

 

        // Schema::table('Hoadonnhap', function($table) {
        //     $table->foreign('hoadonnhap_id')->references('id')->on('Hoadonnhap');
        // });

        // Schema::table('Sanpham', function($table) {
        //     $table->foreign('sanpham_id')->references('id')->on('Sanpham');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CTHoadonN');
    }
}
