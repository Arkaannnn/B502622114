{{-- <!DOCTYPE html>
<html>
<head> --}}
    @extends('master')

    @section('title', 'Tambah Data Pegawai')

    @section('konten')

        {{-- <title>Tambah Data Nilai Kuliah</title>
    </head> --}}
    {{-- <body> --}}

        <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
        <h3>Tambah Data Nilai Kuliah</h3>

        <a href="/nilaikuliah" class=" btn btn-primary"> Kembali</a>

        <br/>
        <br/>

        <form action="/nilaikuliah/storenilai" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="NRP" class="col-xl-1 col-form-label mr-2">NRP</label>
                <div class="col-xs-9">
                <input type="number" class="form-control" id="NRP" name="NRP">
                </div>
             </div>
            <div class="form-group row">
                <label for="NilaiAngka" class="col-xl-1 col-form-label mr-2">Nilai Angka</label>
                <div class="col-xs-9">
                <input type="number" class="form-control" id="NilaiAngka" name="NilaiAngka">
                </div>
            </div>
            <div class="form-group row">
                <label for="SKS" class="col-xl-1 col-form-label mr-2">SKS</label>
                <div class="col-xs-9">
                <input type="number" class="form-control" id="SKS" name="SKS">
                </div>
            </div>
            <input type="submit" value="Simpan Data" class = "btn btn-primary">
        </form>
    @endsection



    {{-- </body>
    </html> --}}
