<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UasdanUts extends Model
{
    // protected $table = 'uasdanuts';
    protected $fillable = [""];
    public function siswas(){
        return $this->belongsTo('App\Siswa');
    }
    public function datamapel(){
        return $this->belongsTo('App\DataMapel');
    }
}
