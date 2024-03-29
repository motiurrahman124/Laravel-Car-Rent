
@extends('dashboard')
@section('main_content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12 ">
          <div class="card card-info">
            <div class="card-header">
              <h2 class="card-title ">Car Booking List</h2>


              
            </div>
            
            <!-- /.card-header -->
            <div class="card-body table-responsive " style="height: 490px;">
              <table class="table table-head-fixed text-nowrap">
                <thead class="text-info">
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Car Name</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i=0 ?>

                @foreach($car as $value)
                
                    <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->time}}</td>
                    <td>{{$value->car_name}}</td>
                    <td>{{$value->number}}</td>
                    <td>{{$value->message}}</td>
                    <td>{{$value->status}}</td>
                    <td>
                     
                      <a type="button" href="{{route('approval',$value->id)}}" class="btn btn-success">Approve</a>
                      <a type="button" href="{{route('cancel',$value->id)}}" class="btn btn-danger">Cancel</a>
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