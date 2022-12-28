@extends('_layouts.app')
@section('content')

    <body>
        <h1>Budaya</h1>
        <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
        <a href="{{ route('backend.budaya.add') }}" style="float: right;" type="button" class="btn btn-primary mb-5">Add Budaya</a>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Outline</th>
                        <th>lokasi</th>
                        <th>Artikel</th>
                        <th>Gambar</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allbudaya as $key => $bdy)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $bdy->nama_budaya }}</td>
                            <td>{{ $bdy->outline }}</td>
                            <td>{{ $bdy->lokasi }}</td>
                            <td>{{ $bdy->artikel }}</td>
                            {{-- <td><img src="{{ asset('assets/images') }}/{{ $bdy->gambar }}" class="img-thumbnail" alt="{{ $bdy->gambar }}"></td> --}}
                            <td><img src="{{ asset('assets/images') }}/{{ $bdy->gambar }}" width="100" height="100" alt="{{ $bdy->gambar }}"></td>
                            <td>
                                <a href="{{ route('budayas.Edit', $bdy-> id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('budayas.delete', $bdy-> id) }}" class="btn btn-info">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </body>
@endsection
