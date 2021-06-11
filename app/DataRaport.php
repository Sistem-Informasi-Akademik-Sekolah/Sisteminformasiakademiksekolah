<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataRaport extends Model
{
    protected $table = 'dataraport';
    protected $fillable = ["siswas_id","kelass_id","datamapel_id","datanilai_id"];
    public function siswas(){
        return $this->belongsTo('App\Siswa');
    }
    public function kelass(){
        return $this->belongsTo('App\Kelas');
    }
    public function datamapel(){
    return $this->belongsTo('App\DataMapel');
    }
    public function datanilai(){
        return $this->belongsTo('App\DataNilai');
    }
}
