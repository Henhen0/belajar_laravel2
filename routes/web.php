<?php

use App\Http\Controllers\BukusController;
use App\Http\Controllers\penggunasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ppdbsController;
use App\Http\Controllers\siswasController;
use App\Http\Controllers\TeleponsController;
use App\Http\Controllers\KategorisController;
use App\Http\Controllers\ProduksController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PembelisController;
use App\Http\Controllers\PenerbitsController;
use App\Http\Controllers\TransaksisController;
use App\Models\barang;
use App\Models\Telepon;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home' ,function(){
    return '<h2>Selamat Datang Di Home</h2>';
});

Route::get('/about' ,function(){
    return '<h2>Selamat Datang Di about</h2>';
});

Route::get('/contact' ,function(){
    return '<h2>Selamat Datang Di contact</h2>';
});


Route::get('/siswa' ,function(){

    $data_siswa = ['hendri','nafis','dudi','sandi','andrian'];

    return view('tampil',compact('data_siswa'));
});

//route parameter
route::get('/tes/{nama2}/{tmptlahir2}/{jk2}/{agama2}/{alamat2}', function($nama,$tmpatlahir,$jk,$agama,$alamat){
    return "Nama :".$nama."<br>" .
           "Tempat Lahir :". $tmpatlahir ."<br>".
           "Jenis Kelamin :". $jk ."<br>".
           "Agama :". $agama ."<br>".
           "Alamat :". $alamat;

});



//route hitung
route::get('hitung/{bilangan1}/{bilangan2}', function ($a,$b){
    return "Bilangan 1 :". $a . "<br>".
           "Bilangan 2 :". $b ."<br>".
           "Hasil :". $a+$b;
});


//route latihan
route::get('/latihan/{nama}/{tel}/{jb}/{nb}/{jumlah}/{pembayaran}', function($nmpembeli,$tel,$jb,$nb,$jumlah,$pembayaran){
   
    if ($jb == "handphone") {
        if ($nb == "poco") {
            $harga = 3000000;
        }elseif ($nb == "samsung") {
            $harga = 5000000;
        }elseif ($nb == "iphone") {
            $harga = 15000000;
        }

    } elseif ($jb == "laptop"){
        if ($nb == "lenovo") {
            $harga = 4000000;
        }elseif ($nb == "acer") {
            $harga = 8000000;
        }elseif ($nb == "mackbook") {
            $harga = 20000000;
        }       

    } elseif ($jb == "tv") {
        if ($nb == "toshiba") {
            $harga = 5000000;
        }elseif ($nb == "samsung") {
            $harga = 8000000;
        }elseif ($nb == "lg") {
            $harga = 10000000;
        }  
    }

     $total = $harga * $jumlah;

    if ($total > 10000000 ) {
        $cashback = 500000;
    } else {
        $cashback = 0;
    }

    if ($pembayaran == "transfer") {
        $potongan = 50000;
    } elseif ($pembayaran == "cash") {
        $potongan = 0;
    }
    






    return "Nama Pembeli :". $nmpembeli ."<br>".
           "Telepon :". $tel ."<br><br>".
           "Jenis Barang :". $jb ."<br>".
           "Nama Barang :". $nb ."<br>".
           "Harga : Rp.". number_format($harga) ."<br>".
           "Jumlah :". $jumlah ."<br>".
           "Total : Rp.". number_format($total) . "<br><br>".
           "Cashback : Rp.". number_format($cashback) . "<br>".
           "Pembayaran :". $pembayaran . "<br>".
           "Potongan : Rp.". number_format($potongan) . "<br><br>".
           "Total Pembayaran : Rp.". number_format($total-$cashback-$potongan) . "<br>".
           "========================";

});


//routing menggunakan model
Route::get('/post', [PostsController::class,'menampilkan']);
Route::get('/barang', [PostsController::class,'menampilkan2']);



// //routing barang
// route::get('/barang',function(){

//     // $barangs = barang::where('title','like','%Tips%')->get();
//     $barangs = barang::where('id',2)->get();
//     return view('tampil_barang',compact('barangs'));
// });




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//CRUD
Route::resource('siswa',siswasController::class);

//CRUD PPDB
Route::resource('ppdb',ppdbsController::class);

//CRUD PENGGUNA
Route::resource('pengguna',penggunasController::class);

//CRUD TELEPON
Route::resource('telepon',TeleponsController::class);

//CRUD KATEGORI
Route::resource('kategori',KategorisController::class);

//CRUD PRODUK
Route::resource('produk',ProduksController::class);

//CRUD PRODUCT
Route::resource('product',ProductsController::class);

//CRUD PRODUCT
Route::resource('customer',CustomersController::class);

//CRUD ORDER
Route::resource('order',OrdersController::class);

//CRUD PENERBIT
Route::resource('penerbit',PenerbitsController::class);

//CRUD GENRE
Route::resource('genre',GenresController::class);

//CRUD BUKU
Route::resource('buku',BukusController::class);

//CRUD PEMBELI
Route::resource('pembeli',PembelisController::class);

//CRUD TRANSAKSI
Route::resource('transaksi',TransaksisController::class);