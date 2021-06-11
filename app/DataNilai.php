<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataNilai extends Model
{
    protected $table = 'datanilai';

    protected $fillable = ['nama_siswa','kelas','nama_mapel','nilai_pengetahuan','nilai_keterampilan','nilai_KKM','deskripsi','predikat'];
    
    public function dataraport(){
    return $this->hashMany('App\DataRaport');
    }
}
