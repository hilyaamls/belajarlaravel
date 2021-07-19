@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Nilai Mahasiswa
                <a href="{{route('nilai')}}" class="btn btn-md btn-primary float-right">Back</a> 
                </div>

                <div class="card-body">
                <form action="{{route('simpan.nilai')}}" method ="POST" class="form-item" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                        <select name="mahasiswa_id" id="mahasiswa_id" class="form-control col-md-9">
                            <option value="" disabled selected>--Pilih Mahasiswa--</option>
                            @foreach ($mahasiswa as $mhs)
                                <option value="{{ $mhs->id }}"> {{ $mhs->user->name}} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Mata Kuliah</label>
                        <select name="makul_id" id="makul_id" class="form-control col-md-9">
                            <option value="" disabled selected>--Pilih Mata Kuliah--</option>
                            @foreach ($makul as $mkl)
                                <option value="{{ $mkl->id }}"> {{ $mkl->nama_makul}} </option>
                            @endforeach
                        </select>
                    </div>        

                    <div class="form-group">
                        <label for="nilai">Nilai</label>
                        <input type="number" name="nilai" class="form-control col-md-9" placeholder="Masukkan Nilai" maxlength="3">
                    </div>    
                    
                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <a href="{{route('nilai')}}" class="btn btn-danger">BATAL</a>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
