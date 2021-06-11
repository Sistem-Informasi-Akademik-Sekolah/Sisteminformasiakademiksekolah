<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GurudanKaryawan extends Model
{
    protected $table = 'gurudankaryawans';

    protected $fillable = ["nutpk","nik","namalengkap","jeniskelamin","ttl","statuspegawai","tmt","nohp","usernametelegram"];

    public function datamapel(){
        return $this->hashOne('App\DataMapel');
    }
}
