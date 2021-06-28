<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;
use Alert;


class MakulController extends Controller
{
    public function index()
    {
        $makul = Makul::all();
        return view('makul.index', compact('makul'));
    }

    public function tambah()
    {
        return view('makul.tambah');    
    }

    public function store(Request $request)
    {
        Makul::create($request->all());
        Alert::alert()->success('Sukses!','Data Berhasil Diubah');    
        return redirect()->route('makul');
    }

    public function edit($id)
    {
        $makul = Makul::find($id);
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id)
    {
        $makul = Makul::find($id);
        $makul->update($request->all());
        Alert::toast('Selamat, Data Berhasil Diubah','success');
        return redirect()->route('makul');
    }

    public function destroy($id)
    {
        $makul = Makul::find($id);
        $makul->delete();
        Alert::toast('Sukses! Data Berhasil Dihapus','success');
        return redirect()->route('makul');
    }
}
