<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonnhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Hoadonnhap', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nhacungcap_id')->unsigned();
            $table->integer('nhanvien_id')->unsigned();
            $table->datetime('ngaylap');
            $table->integer('tongtien');
            $table->string('ghichu');
            $table->integer('trangthai')->nullable()->default(1);     
            $table->timestamps();
            $table->softDeletes();
            
        });

        // Schema::table('Nhanvien', function($table) {
        //     $table->foreign('nhanvien_id')->references('id')->on('Nhanvien');
        // });

        // Schema::table('Nhacungcap', function($table) {
        //     $table->foreign('nhacungcap_id')->references('id')->on('Nhacungcap');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Hoadonnhap');
    }
}
