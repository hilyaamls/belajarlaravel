@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Nilai Mahasiswa
                </div>

                <div class="card-body">
                <form action="{{route('update.nilai', $nilai->id)}}" method ="POST" class="form-item" enctype="multipart/form-data">
                    
                @csrf
                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                        <select name="mahasiswa_id" id="mahasiswa_id" class="form-control col-md-9">
                            <option value="" disabled selected>--Pilih Mahasiswa--</option>
                            @foreach ($mahasiswa as $mhs)
                                <option value="{{ $mhs->id }}" {{ $nilai->mahasiswa_id == $mhs->id ? 'selected' : '' }}> {{ $mhs->user->name}} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Mata Kuliah</label>
                        <select name="makul_id" id="makul_id" class="form-control col-md-9">
                            <option value="" disabled selected>--Pilih Mata Kuliah--</option>
                            @foreach ($makul as $mkl)
                                <option value="{{ $mkl->id }}" {{ $nilai->makul_id == $mkl->id ? 'selected' : '' }}> {{ $mkl->nama_makul}} </option>
                            @endforeach
                        </select>
                    </div>     

                    <div class="form-group">
                        <label for="nilai">Nilai</label>
                        <input type="number" name="nilai" class="form-control col-md-9" placeholder="Masukkan Nilai" maxlength="3" value = "{{is_null
                        ($nilai) ? '' : $nilai->nilai}}">
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
