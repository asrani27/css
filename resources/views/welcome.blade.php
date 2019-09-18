@extends('layouts.master')

@push('add_css')

@endpush

@section('title')
<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header"><br>
        <p class="text-center" style="color:white;font-size:18px;padding-top:20px;"><b>CSS</b> Banjarmasin 2019</p>
      </div>
    </div>
  </nav>
</header>
@endsection

@section('content')
<div class="box-body-carousel">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
        </ol>
              <div class="carousel-inner">
                <div class="item active">
                  <img src="{{url('LTE/slide1edit.jpg')}}" style="height: 170px; width: 100%;" alt="First slide">

                  {{-- <div class="carousel-caption">
                    First Slide
                  </div> --}}
                </div>
                <div class="item">
                  <img src="{{url('LTE/slide2edit.jpg')}}" style="height: 170px; width: 100%;" alt="Second slide">

                  {{-- <div class="carousel-caption">
                    Second Slide
                  </div> --}}
                </div>
                <div class="item">
                  <img src="{{url('LTE/slide3edit.jpg')}}" style="height: 170px; width: 100%;"  alt="Third slide">
                  {{-- <div class="carousel-caption">
                    Third Slide
                  </div> --}}
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="fa fa-angle-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="fa fa-angle-right"></span>
              </a>
    </div>
</div>
<div class="container">
  <section class="content">
      <div class="box">
        <div class="box-body">
        <a type="button" class="btn btn-lg btn-block btn-success" href={{url("{$id_guest}/data_tamu")}}>DATA TAMU</a>
          <a type="button" class="btn btn-lg btn-block btn-success" href={{url("{$id_guest}/file_download")}}>FILE DOWNLOAD</a>
          <a type="button" class="btn btn-lg btn-block btn-success" href={{url("{$id_guest}/profile")}}>PROFILE</a>
         </div>
      </div>
  </section>
</div>
@endsection

@push('add_js')

@endpush
