<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keterampilan extends Model
{
    protected $guarded = ["id"];
    public function siswas(){
        return $this->belongsTo('App\Siswa');
    }
    public function kelass(){
        return $this->belongsTo('App\Kelas');
    }
    public function dataraport(){
        return $this->hashMany('App\DataRaport');
    }
}
