<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PKcthoadonnhapInCTHoadonN extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('CTHoadonN', function (Blueprint $table) {
            $table->foreign('hoadonnhap_id')
            ->references('id')->on('Hoadonnhap')
            ->onDelete('cascade'); 
            $table->foreign('sanpham_id')
          ->references('id')->on('Sanpham')
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
        Schema::table('CTHoadonN', function (Blueprint $table) {
            
        });
    }
}
