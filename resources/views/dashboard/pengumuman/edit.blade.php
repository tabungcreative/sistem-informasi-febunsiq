@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Ubah Pengumuman</h1>
	</div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/pengumuman/{{$pengumuman->id}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Pengumuman</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{old('judul',$pengumuman->judul)}}" required>
                @error('judul')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="file" class="form-label @error('file') is-invalid @enderror">File Pengumuman</label>
                <input type="hidden" name="oldImage" value="{{$pengumuman->file}}">
                <input class="form-control" type="file" id="file" name="file">
                @error('file')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi Pengumuman</label>
                <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" id="isi" rows="5" required>{{old('isi',$pengumuman->isi)}}</textarea>
                @error('isi')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ubah Pengumuman</button>
        </form>
    </div>
    <script></script>
@endsection