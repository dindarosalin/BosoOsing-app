@extends('_layouts.app')
@section('content')

    <body>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">indo</a>
        </li>
        
        
        <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
        <a href="{{ route('backend.translate.add') }}" style="float: right;" type="button" class="btn btn-primary mb-5">Add ind</a>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>kata</th>
                        
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allind as $key => $ind)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $ind->kata_ind }}</td>
                            
                            <td>
                                <a href="{{ route('bahasa.Edit', $ind-> id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('bahasa.delete', $ind-> id) }}" class="btn btn-info">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                    {{-- <thead>
                        <a href="{{ route('backend.translate.add') }}" style="float: right;" type="button" class="btn btn-primary mb-5">Add ind</a>
                                <thead>
                    @foreach ($allsg as $key => $osg)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $osg->kata }}</td>
                            <td>{{ $osg->pasangan }}</td>
                            <td>
                                <a href="{{ route('osing.Edit', $osg-> id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('osing.delete', $osg-> id) }}" class="btn btn-info">Hapus</a>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </div>
        </div>
    </body>
@endsection
