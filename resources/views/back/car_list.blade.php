
@extends('dashboard')
@section('main_content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header ">
              <h2 class="card-title">Car List</h2>


              <div class="card-tools ">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a type="button" href="{{route('add_car')}}" class="btn bg-lime">Add New Car</a>
                </div>
              </div>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead class="text-info">
                  <tr>
                    <th>SL.</th>
                    <th>Car Title</th>
                    <th>Brand</th>
                    <th>Fuel Type</th>
                    <th>Model</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Overview</th>
                    <th>action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i=0 ?>

                @foreach($car as $car)
                
                    <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$car->car_name}}</td>
                    <td>{{$car->brand}}</td>
                    <td>{{$car->fuel_type}}</td>
                    <td>{{$car->model}}</td>
                    <td><img src="{{ asset($car->image) }}" width="30px"  heigh="20px" alt="no image" /></td>
                    <td>{{$car->price}}</td>
                    <td>{{$car->overview}}</td>
                    <td>
                     
                      <a type="button" href="{{route('car_delete',$car->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                  </td>
                    

                  </tr>
                   
                @endforeach
               
            
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->




@endsection