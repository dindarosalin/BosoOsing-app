@extends('_layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
   

      <!-- Main content -->
      <section class="content">

       <!-- Basic Forms -->
        <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Add user</h4>
            
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col">
                  <form method="post" action="{{route('user.store')}}">
                    @csrf
                      <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                              <h5>name<span class="text-danger">*</span></h5>
                              <div class="controls">
                                  <input type="text" name="name" class="form-control" required data-validation-required-message="This field is required"> </div>
                              
                          </div>
                          </div>
                          <!-- end colmd6 -->
                      </div>
                      <!-- end row select -->

                      <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                              <h5>type<span class="text-danger">*</span></h5>
                              <div class="controls">
                                  <input type="number" name="type" class="form-control" > </div>
                              
                          </div>
                          </div>
                          <!-- end colmd6 -->
                      <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                              <h5>email<span class="text-danger">*</span></h5>
                              <div class="controls">
                                  <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                              
                          </div>
                          </div>
                          <!-- end colmd6 -->
                      <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                              <h5>password<span class="text-danger">*</span></h5>
                              <div class="controls">
                                  <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
                              
                          </div>
                          </div>
                          <!-- end colmd6 -->
                      <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                              <h5>phone_number<span class="text-danger">*</span></h5>
                              <div class="controls">
                                  <input type="number" name="phone_number" class="form-control" required data-validation-required-message="This field is required"> </div>
                              
                          </div>
                          </div>
                          <!-- end colmd6 -->
                      </div>                     
                      <div class="text-xs-right">
                          <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                      </div>
                  </form>

              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
</div>


@endsection