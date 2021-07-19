@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Mata Kuliah
                </div>

                <div class="card-body">
                <form action="{{route('update.makul', $makul->id)}}" method ="POST" class="form-item" >
                
                @csrf
                <div class="form-group">
                    <div class="form-row">
                    <div class="col">
                        <label for="kd_makul"> Kode Mata Kuliah </label>
                        <input type="text" name="kd_makul" class="form-control col-md-9" placeholder="Masukkan Kode Mata Kuliah" value = "{{is_null
                        ($makul) ? '' : $makul->kd_makul}}">
                    </div>
 
                    <div class="col">
                        <label for="nama_makul"> Nama Mata Kuliah </label>
                        <input type="text" name="nama_makul" class="form-control col-md-9" placeholder="Masukkan Nama Mata Kuliah" value = "{{is_null
                        ($makul) ? '' : $makul->nama_makul}}">
                    </div>

                    <div class="col">
                        <label for="sks"> SKS </label>
                        <input type="number" name="sks" class="form-control col-md-9" placeholder="Masukkan Jumlah SKS Mata Kuliah" value = "{{is_null
                        ($makul) ? '' : $makul->sks}}">
                    </div>
                </div>
                </div>

                <div class="form-group float-right">
                    <div class="form-row">
                    <div class="col">
                    <button type="submit" class="btn btn-primary" name="simpan"> SIMPAN </button>
                    <a href="{{route('makul')}}" class="btn btn-danger"> BATAL </a>
                    </div>
                    </div>
                </div>
                </form>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
