@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Ubah berita</h1>
	</div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/berita/{{$berita->id}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul berita</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{old('judul',$berita->judul)}}" required>
                @error('judul')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label @error('gambar') is-invalid @enderror">Gambar berita</label>
                <input type="hidden" name="oldImage" value="{{$berita->gambar}}">
                @if ($berita->gambar)
                    <img src="{{asset('storage/'.$berita->gambar)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif
                <input class="form-control" type="file" id="gambar" name="gambar" onchange="previewImage()">
                @error('gambar')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi berita</label>
                <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" id="isi" rows="5" required>{{old('isi',$berita->isi)}}</textarea>
                @error('isi')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ubah berita</button>
        </form>
    </div>
    <script>
        function previewImage() {
            const gambar = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');
        
            imgPreview.style.display='block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src=oFREvent.target.result;
            }
        }
    </script>
@endsection