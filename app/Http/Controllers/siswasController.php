<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class siswasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //Untuk Memindahkan ke halaman login dulu 
     public function __construct()
     {
        $this->middleware('auth');
     }


     // 
    public function index()
    {
        $siswa = siswa::all();
        return view('siswa.index',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new siswa;
        $siswa->nis     = $request->nis;
        $siswa->nama    = $request->nama;
        $siswa->jk      = $request->jk;
        $siswa->kelas   = $request->kelas;
        $siswa->save();

        return redirect()->route('siswa.index')->with('success','Data Berhasil Ditambahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
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
        //Mode Pa mulki
        $siswa = siswa::findOrFail($id);
        $siswa->nis     = $request->nis;
        $siswa->nama    = $request->nama;
        $siswa->jk      = $request->jk;
        $siswa->kelas   = $request->kelas;
        $siswa->save();

        return redirect()->route('siswa.index')->with('success','Data Berhasil Diperbarui');


        //MODE CHAT GPT CEPAT.
        // $siswa = siswa::findOrFail($id);
        // $siswa->update($request->all());
        // return redirect()->route('siswa.index')->with('success','Data Siswa Dapat Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success','Data Berhasil Dihapus');
    }
}
