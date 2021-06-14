<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataMapel extends Model
{
    protected $table = 'datamapel';

    // protected $fillable = ['kode_mapel','siswas_id','nama_mapel','kelass_id','gurudankaryawans_id'];
    protected $fillable = ['kode_mapel','nama_mapel','gurudankaryawans_id'];

    public function dataraport(){
    return $this->hashMany('App\DataRaport');
    }

    // public function siswas(){
    //     return $this->belongsTo('App\Siswa');
    // }

    // public function kelass(){
    //     return $this->belongsTo('App\Kelas');
    // }
    public function gurudankaryawans(){
    return $this->belongsTo('App\GurudanKaryawan');
    }
    public function uasdanuts(){
        return $this->hashOne('App\UasdanUts');
    }
}
