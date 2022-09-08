@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Pengumuman</h1>
	</div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-10" role="alert">
            {{session('success')}}
        </div>       
    @endif
    <a href="/dashboard/pengumuman/create" class="btn btn-primary mb-3">Tambah pengumuman</a>
    <div class="table-responsive col-lg-12">
	    <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Isi</th>
                    <th scope="col">File</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengumuman as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->judul}}</td>
                    <td>{{$data->isi}}</td>
                    <td><a href="{{asset('storage/'.$data->file)}}" target="_blank" >view</a></td>
                    <td>{{$data->created_at}}</td>
                    <td>
                        <a href="/dashboard/pengumuman/{{$data->id}}" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="/dashboard/pengumuman/{{$data->id}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <form action="/dashboard/pengumuman/{{$data->id}}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="badge bg-danger border-0" onclick="return confirm('Yakin akan menghapus data?')">
                                <span data-feather="x-circle"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>					
	</div>
    <div class="d-flex justify-content-end">
        {{-- {{$pengumuman->links()}} --}}
    </div>
@endsection