    {{-- <!DOCTYPE html>
    <html>
    <head>
        <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    </head>
    <body> --}}
        @extends('master')

        @section('title', 'chat')

        @section('konten')

            <h2>PWEB-B Arkaan Hilmi Suharsoyo - 140</h2>
            <h3>Chat</h3>
            <a href="/chat/tambahchat" class="btn btn-primary"> + Chat Baru</a>
            <p></p>

            <table class="table table-striped table-hover">
                <tr>
                    <th>ID</th>
                    <th>Pesan</th>

                </tr>
                <div>
                    @foreach ($chat as $message)
                    <td>{{ $message->id }}</td>
                    <td>
                            {{-- Penggantian emotikon langsung di dalam loop --}}
                            @php
                                $emoticonMap = [
                                    ':))' => '1.png',
                                    ':3'  => '2.png',
                                    ':P'  => '3.png',
                                    ':C'  => '4.png',
                                    ';)'  => '5.png',
                                ];
                                // memecah pesan menjadi array kata-kata
                                $words = explode(' ', $message->pesan);
                                // menggantikan kata-kata tertentu dengan gambar
                                $words = array_map(function($word) use ($emoticonMap) {
                                    return isset($emoticonMap[$word]) ? '<img src="' . asset('img/' . $emoticonMap[$word]) . '" alt="' . $word . '" style="max-width: 20px; max-height: 20px;" />' : $word;
                                }, $words);
                                // menggabungkan array kata-kata menjadi string kembali
                                $message->pesan = implode(' ', $words);
                            @endphp

                            {!! $message->pesan !!}
                    </td>
                    @endforeach
                </div>
            </table>
        @endsection

        {{-- </body>
        </html> --}}
