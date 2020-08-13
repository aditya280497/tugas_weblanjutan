<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use app\Fakultas;
use DataTables;
use Illuminate\Http\Request;


class Mahasiswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("mahasiswa.index");
  
    }

    public function mhs_daftar()
    {
        $mhs = mahasiswa::with('mfakultas')->get();
        return DataTables::of($mhs)
        ->addIndexColumn()
        ->addcolumn('action', function ($mhs){
            $action = '<a class="text-primary"
    href="/mhs/edit/'.$mhs->nim.'">Edit</a>';
            $action .= ' | <a class="text-danger"
    href="/mhs/delete/'.$mhs->nim.'">Hapust</a>';
            return $action;
        })
        ->make();
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fakultas = fakultas::all();
        return view('mahasiswa.create', compact('fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|digits:10',
            'nama_lengkap' => 'required',
        ]);

        mahasiswa::create($request->all());
        return redirect()->route('mhs.index')
                        ->with('succes','Data Berhasi Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa, $id)
    {
        $fakultas = fakultas::all();
        #mhs = mahasiswa::find($id);
        return view ('mahasiswa.edit', compact('fakultas', 'mhs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->valdate ([
            'nama_lengkap' => 'required',
        ]);
        $mahasiswa->update($request->all());
        return redirect()->route ('mhs.index')
                        -> with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $Mahasiswa->delete();
        return redirect()->route('mhs.index')
                        -> with('success', 'Data Berhasil Dihapus');
    }
}
