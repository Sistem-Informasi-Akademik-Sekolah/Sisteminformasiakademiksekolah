<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['namalengkap','gambar','nipd','jeniskelamin','kelas','nisn','ttl','nik','agama','alamat','jenistinggal','transportasi','nohp','email','beratbadan','tinggibadan','jarakrumah','anak_ke','jumlah_sudara','kebutuhankhusus','noakte'
];
public function kelases()
{
    return $this->hasMany('App\Kelas');
}
public function dataraport()
{
    return $this->hashOne('App\DataRaport');
}
// public function datamapel(){
//     return $this->hashMany('App\DataMapel');
// }
public function datanilai(){
    return $this->hashOne('App\DataNilai');
    }
    public function uasdanuts(){
        return $this->hashOne('App\UasdanUts');
    }
    public function keterampilans(){
        return $this->hashMany('App\Keterampilan');
    }
    public function pengetahuans(){
        return $this->hashOne('App\Pengetahuan');
    }
}
