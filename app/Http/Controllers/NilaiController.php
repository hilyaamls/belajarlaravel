<?php

namespace App\Http\Controllers;

use App\Nilai;
use Illuminate\Http\Request;
use Alert;
use App\Mahasiswa;
use App\Makul;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['mahasiswa'])->get();
        return view('nilai.index', compact('nilai'));
    } 

    public function tambah()
    {
        $makul = Makul::all();
        $mahasiswa = Mahasiswa::all();
        return view('nilai.tambah', compact('makul', 'mahasiswa'));
    }

    public function store(Request $request)
    {
        Nilai::create($request->all()); 
        alert()->success('Sukses!','Data Berhasil Diubah');       
        return redirect()->route('nilai');
    }

    public function edit($id)
    {
        $makul = Makul::all();
        $mahasiswa = Mahasiswa::all();
        $nilai = Nilai::find($id);
        return view('nilai.edit', compact('makul', 'mahasiswa', 'nilai'));
    }

    public function update(Request $request, $id)
    {
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Selamat, Data Berhasil Diubah','success');
        return redirect()->route('nilai');
    }

    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Sukses! Data Berhasil Dihapus','success');
        return redirect()->route('nilai');
    }
}
