<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppdb extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_lengkap','jk','agama','alamat','telepon','asal_sekolah'];
    public $timestamp = true;
}
