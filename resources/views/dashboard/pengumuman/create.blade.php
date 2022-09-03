@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Tambah Pengumuman</h1>
	</div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/pengumuman" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Pengumuman</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{old('judul')}}" required>
                @error('judul')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="file" class="form-label @error('file') is-invalid @enderror">file Pengumuman</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control" type="file" id="file" name="file" onchange="previewImage()">
                @error('file')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi Pengumuman</label>
                <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" id="isi" rows="5" required>{{old('isi')}}</textarea>
                @error('isi')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah Pengumuman</button>
        </form>
    </div>
    <script>
        // function previewImage() {
        //     const file = document.querySelector('#file');
        //     const imgPreview = document.querySelector('.img-preview');
        
        //     imgPreview.style.display='block';
        //     const oFReader = new FileReader();
        //     oFReader.readAsDataURL(file.files[0]);

        //     oFReader.onload = function(oFREvent){
        //         imgPreview.src=oFREvent.target.result;
        //     }
        // }
    </script>
@endsection