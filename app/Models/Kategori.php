<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_kategori'];
    public $timestamp = true;

    //relasi ke tabel kategori
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
