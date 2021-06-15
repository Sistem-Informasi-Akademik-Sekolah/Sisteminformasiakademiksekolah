<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataraportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataraport', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswas_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->bigInteger('datamapel_id');
            $table->bigInteger('kelass_id');
            $table->foreignId('pengetahuans_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->bigInteger('datanilai_id')->nullable();
            $table->foreignId('keterampilans_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->string('deskripsi');
            $table->string('predikat');
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
        Schema::dropIfExists('dataraport');
    }
}
