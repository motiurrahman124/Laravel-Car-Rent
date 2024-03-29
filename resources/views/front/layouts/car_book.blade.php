@include('front.book_head')


<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp text-info">Make a Car Booking</h1>

      <form class="main-form" role="form" action="{{ route('carBookCreate') }}" method="post" id="quickForm" enctype="multipart/form-data">
      @csrf 
      <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Your full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          
            <select name="car_name" id="departement" class="custom-select">
            @foreach( $carlist as $value )
              <option value="{{$value->car_name}}">{{$value->car_name}}</option>
              @endforeach

            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Mobile Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter additional message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-info mt-3 wow zoomIn">Submit Your Request</button>
      </form>
    </div>
  </div>

