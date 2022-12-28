@extends('_layouts.app')
@section('content')

    <body>
        <h1>wisata</h1>
        <div class="box-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <a href="{{ route('backend.wisata.add') }}" style="float: right;" type="button"
                            class="btn btn-primary mb-5">Add wisata</a>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Outline</th>
                                <th>Alamat</th>
                                <th>Gambar</th>
                                <th>Artikel</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach ($allwisata as $key => $wisata)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $wisata->nama_wisata }}</td>
                                <td>{{ $wisata->outline }}</td>
                                <td>{{ $wisata->lokasi }}</td>

                                {{-- <td><img src="{{ asset('assets/images') }}/{{ $wisata->gambar }}" class="img-thumbnail" alt="{{ $wisata->gambar }}"></td> --}}
                                <td><img src="{{ asset('storage/images') }}/{{ $wisata->gambar }}" width="100"
                                        height="100" alt="{{ $wisata->gambar }}"></td>
                                <td>{{ $wisata->artikel }}</td>
                                <td>
                                    <a href="{{ route('wisatas.Edit', $wisata->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ route('wisatas.delete', $wisata->id) }}" class="btn btn-info">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </div>
        </div>
    </body>
@endsection
