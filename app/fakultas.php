<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{
    protected $table = 'Fakultas';
    protected $primaryKey = 'Kode_Fakultas';

    public function mahasiswa()
    {
        return $this->belongTo('App\mahasiswa','Fakultas','Kode_Fakultas');
    }
}
