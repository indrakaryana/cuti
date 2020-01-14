<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanCutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_cutis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('jenis_cuti');
            $table->string('alasan_cuti');
            $table->string('awal_cuti');
            $table->string('akhir_cuti');
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
        Schema::dropIfExists('permohonan__cutis');
    }
}
