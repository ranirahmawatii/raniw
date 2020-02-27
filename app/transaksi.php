<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\transaksi;
class transaksi extends Model
{
    // protected $fillable = [
    //     'nama','nama_boneka','jumlah_boneka'];
    //     public $timestamps = true;
          protected $fillable = [
            'nama','id_jenisbarangs', 'jumlah_boneka',];
    public $timestamps = true;

    public function jenisbarang()
    {
        return $this->belongsTo('App\jenisbarang', 'id_jenisbarang');
    }

}
