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
                        <th>type</th>
                        <th>name</th>
                        <th>email</th>
                        <th>photo</th>
                        <th>no hp</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <thead>
                        <a href="{{ route('backend.user.add') }}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah User</a>
                                <thead>
                    @foreach ($allDataUser as $key => $user)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $user->type }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->photo }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>
                                <a href="{{ route('user.Edit', $user-> id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('user.delete', $user-> id) }}" class="btn btn-info">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </body>
@endsection
