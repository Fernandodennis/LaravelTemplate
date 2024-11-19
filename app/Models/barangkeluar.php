<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barangkeluar extends Model
{
    protected $table = 'BarangKeluar';
    protected $fillable = ['id_barang', 'nama_barang', 'tgl_keluar', 'jml_keluar', 'lokasi', 'penerima'];
}
