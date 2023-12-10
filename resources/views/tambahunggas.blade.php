{{-- <!DOCTYPE html>
<html>
<head> --}}
    @extends('master')

    @section('title', 'Tambah Data Unggas')

    @section('konten')

        {{-- <title>Tambah Data Nilai Kuliah</title>
    </head> --}}
    {{-- <body> --}}

        <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
        <h3>Tambah Data Unggas</h3>

        <a href="/unggas" class=" btn btn-primary"> Kembali</a>

        <br/>
        <br/>

        <form action="/unggas/storedata" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="Nama Unggas" class="col-xl-1 col-form-label mr-2">Nama Unggas</label>
                <div class="col-xs-9">
                <input type="text" class="form-control" id="namaunggas" name="namaunggas">
                </div>
             </div>
            <div class="form-group row">
                <label for="Jumlah Unggas" class="col-xl-1 col-form-label mr-2">Jumlah Unggas</label>
                <div class="col-xs-9">
                <input type="number" class="form-control" id="jumlahunggas" name="jumlahunggas">
                </div>
            </div>
            {{-- <div class="form-group row">
                <label for="Tersedia" class="col-xl-1 col-form-label mr-2">Tersedia</label>
                <div class="col-xs-9">
                <input type="text" class="form-control" id="tersedia" name="tersedia">
                </div>
            </div> --}}
            <div class="form-group row">
                <label for="Tersedia" class="col-xl-1 col-form-label mr-2">Tersedia</label>
                <div class="col-xs-9">
                <select name="tersedia" id="statusketersediaan" class="custom-select custom-select-sm">
                    <option disabled selected>Status Ketersediaan</option>
                    <option value="Y">Tersedia</option>
                    <option value="N">Tidak Tersedia</option>
                    <script>
                        // Mendengarkan perubahan pada dropdown dengan ID "tersediaDropdown"
                        document.getElementById('statusketersediaan').addEventListener('change', function() {
                            // Mendapatkan nilai yang dipilih dari dropdown
                            var tersediaValue = this.value;

                            // Mendapatkan elemen input teks dengan ID "tersedia"
                            var tersediaInput = document.getElementById('tersedia');

                            // Mengatur nilai pada input teks sesuai dengan nilai yang dipilih dari dropdown
                            tersediaInput.value = tersediaValue;
                        });
                    </script>
                  </select>
                </div>
            </div>

            <input type="submit" value="Simpan Data" class = "btn btn-primary">
        </form>
    @endsection



    {{-- </body>
    </html> --}}
