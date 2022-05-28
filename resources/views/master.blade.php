<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental Portal</title>
<!--Bootstrap -->
@include('front.head')
</head>
<body>

<!-- Start Switcher -->
@include('front.colorswitcher')
<!-- /Switcher -->  
        
<!--Header-->
@include('front.header')
<!-- /Header --> 

<!-- Banners -->
@yield('content')
<!-- /Testimonial--> 


<!--Footer -->
@include('front.footer')
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 



@include('front.script')

</body>

</html>