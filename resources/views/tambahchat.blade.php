{{-- <!DOCTYPE html>
<html>
<head> --}}
    @extends('master')

    @section('title', 'Tambah Chat')

    @section('konten')

        {{-- <title>Tambah Data Nilai Kuliah</title>
    </head> --}}
    {{-- <body> --}}

        <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
        <h3>Chat Baru</h3>

        <a href="/chat" class=" btn btn-primary"> Kembali</a>

        <br/>
        <br/>

        <form action="/chat/store" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="pesan" class="col-xl-1 col-form-label mr-2">Pesan</label>
                <div class="col-xs-9">
                <input type="number" class="form-control" id="pesan" name="pesan">
                </div>
            <input type="submit" value="Simpan Data" class = "btn btn-primary">
        </form>
    @endsection



    {{-- </body>
    </html> --}}
