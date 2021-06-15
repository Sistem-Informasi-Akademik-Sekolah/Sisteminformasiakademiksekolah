<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelass';
    protected $fillable = ['siswas_id','kelas','walas','tahunajaran','keterangan'];

    public function siswas()
    {
        return $this->belongsTo('App\Siswa');
    }
    public function dataraport(){
        return $this->hashOne('App\DataRaport');
    }
    // public function datamapel(){
    //     return $this->hashMany('App\DataMapel');
    //     }
    public function keterampilans(){
        return $this->hashOne('App\Keterampilan');
    }
    public function pengetahuans(){
        return $this->hashOne('App\Pengetahuan');
    }
}

