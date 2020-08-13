<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';

    //field yang disis
    protected $fillable = ['nim','nama_lengkap','fakultas','alamat'];

    //field diabaikan
    protected $guarded = [];

    public function mfakultas()
    {
        return $this->has0ne('App\fakultas','Kode_Fakultas','fakultas');
    }
}
