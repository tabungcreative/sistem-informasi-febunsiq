@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Tambah File unduhan</h1>
	</div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/file-unduhan" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_file" class="form-label">Nama File</label>
                <input type="text" class="form-control @error('nama_file') is-invalid @enderror" id="nama_file" name="nama_file" value="{{old('nama_file')}}" required>
                @error('nama_file')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="file" class="form-label @error('file') is-invalid @enderror">File unduhan</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control" type="file" id="file" name="file">
                @error('file')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah FIle unduhan</button>
        </form>
    </div>
    <script></script>
@endsection