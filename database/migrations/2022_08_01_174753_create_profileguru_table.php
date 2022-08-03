<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileguruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profileguru', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto_diri');
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->string('nip');
            $table->string('status');
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
        Schema::dropIfExists('profileguru');
    }
}
