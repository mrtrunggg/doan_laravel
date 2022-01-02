<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NhacungcapidInHoadonnhap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hoadonnhap', function (Blueprint $table) {
            $table->foreign('nhacungcap_id')
                  ->references('id')->on('Nhacungcap')
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
        Schema::table('hoadonnhap', function (Blueprint $table) {
            //
        });
    }
}
