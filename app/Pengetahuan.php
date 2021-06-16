<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengetahuan extends Model
{
    protected $guarded = ["id"];    
    public function kelass(){
        return $this->belongsTo('App\Kelas');
    }
    public function siswas(){
        return $this->belongsTo('App\Siswa');
    }
    public function dataraport(){
        return $this->hashMany('App\DataRaport');
    }
}
