@extends('_layouts.app')
@section('content')

    <body>

        <table>
            <thead>
                <tr>
                    {{-- <th>Nomor</th> --}}
                    <th>Nama</th>
                    <th>Meow</th>
                    <th>Gambar</th>
                    <th>Artikel</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('kuliner') }}" class="btn btn-info">Kembali</a>
            @foreach ($allKuliner as $key => $kuliner)
                <tr>
                {{-- <td>{{ $key+1 }}</td> --}}
                    <td>{{ $kuliner->nama_kuliner }}</td>
                    <td>{{ $kuliner->baseline }}</td>
                    <td>{{ $kuliner->lokasi }}</td>
                    <td>{{ $kuliner->gambar }}</td>
                    <td>{{ $kuliner->artikel }}</td>
                </tr>    
            @endforeach
            </tbody>
        </table> 
    </body>
@endsection
