<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaikhoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Taikhoans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
            $table->string('loaitk')->nullable()->default(1);
            $table->integer('trangthai')->nullable()->default(1);     
            $table->timestamps();
            $table->softDeletes();          
        });


        // Schema::table('Khachhang', function($table) {
        //     $table->foreign('khachhang_id')->references('id')->on('Khachhang');
        // });

        // Schema::table('Nhanvien', function($table) {
        //     $table->foreign('nhanvien_id')->references('id')->on('Nhanvien');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Taikhoans');
    }
}

