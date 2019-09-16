@extends('layouts.master')

@push('add_css')

@endpush

@section('title')
<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a href="#" class="navbar-brand"><b>DATA TAMU</b></a>
      </div>
    </div>
  </nav>
</header>
@endsection

@section('content')
<div class="container">
  <section class="content">
      <div class="box">
          <div class="box-header with-border">
            <div class="box-tools pull-left">
            <a href={{url("{$id_guest}")}} type="button" class="btn btn-box-tool"><i class="fa fa-arrow-left"></i></a>
           </div>
          </div>
        
        <div class="box-body">
          <ul class="products-list product-list-in-box">
              @foreach ($data as $item)
                <li class="item">
                    <div class="product-img">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY7-ub1NpIfh_Gu0qEPwjy1OKYXfCY3Yms34km__nZA0uUj005" class="img-circle" alt="User Image">
                    </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title">{{$item->nama_guest}}</a><br />
                          <span>
                                {{$item->instansi}}
                          </span>
                          <span class="product-description">
                                {{$item->asal}}
                          </span>
                    </div>
                </li>
              @endforeach
          </ul>
        </div>
      </div>
  </section>
</div>
@endsection

@push('add_js')

@endpush
