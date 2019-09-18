@extends('layouts.master')

@push('add_css')

@endpush

@section('title')
<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header"><br>
        <a href="#" class="navbar-brand"><b>LIST FILE DOWNLOAD</b></a>
      </div>
    </div>
  </nav>
</header>
@endsection

@section('content')
<div class="container">
  <section class="content">
      <div class="box">
          {{-- <div class="box-header with-border">
            <div class="box-tools pull-left">
            <a href={{url("{$id_guest}")}} type="button" class="btn btn-box-tool"><i class="fa fa-arrow-left"></i></a>
           </div>
          </div> --}}
        
        <div class="box-body">
          <ul class="products-list product-list-in-box">
              @foreach ($file as $item)
                <li class="item">
                    <div class="product-img">
                        <a href="http://css-registration.banjarmasinkota.go.id/upload/file/{{$item->url_file}}">
                            <img src="{{url('LTE/download.png')}}" class="img-circle" alt="User Image">
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="http://css-registration.banjarmasinkota.go.id/upload/file/{{$item->url_file}}" class="product-title">{{$item->nama_file}}</a><br />
                          <span class="product-description">
                                {{$item->url_file}}
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
