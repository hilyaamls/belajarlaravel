@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Mata Kuliah
                <a href="{{route('tambah.makul')}}" class="btn btn-md btn-primary float-right">Tambah Data</a> 
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Kode Mata Kuliah</th>
                            <th>Nama Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Aksi</th>
                        </tr>

                        @foreach ($makul as $makul)
                        <tr>
                            <td> {{ $makul->id }} </td>
                            <td> {{ $makul->kd_makul }} </td>
                            <td> {{ $makul->nama_makul }} </td>
                            <td> {{ $makul->sks }} </td>
                            <td>
                                <a href="{{route('edit.makul', $makul->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{route('delete.makul', $makul->id)}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </table>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
