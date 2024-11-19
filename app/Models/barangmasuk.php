<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barangmasuk extends Model
{
    protected $table = 'BarangMasuk';
    protected $fillable = ['id_barang', 'nama_barang', 'tgl_masuk', 'jml_masuk', 'id_suplier'];
}
