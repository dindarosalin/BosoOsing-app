@extends('_layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <body>
        <div class="main-content">

            <!-- Header -->
            <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
                style="min-height: 600px; background-image: url(https://cdn.eraspace.com/pub/media/mageplaza/blog/post/t/j/tjbxnmduqc.jpg); background-size: cover; background-position: center top;">
                <!-- Mask -->
                <span class="mask bg-gradient-default opacity-8"></span>
                <!-- Header container -->
                <div class="container-fluid d-flex align-items-center">
                    <div class="row">
                        <div class="col-lg-7 col-md-10">
                            <h1 class="display-2 text-white">Hello {{ $user->name }}</h1>
                            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made
                                with your work and manage your projects or assigned tasks</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--7">
                <div class="row">
                    <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                        <div class="card card-profile shadow">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 order-lg-2">
                                    <div class="card-profile-image">
                                        <a href="#">
                                            <img src="{{ asset('storage/photos/' . $user->photo) }}" class="rounded-circle" width="175px" height="175px">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                            </div>
                            <div class="card-body pt-0 pt-md-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <h3>
                                        {{ $user->name }}<span class="font-weight-light">
                                    </h3>
                                    <div class="h5 font-weight-300">
                                        <i class="ni location_pin mr-2"></i>{{ $user->email }}
                                    </div>

                                    <div>
                                        <i class="ni education_hat mr-2"></i>{{ $user->status }}
                                    </div>
                                    <hr class="my-4">
                                    <p>
                                        Bio (Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                        ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum.)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 order-xl-1">
                        <div class="card bg-secondary shadow">
                            <div class="card-header bg-white border-0">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">My Account</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('profile.update', $user->id) }}"
                                    enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf
                                    <h6 class="heading-small text-muted mb-4">User information</h6>
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-username">Name</label>
                                                    <input id="name" type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" value="{{ $user->name }}" required
                                                        autocomplete="name">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-email">Email
                                                        address</label>
                                                    <input type="email" id="input-email"
                                                        class="form-control @error('email') in-invalid @enderror"
                                                        name="email" value="{{ $user->email }}">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-phone-number">Phone
                                                        Number</label>
                                                    <input type="text" id="input-phone-number"
                                                        class="form-control form-control-alternative" name="phone_number"
                                                        value="{{ $user->phone_number }}" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-status">Status</label>
                                                    <input type="text" id="input-status"
                                                        class="form-control form-control-alternative" name="status"
                                                        value="{{ $user->status }}" placeholder="Status">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-file">Change picture</label>
                                                <input id="photo" type="file" class="form-control" name="photo">
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <!--Security-->
                                        <form>
                                            <h6 class="heading-small text-muted mb-4">Change Password</h6>
                                            <div class="pl-lg-4">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group focused">
                                                            <label class="form-control-label" for="input-old-password">Old
                                                                password</label>
                                                            <input type="text" id="input-Old-password"
                                                                class="form-control form-control-alternative"
                                                                placeholder="Old password">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-new-password">New
                                                                password</label>
                                                            <input type="text" id="input-new-password"
                                                                class="form-control form-control-alternative"
                                                                placeholder="New password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group focused">
                                                            <label class="form-control-label"
                                                                for="input-confirm-password">Confirm password</label>
                                                            <input type="text" id="input-confirm-password"
                                                                class="form-control form-control-alternative"
                                                                placeholder="Confirm password">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-0">
                                                    <div class="col-md-6 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            Simpan
                                                        </button>
                                                    </div>
                                                </div>
                                                <hr class="my-4">

                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
@endsection
