@extends('master')

@section('content')

<div>
    <br>
    <br>
<table class="table mt-5">
  <thead class="thead-dark">
    <tr>
    <th>Sl</th>
    <th>Name</th>
    <th>Email</th>
    <th>Date</th>
    <th>Car Name</th>
    <th>Phone</th>
    <th>Status</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($booklist as $booklist)
                
              <tr>
              <th scope="row">{{$loop->iteration}}</th>
                <td>{{$booklist->name}}</td>
                <td>{{$booklist->email}}</td>
                <td>{{$booklist->time}}</td>
                <td>{{$booklist->car_name}}</td>
                <td>{{$booklist->number}}</td>
                <td><a type="button" class="btn btn-info disabled">{{$booklist->status}}</td>
            
              </tr>
               
            @endforeach
    
    
  </tbody>
</table>
<br>
</div>


@endsection