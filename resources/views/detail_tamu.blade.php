@extends('layouts.master')

@push('add_css')

@endpush

@section('title')
<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a href="#" class="navbar-brand"><b>DETAIL TAMU</b></a>
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
            <a href={{url("{$id_guest}/data_tamu")}} type="button" class="btn btn-box-tool"><i class="fa fa-arrow-left"></i></a>
           </div>
          </div>
         --}}
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY7-ub1NpIfh_Gu0qEPwjy1OKYXfCY3Yms34km__nZA0uUj005" alt="User profile picture">

          <h3 class="profile-username text-center">{{$tamu->nama_guest}}</h3>

            <p class="text-muted text-center">{{$tamu->jabatan}}</p>

            <ul class="list-group list-group-unbordered">
                
              @if(strlen($tamu->instansi) >= 35 AND strlen($tamu->instansi) <= 60)
              <li class="list-group-item" style="padding-bottom:25px;">
                <b>Instansi</b> <a class="pull-right">{{$tamu->instansi}}</a>
              </li>
              @elseif(strlen($tamu->instansi) >= 61)
              <li class="list-group-item" style="padding-bottom:55px;">
                <b>Instansi</b> <a class="pull-right">{{$tamu->instansi}}</a>
              </li>
              @elseif(strlen($tamu->instansi) <= 34)
              <li class="list-group-item">
                <b>Instansi</b> <a class="pull-right">{{$tamu->instansi}}</a>
              </li>
              @endif
              @if(strlen($tamu->asal) <= 40)
              <li class="list-group-item">
                <b>Asal</b> <a class="pull-right">{{$tamu->asal}}</a>
              </li>
              @elseif(strlen($tamu->asal) >= 41 AND strlen($tamu->asal) <= 45)
              <li class="list-group-item" style="padding-bottom:25px;">
                <b>Asal</b> <a class="pull-right">{{$tamu->asal}}</a>
              </li>
              @elseif(strlen($tamu->asal) >= 46)
              <li class="list-group-item" style="padding-bottom:45px;">
                <b>Asal</b> <a class="pull-right">{{$tamu->asal}}</a>
              </li>
              @endif
              <li class="list-group-item">
                <b>E-mail</b> <a class="pull-right">{{$tamu->email}}</a>
              </li>
              <li class="list-group-item">
                <b>Telp</b> <a class="pull-right">{{$tamu->no_telepon}}</a>
              </li>
              <li class="list-group-item">
                <b>Jenis Kelamin</b> <a class="pull-right">{{$tamu->jk}}</a>
              </li>
            </ul>
            <p class="text-center">
                <a href="#"><img src="{{url('LTE/email.png')}}"></a> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="#"><img src="{{url('LTE/wa.png')}}"></a>
            </p>
        </div>
      </div>
  </section>
</div>
@endsection

@push('add_js')

@endpush
