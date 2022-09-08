@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Dosen</h1>
	</div>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-10" role="alert">
            {{session('success')}}
        </div>       
    @endif
    <a href="/dashboard/dosen/create" class="btn btn-primary mb-3">Tambah dosen</a>
    <div class="table-responsive col-lg-12">
	    <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nidn</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dosen as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->nidn}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->jenis_kelamin}}</td>
                    <td>{{$data->no_hp}}</td>
                    <td>
                        <a href="/dashboard/dosen/{{$data->id}}" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="/dashboard/dosen/{{$data->id}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <form action="/dashboard/dosen/{{$data->id}}" method="POST" class="d-inline">
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
        {{-- {{$dosen->links()}} --}}
    </div>
@endsection