@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Mahasiswa
                <a href="{{route('mahasiswa')}}" class="btn btn-md btn-primary float-right">Back</a> 
                </div>

                <div class="card-body">
                <form action="{{route('simpan.mahasiswa')}}" method ="POST" class="form-item" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                        <select name="user_id" id="user_id" class="form-control col-md-9">
                            <option value="" disabled selected>--Pilih User--</option>
                            @foreach ($user as $u)
                                <option value="{{ $u->id }}"> {{ $u->name}} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="number" name="npm" class="form-control col-md-9" placeholder="Masukkan NPM" maxlength="8">
                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control col-md-9" placeholder="Masukkan Tempat Lahir">
                    </div>

                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control col-md-9" placeholder="Masukkan Tanggal Lahir ">
                    </div>

                    <div class="form-group">
                        <tr><label for="jenis_kelamin">Jenis Kelamin</label><br/>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control col-md-9">
                            <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>             

                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="number" name="telepon" class="form-control col-md-9" placeholder="Masukkan Nomor Telepon" maxlength="15">
                    </div>    
                    
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="2" rows="3" class="form-control col-md-9" style="resize:none"></textarea>
                    </div>  

                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <a href="{{route('mahasiswa')}}" class="btn btn-danger">BATAL</a>
                </form>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
