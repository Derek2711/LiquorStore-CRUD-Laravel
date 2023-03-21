<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/LOGOBURMA.png" type="">
      <title>RIG Project</title>
      <!-- bootstrap core css -->
      <link href="{{ asset('home/css/bootstrap.css') }}"  rel="stylesheet" type="text/css" />
      <!-- font awesome style -->
      <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         
         @if(session()->has('message'))

         <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
         </div>

         @endif
         <!-- end header section -->
      
      <!-- product section -->
         @include('home.products')


      <!-- footer start -->
         @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By BurmaLiquour<a href="#">For Your Happiness</a><br>
            Distributed By <a href="#">BURMA</a>
         </p>
      </div>
      <!-- jQery -->
      <script src="{{ asset('home/js/jquery-3.4.1.min.js') }}"></script>
      <!-- popper js -->
      <script src="{{ asset('home/js/popper.min.js') }}"></script>
      <!-- bootstrap js -->
      <script src="{{ asset('home/js/bootstrap.js') }}"></script>
      <!-- custom js -->
      <script src="{{ asset('home/js/custom.js') }}"></script>
   </body>
</html>