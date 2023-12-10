{{-- <!DOCTYPE html>
<html>
<head> --}}

    @extends('master')

    @section('title', 'Edit Data Pegawai')

    @section('konten')

	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
        <div class="form-group row">
            <label for="name" class="col-xl-1 col-form-label mr-2">Nama</label>
            <div class="col-xs-9">
            <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-xl-1 col-form-label mr-2">Jabatan</label>
            <div class="col-xs-9">
            <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-xl-1 col-form-label mr-2">Umur</label>
            <div class="col-xs-9">
            <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-xl-1 col-form-label mr-2">Alamat</label>
            <div class="col-xs-9">
            <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection
{{-- </body>
</html> --}}
