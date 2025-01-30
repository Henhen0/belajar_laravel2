<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    use HasFactory;

    protected $fillable = ['id','nomor','id_pengguna'];
    public $timestamp = true;

    public function penggunas()
    {
        return $this->belongsTo(penggunas::class, 'id_pengguna');
    }
}
