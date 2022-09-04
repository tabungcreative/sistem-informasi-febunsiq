@extends('dashboard.layouts.main')
@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{$fileunduhan->nama_file}}</h1>
                <a href="/dashboard/file-unduhan" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
                <a href="/dashboard/file-unduhan/{{$fileunduhan->id}}/edit" class="btn btn-warning"><span data-feather="edit"></span> Ubah</a>
                <form action="/dashboard/file-unduhan/{{$fileunduhan->id}}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" onclick="return confirm('Are you Sure?')">
                        <span data-feather="x-circle"></span> Hapus
                    </button>
                </form>
                <div class="mt-2">
                    <small>{{$fileunduhan->created_at}}</small>
                </div>               
                <article class="my-3 fs-5">
                    {!! $fileunduhan->isi !!}
                    <br>
                    <small>
                        <a href="{{asset('storage/'.$fileunduhan->file)}}" target="_blank" >view</a>
                    </small>
                </article>
            </div>
        </div>
    </div>
@endsection