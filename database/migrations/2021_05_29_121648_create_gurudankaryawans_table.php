<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurudankaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurudankaryawans', function (Blueprint $table) {
            $table->id();
            $table->integer('nutpk');
            $table->integer('nik');
            $table->string('namalengkap');
            $table->enum('jeniskelamin', ['laki-laki', 'perempuan']);
            $table->longtext('ttl');
            $table->string('statuspegawai');
            $table->date('tmt');
            $table->integer('nohp');
            $table->text('usernametelegram');
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
        Schema::dropIfExists('gurudankaryawans');
    }
}
