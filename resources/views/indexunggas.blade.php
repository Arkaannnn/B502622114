    {{-- <!DOCTYPE html>
    <html>
    <head>
        <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    </head>
    <body> --}}
        @extends('master')

        @section('title', 'Unggas')

        @section('konten')

            <h2>PWEB-B Arkaan Hilmi Suharsoyo - 140</h2>
            <h3>Unggas</h3>

            <a href="/unggas/tambahunggas" class="btn btn-primary"> + Tambah Data Unggas</a>
            <p></p>

            <table class="table table-striped table-hover">
                <tr>
                    <th>Kode Unggas</th>
                    <th>Nama Unggas</th>
                    <th>Jumlah Unggas</th>
                    <th>Tersedia</th>

                </tr>
                @foreach($unggas as $U)
                <tr>
                    <td>{{ $U->kodeunggas }}</td>
                    <td>{{ $U->namaunggas }}</td>
                    <td>{{ $U->jumlahunggas }}</td>
                    <td>
                        @if ($U->tersedia == 'Y')
                        Y
                        @elseif ($U->tersedia == 'N')
                        N
                        @endif
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
