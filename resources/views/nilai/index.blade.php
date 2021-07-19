@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nilai Mahasiswa
                <a href="{{route('tambah.nilai')}}" class="btn btn-md btn-primary float-right">Tambah Data</a> 
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>No. </th>
                            <th>NPM</th>
                            <th>Nama Lengkap</th>
                            <th>Nama Makul</th>
                            <th>SKS</th>
                            <th>Nilai</th>
                            <th>Aksi</th>
                        </tr>

                        @php
                            $no = 1;
                        @endphp

                        @foreach ($nilai as $n)
                        <tr>
                            <td> {{ $no++ }} </td>
                            <td> {{ $n->mahasiswa->npm }} </td>
                            <td> {{ $n->mahasiswa->user->name }} </td>
                            <td> {{ $n->makul->nama_makul }} </td>
                            <td> {{ $n->makul->sks }} </td>
                            <td> {{ $n->nilai}} </td>
                            <td>
                                <a href="{{route('edit.nilai', $n->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{route('delete.nilai', $n->id)}}" class="btn btn-sm btn-danger">Delete</a>
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
