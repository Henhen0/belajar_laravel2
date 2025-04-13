<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $fillable = ['id','nis','nama','jk','kelas'];
    public $timestamp = true;

    //Mengahapus Image
    public function deleteImage(){
        if($this->cover && file_exists(public_path('image/siswa' .$this->cover))){
            return unlink(public_path('image/siswa' .$this->cover));
        }
    }
}

