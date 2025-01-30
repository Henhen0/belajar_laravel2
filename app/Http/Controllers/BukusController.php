<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Genre;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index',compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penerbit = Penerbit::all();
        $genre = Genre::all();
        return view('buku.create',compact('penerbit','genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku = new Buku();
        $buku->nama_buku             = $request->nama_buku;
        $buku->harga                 = $request->harga;
        $buku->stok                  = $request->stok;
        $buku->image                 = $request->image;
        $buku->id_penerbit           = $request->id_penerbit;
        $buku->tanggal_terbit        = $request->tanggal_terbit;
        $buku->id_genre              = $request->id_genre;

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/buku', $name);
            $buku->image = $name;
        }

        $buku->save();

        return redirect()->route('buku.index')->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        $id_penerbit = $buku->id_penerbit;
        $id_genre = $buku->id_genre;
        $penerbit = Penerbit::findOrFail($id_penerbit);
        $genre = Genre::findOrFail($id_genre);
        return view('buku.show', compact('buku','penerbit','genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $id_penerbit = $buku->id_penerbit;
        $id_genre = $buku->id_genre;
        $penerbit = Penerbit::findOrFail($id_penerbit);
        $genre = Genre::findOrFail($id_genre);
        $allpenerbit = Penerbit::all();
        $allgenre = Genre::all();
        return view('buku.edit', compact('buku','penerbit','genre','allpenerbit','allgenre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->nama_buku             = $request->nama_buku;
        $buku->harga                 = $request->harga;
        $buku->stok                  = $request->stok;
        $buku->image                 = $request->image;
        if ($request->hasFile('image')) {
            $buku->deleteImage();
            $img = $request->file('image');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/buku', $name);
            $buku->image = $name;
        }

        $buku->id_penerbit           = $request->id_penerbit;
        $buku->tanggal_terbit        = $request->tanggal_terbit;
        $buku->id_genre              = $request->id_genre;
        $buku->save();

        return redirect()->route('buku.index')->with('success','Data Berhasil Di Ganti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect()->route('buku.index')->with('success','Data Berhasil Di Hapus');
    }
}
