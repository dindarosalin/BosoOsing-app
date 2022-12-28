@extends('_layouts.app')
@section('content')

    <body>
    
        
        
        <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>id_osing</th>
                        <th>id_bahasa_ind</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <thead>
                        <a href="{{ route('backend.transisi.add') }}" style="float: right;" type="button" class="btn btn-primary mb-5">Add ind</a>
                                <thead>
                    @foreach ($alltr as $key => $osg)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $osg->bahasa_osing_id }}</td>
                            <td>{{ $osg->bahasa_indonesia_id }}</td>
                            <td>
                                <a href="{{ route('transisi.Edit', $osg-> id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('transisi.delete', $osg-> id) }}" class="btn btn-info">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </body>
@endsection
