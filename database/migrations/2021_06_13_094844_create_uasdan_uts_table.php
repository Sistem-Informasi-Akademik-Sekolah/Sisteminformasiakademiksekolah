<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUasdanUtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uasdan_uts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswas_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('mapel_id');
            $table->integer('nilai_utsatu');
            $table->integer('nilai_utsdua');
            $table->string('jumlah_uts');
            $table->integer('nilai_uasatu');
            $table->integer('nilai_uasdua');
            $table->string('jumlah_uas');
            $table->string('jumlahsemua');
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
        Schema::dropIfExists('uasdan_uts');
    }
}
