<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhacungcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Nhacungcap', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nhacungcap_name');
            $table->string('thongtinlienlac');
            $table->string('diachi');
            $table->string('sdt');
            $table->string('sofax');
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
        Schema::dropIfExists('Nhacungcap');
    }
}
