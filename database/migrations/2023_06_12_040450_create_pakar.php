<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakar', function (Blueprint $table) {
            $table->id();
            $table->text("id_pakar");
            $table->string('first_name_pakar');
            $table->string('last_name_pakar');
            $table->string('role');
            $table->string('email')->unique();
            $table->string('password')->hash();
            $table->string('pend_terakhir');
            $table->string('nama_instansi');
            // $table->string('file');
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
        Schema::dropIfExists('pakar');
    }
};
