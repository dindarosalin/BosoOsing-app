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
                <a href="{{ route('budaya') }}" class="btn btn-info">Kembali</a>
            @foreach ($allbdy as $key => $budaya)
                <tr>
                {{-- <td>{{ $key+1 }}</td> --}}
                    <td>{{ $budaya->nama_budaya }}</td>
                    <td>{{ $budaya->baseline }}</td>
                    <td>{{ $budaya->lokasi }}</td>
                    <td>{{ $budaya->gambar }}</td>
                    <td>{{ $budaya->artikel }}</td>
                </tr>    
            @endforeach
            </tbody>
        </table> 
    </body>
@endsection
