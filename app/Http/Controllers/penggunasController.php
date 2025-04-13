<?php

namespace App\Http\Controllers;

use App\Models\penggunas;
use Illuminate\Http\Request;

class penggunasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = penggunas::all();
        return view('pengguna.index',compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengguna = new penggunas;
        $pengguna->nama    = $request->nama;
        $pengguna->save();

        return redirect()->route('pengguna.index')->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengguna = penggunas::findOrFail($id);
        return view('pengguna.show', compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengguna = penggunas::findOrFail($id);
        return view('pengguna.edit', compact('pengguna'));
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
        $pengguna = penggunas::findOrFail($id);
        $pengguna->nama    = $request->nama;
        $pengguna->save();

        return redirect()->route('pengguna.index')->with('success','Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengguna = penggunas::findOrFail($id);
        $pengguna->delete();
        return redirect()->route('pengguna.index')->with('success','Data Berhasil Dihapus');
    }
}
