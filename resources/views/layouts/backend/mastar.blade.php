<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.backend.head')

</head>

<body>

<div class="wrapper">

<!--=================================
 preloader -->

<div id="pre-loader">
    <img src="{{asset('backend/assets/images/pre-loader/loader-01.svg')}}" alt="">
</div>

<!--=================================
 preloader -->


<!--=================================


@include('layouts.backend.main-header')
 Main content -->

<div class="container-fluid">
  <div class="row">
    <!-- Left Sidebar start-->
     @include('layouts.backend.main-sidebar')

<!-- Left Sidebar End-->

 <!--=================================
wrapper -->


    <div class="content-wrapper">
        @yield('content')


        @include('layouts.backend.footer')
    </div><!-- main content wrapper end-->
  </div>
 </div>
</div>

<!--=================================
 footer -->


<!--=================================
 jquery -->

@include('layouts.backend.script')

</body>
</html>
