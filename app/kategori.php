<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\kategori;
class kategori extends Model
{
    protected $fillabe = [
        'nama','slug'];
        public $timestamps = true;
}
