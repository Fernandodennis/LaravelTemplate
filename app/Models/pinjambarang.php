<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pinjambarang extends Model
{
    protected $table = 'PinjamBarang';
    protected $fillable = ['id_pinjam', 'peminjam', 'tgl_pinjam', 'id_barang', 'nama_barang', 'jml_barang', 'tgl_kembali', 'kondisi'];
}
