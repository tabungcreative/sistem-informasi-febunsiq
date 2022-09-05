@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Ubah dosen</h1>
	</div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/dosen/{{$dosen->id}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nidn" class="form-label">Nidn</label>
                <input type="text" class="form-control @error('nidn') is-invalid @enderror" id="nidn" name="nidn" value="{{old('nidn',$dosen->nidn)}}" required>
                @error('nidn')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama',$dosen->nama)}}" required>
                @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                Jenis Kelamin
                <div class="custom-control custom-radio">
                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="L" @if(old('jenis_kelamin') == 'L' || $dosen->jenis_kelamin == 'L') checked @endif class="form-check-input">
                    <label class="form-check-label" for="jenis_kelamin">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="P" @if(old('jenis_kelamin') == 'P' || $dosen->jenis_kelamin == 'P') checked @endif class="form-check-input">
                    <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No Handphone</label>
                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{old('no_hp',$dosen->no_hp)}}" required>
                @error('no_hp')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ubah dosen</button>
        </form>
    </div>
    <script></script>
@endsection