<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengetahuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengetahuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswas_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('kelass_id');
            $table->integer('nilaikd1');
            $table->integer('nilaikd2');
            $table->integer('nilaikd3');    
            $table->integer('nilaikd4');
            $table->integer('nilaikd5');
            $table->integer('nilaikd6');
            $table->integer('nilaikd7');
            $table->integer('nilaikd8');
            $table->integer('nilaikd9');
            $table->integer('nilaikd10');
            $table->string('totalsemua');
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
        Schema::dropIfExists('pengetahuans');
    }
}
