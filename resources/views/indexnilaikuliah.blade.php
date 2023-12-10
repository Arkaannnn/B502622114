    {{-- <!DOCTYPE html>
    <html>
    <head>
        <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    </head>
    <body> --}}
        @extends('master')

        @section('title', 'Nilai Kuliah')

        @section('konten')

            <h2>PWEB-B Arkaan Hilmi Suharsoyo - 140</h2>
            <h3>Nilai Kuliah</h3>

            <a href="/nilaikuliah/tambahdata" class="btn btn-primary"> + Tambah Data Nilai Kuliah</a>
            <p></p>

            <table class="table table-striped table-hover">
                <tr>
                    <th>ID</th>
                    <th>NRP</th>
                    <th>Nilai Angka</th>
                    <th>SKS</th>
                    <th>Nilai Huruf</th>
                    <th>Bobot</th>

                </tr>
                @foreach($nilaikuliah as $p)
                <tr>
                    <td>{{ $p->ID }}</td>
                    <td>{{ $p->NRP }}</td>
                    <td>{{ $p->NilaiAngka }}</td>
                    <td>{{ $p->SKS }}</td>
                    <td>
                        @if ($p->NilaiAngka >=81)
                        A
                        @elseif ($p->NilaiAngka >=61 && $p->NilaiAngka <= 81)
                        B
                        @elseif ($p->NilaiAngka >=41 && $p->NilaiAngka <= 60)
                        C
                        @elseif ($p->NilaiAngka >=40)
                        D
                        @endif
                        <td>{{ $p->NilaiAngka*$p->SKS}}</td>
                    </td>

                    {{-- <td>
                        <a href="/pegawai/view/{{ $p->pegawai_id }}" class= "btn btn-info"> view</a>
                        |
                        <a href="/pegawai/edit/{{ $p->pegawai_id }}" class= "btn btn-warning"> Edit</a>
                        |
                        <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class= "btn btn-danger">Hapus</a>
                    </td> --}}
                </tr>
                @endforeach
            </table>
        @endsection

        {{-- </body>
        </html> --}}
