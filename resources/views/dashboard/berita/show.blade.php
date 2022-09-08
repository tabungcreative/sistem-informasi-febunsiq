@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{$berita->judul}}</h1>
                <a href="/dashboard/berita" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
                <a href="/dashboard/berita/{{$berita->id}}/edit" class="btn btn-warning"><span data-feather="edit"></span> Ubah</a>
                <form action="/dashboard/berita/{{$berita->id}}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" onclick="return confirm('Are you Sure?')">
                        <span data-feather="x-circle"></span> Hapus
                    </button>
                </form>
                <div class="mt-2">
                    <small>{{$berita->created_at}}</small>
                </div>
                <div style="max-height:350px;overflow:hidden;">
                    <img src="{{asset('storage/'.$berita->gambar)}}" class="img-fluid mt-3" alt="{{asset('storage/'.$berita->gambar)}}">
                </div>
                <article class="my-3 fs-5">
                    {!! $berita->isi !!}
                </article>
            </div>
        </div>
    </div>
@endsection