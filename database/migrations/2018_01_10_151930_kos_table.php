<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kostan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kosan')->unique();
            $table->string('tipe_kamar');
            $table->string('address');
            $table->string('image');
            $table->string('phone');
            $table->integer('price');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
