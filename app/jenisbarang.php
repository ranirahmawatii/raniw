<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\jenisbarang;
// use App\kategori;
// use App\transaksi;
class jenisbarang extends Model
{
    // protected $fillable = [
    //     'nama_boneka','bahan','harga','gambar'];
    //     public $timestamps = true;
        protected $fillable = [
        'nama_boneka', 'id_kategori', 'bahan', 'harga', 'gambar'];
    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo('App\kategori', 'id_kategoris');
    }

    // public function stok()
    // {
    //     return $this->hasMany('App\stok', 'id_stok');
    // }

    public function transaksi()
    {
        return $this->hasMany('App\transaksi', 'id_transaksi');
    }

}
