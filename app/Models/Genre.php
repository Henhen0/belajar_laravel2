<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_genre'];
    public $timestamp = true;

    public function buku()
    {
        return $this->hasMany(Buku::class, 'id_genre');
    }
}
