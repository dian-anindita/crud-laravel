<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable=['nama_barang', 'deskripsi','user_id'];
    public $timestamps = false;
}
