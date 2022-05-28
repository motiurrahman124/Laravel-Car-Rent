@extends('dashboard')
@section('main_content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add car</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('car_create')}}" method="post" id="quickForm" enctype="multipart/form-data">
               @csrf
              <div class="card-body">

                <div class="form-group">
                  <label for="exampleInputPassword1">Vehicle Title</label>
                  <input type="text" name="car_name" class="form-control" id="exampleInputPassword1" >

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Brand</label>
                  <input type="text" name="brand" class="form-control" id="exampleInputPassword1" >

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Model</label>
                  <input type="text" name="model" class="form-control" id="exampleInputPassword1" >

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Fuel Type</label>
                  <input type="text" name="fuel_type" class="form-control" id="exampleInputPassword1" >

                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Image</label>
                  <input type="file" name="image" class="form-control" id="exampleInputPassword1" >

                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Price Per Day(in USD)</label>
                  <input type="number" name="price" class="form-control" id="exampleInputPassword1" >

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Vehical Overview</label>
                  <input type="text" name="overview" class="form-control" id="exampleInputPassword1" >

                </div>


              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

@endsection