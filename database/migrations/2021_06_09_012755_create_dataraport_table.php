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
            $table->BigInteger('siswas_id')->nullable();
            $table->BigInteger('kelass_id')->nullable();
            $table->BigInteger('datamapel_id')->nullable();
            $table->BigInteger('datanilai_id')->nullable();
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
