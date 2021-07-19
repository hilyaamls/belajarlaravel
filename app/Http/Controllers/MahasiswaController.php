<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Alert;
use App\User;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::with(['user'])->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    } 

    public function tambah()
    {
        $user = User::all();
        return view('mahasiswa.tambah', compact('user'));
    }

    public function store(Request $request)
    {
        Mahasiswa::create($request->all()); 
        alert()->success('Sukses!','Data Berhasil Diubah');       
        return redirect()->route('mahasiswa');
    }

    public function edit($id)
    {
        $user = User::all();
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa', 'user'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Selamat, Data Berhasil Diubah','success');
        return redirect()->route('mahasiswa');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Sukses! Data Berhasil Dihapus','success');
        return redirect()->route('mahasiswa');
    }
}
