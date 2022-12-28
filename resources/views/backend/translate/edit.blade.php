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
            <h4 class="box-title">Add Kuliner</h4>
            
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col">
                  <form method="post" action="{{route('bahasa.Update', $editData->id)}}">
                    @csrf
                      <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                              <h5>kata<span class="text-danger">*</span></h5>
                              <div class="controls">
                                  <input type="text" name="kata_ind" class="form-control" required data-validation-required-message="This field is required"> </div>
                              
                          </div>
                          </div>
                          <!-- end colmd6 -->
                      </div>
                      <!-- end row select -->

                      {{-- <div class="row">
                          <div class="col-md-6">
                          <div class="form-group">
                              <h5>pasangan<span class="text-danger">*</span></h5>
                              <div class="controls">
                                  <input type="text" name="pasangan" class="form-control" required data-validation-required-message="This field is required"> </div>
                              
                          </div>
                          </div> --}}
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