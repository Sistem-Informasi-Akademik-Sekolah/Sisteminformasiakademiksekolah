<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatamapelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datamapel', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mapel');
            // $table->foreignId('siswas_id')->constrained()->onDelete('cascade')->OnUpdate('cascade');
            $table->string('nama_mapel');
            // $table->foreignId('kelass_id')->constrained()->onDelete('cascade')->OnUpdate('cascade');
            // $table->bigInteger('kelass_id');
            $table->foreignId('gurudankaryawans_id')->constrained()->onDelete('cascade')->OnUpdate('cascade');
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
        Schema::dropIfExists('datamapel');
    }
}
