@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{$dosen->nama}}</h1>
                <h1 class="mb-3">{{$dosen->nidn}}</h1>
                <h1 class="mb-3">{{$dosen->no_hp}}</h1>
                <a href="/dashboard/dosen" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
                <a href="/dashboard/dosen/{{$dosen->id}}/edit" class="btn btn-warning"><span data-feather="edit"></span> Ubah</a>
                <form action="/dashboard/dosen/{{$dosen->id}}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" onclick="return confirm('Are you Sure?')">
                        <span data-feather="x-circle"></span> Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection