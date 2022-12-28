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
                        <th>kata</th>
                       
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <thead>
                        <a href="{{ route('backend.osing.add') }}" style="float: right;" type="button" class="btn btn-primary mb-5">Add osing</a>
                                <thead>
                    @foreach ($allsg as $key => $osg)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $osg->kata_os }}</td>
                            
                            <td>
                                <a href="{{ route('osing.Edit', $osg-> id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('osing.delete', $osg-> id) }}" class="btn btn-info">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </body>
@endsection
