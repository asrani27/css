@extends('layouts.master')

@push('add_css')

@endpush

@section('title')
<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header"><br>
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
            <img class="profile-user-img img-responsive" src="http://css-registration.banjarmasinkota.go.id/upload/foto/{{$tamu->foto}}" alt="User profile picture">

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
              @if(strlen($tamu->kabkota->nama_kab_kota) <= 40)
              <li class="list-group-item">
                <b>Asal</b> <a class="pull-right">{{$tamu->kabkota->nama_kab_kota}}</a>
              </li>
              @elseif(strlen($tamu->kabkota->nama_kab_kota) >= 41 AND strlen($tamu->kabkota->nama_kab_kota) <= 45)
              <li class="list-group-item" style="padding-bottom:25px;">
                <b>Asal</b> <a class="pull-right">{{$tamu->kabkota->nama_kab_kota}}</a>
              </li>
              @elseif(strlen($tamu->kabkota->nama_kab_kota) >= 46)
              <li class="list-group-item" style="padding-bottom:45px;">
                <b>Asal</b> <a class="pull-right">{{$tamu->kabkota->nama_kab_kota}}</a>
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
                <a href="https://mail.google.com/mail/"><img src="{{url('LTE/email.png')}}"></a> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://wa.me/62{{$tamu->whatsapp}}"><img src="{{url('LTE/wa.png')}}"></a>
           </p>
        </div>
      </div>
  </section>
</div>
@endsection

@push('add_js')

@endpush
