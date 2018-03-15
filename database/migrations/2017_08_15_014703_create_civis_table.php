<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCivisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('civis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('cover')->nullable();
            $table->string('ttl');
            $table->text('alamat');
            $table->string('notlp');
            $table->string('jk');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('status');
            $table->string('email');
            $table->string('hoby');
            $table->string('sd');
            $table->string('smp');
            $table->string('sma');
            $table->string('pt');
            $table->text('pk');
            $table->integer('lowongan_id');
            $table->integer('akun_id');
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
        Schema::dropIfExists('civis');
    }
}
