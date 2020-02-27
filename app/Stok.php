<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\stok;
class Stok extends Model
{
    //  protected $fillable = [
    //     'nama_barang','jumlah_barang','barang_masuk','barang_keluar','sisa_barang'];
    //     public $timestamps = true;
    protected $fillable = [
        'id_jenisbarangs', 'nama_barang','jumlah_barang', 'barang_masuk', 'barang keluar', 'sisa barang'];
    public $timestamps = true;

    public function jenisbarang()
    {
        return $this->belongsTo('App\jenisbarang', 'id_jenisbarang');
    }
}
