<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = ['id','name_product','merk','price','stock'];
    public $timestamp = true;

    public function orders()
    {
        return $this->belongsTo(orders::class, 'id_product');
    }
}
