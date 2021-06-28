@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Input Mahasiswa
                </div>

                <div class="card-body">
                <form action="{{route('update.mahasiswa', $mahasiswa->id)}}" method ="POST" class="form-item" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" name="npm" class="form-control col-md-9" placeholder="Masukkan NPM" value = "{{is_null
                        ($mahasiswa) ? '' : $mahasiswa->npm}}">
                    </div>

                    <div class="form-group">
                        <label for="nama_mahasiswa">Nama</label>
                        <input type="text" name="nama_mahasiswa" class="form-control col-md-9" placeholder="Masukkan Nama Lengkap" value = "{{is_null
                        ($mahasiswa) ? '' : $mahasiswa->nama_mahasiswa}}">
                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control col-md-9" placeholder="Masukkan Tempat Lahir" value = "{{is_null
                        ($mahasiswa) ? '' : $mahasiswa->tempat_lahir}}">
                    </div>

                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control col-md-9" placeholder="Masukkan Tanggal Lahir " value = "{{is_null
                        ($mahasiswa) ? '' : $mahasiswa->tgl_lahir}}">
                    </div>

                    <div class="form-group">
                        <tr><label for="jenis_kelamin">Jenis Kelamin</label><br/>
                        <td><input type="radio" name="jenis_kelamin" value="L" id="laki" <?php if($mahasiswa['jenis_kelamin']=='L') echo 'checked' ?>>
                        <label for="laki">Laki-Laki</label><br/>
                        
                        <input type="radio" name="jenis_kelamin" value="P" id="perempuan" <?php if($mahasiswa['jenis_kelamin']=='P') echo 'checked' ?>>
                        <label for="perempuan">Perempuan</label></td></tr>
                    </div>             

                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" name="telepon" class="form-control col-md-9" placeholder="Masukkan telepon" value = "{{is_null
                        ($mahasiswa) ? '' : $mahasiswa->telepon}}">
                    </div>    
                    
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control col-md-9" placeholder="Masukkan Alamat" value = "{{is_null
                        ($mahasiswa) ? '' : $mahasiswa->alamat}}">
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
