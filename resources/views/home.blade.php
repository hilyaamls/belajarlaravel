@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Welcome!!!
                    You are logged in!
                    <br>
                    Menu :

                    <ul>
                        <li><a href="{{route('mahasiswa')}}">Data Mahasiswa</a></li>
                        <li><a href="{{route('makul')}}">Data Mata Kuliah</a></li>
                        <li><a href="{{route('nilai')}}">Data Nilai Mahasiswa</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
