<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap');
            $table->string('gambar');
            $table->integer('nipd');
            $table->enum('jeniskelamin', ['laki-laki', 'perempuan']);
            $table->text('kelas');
            $table->string('nisn',200);
            $table->text('ttl');
            $table->integer('nik');
            $table->string('agama');
            $table->string('alamat');
            $table->text('jenistinggal');
            $table->string('transportasi');
            $table->integer('nohp');
            $table->string('email');
            $table->integer('beratbadan');
            $table->integer('tinggibadan');
            $table->integer('jarakrumah');
            $table->integer('anak_ke');
            $table->integer('jumlah_sudara');
            $table->string('kebutuhankhusus');
            $table->string('noakte');
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
        Schema::dropIfExists('siswas');
    }
}
