<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Alert;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return 'Halo saya Create dari Controller Mahasiswa';
    }

    public function tambah()
    {
        return view('mahasiswa.tambah');    
    }

    public function store(Request $request)
    {
        Mahasiswa::create($request->all()); 
        Alert::alert()->success('Sukses!','Data Berhasil Diubah');       
        return redirect()->route('mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        Alert::toast('Selamat, Data Berhasil Diubah','success');
        return redirect()->route('mahasiswa');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        Alert::toast('Sukses! Data Berhasil Dihapus','success');
        return redirect()->route('mahasiswa');
    }
}
