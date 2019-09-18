@extends('layouts.master')

@push('add_css')
<!-- Select2 -->
<link rel="stylesheet" href="{{url('LTE/bower_components/select2/dist/css/select2.min.css')}}">
@endpush

@section('title')
<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header"><br>
        <a href="#" class="navbar-brand"><b>EDIT PROFILE</b></a>
      </div>
    </div>
  </nav>
</header>
@endsection

@section('content')
<div class="container">
  <section class="content"> 

    
    <div class="box">
    <form role="form" method="post" action="{{route('updatedata', $id_guest)}}" enctype="multipart/form-data">
      @csrf
        <div class="box-body">
          <div class="form-group">
            <label>Nama</label>
          <input type="text" class="form-control" name="nama_guest" value="{{$tamu->nama_guest}}">
          </div>
          <div class="form-group">
            <label>Jabatan</label>
            <input type="text" class="form-control" name="jabatan" value="{{$tamu->jabatan}}">
          </div>
          <div class="form-group">
            <label>Instansi</label>
            <input type="text" class="form-control" name="instansi" value="{{$tamu->instansi}}">
          </div>
          <div class="form-group">  
            <label>Asal</label>
            <select class="form-control select2" style="width: 100%;" name="asal" >
              @foreach ($kab as $item)
                <option value="{{$item->id_kab_kota}}">{{$item->nama_kab_kota}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" value="{{$tamu->email}}">
          </div>
          <div class="form-group">
            <label>Telp</label>
            <input type="text" class="form-control" name="no_telepon" value="{{$tamu->no_telepon}}">
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jk">
                @if($tamu->jk == 'Pria')
                    <option value="Pria" selected>Pria</option>
                    <option value="Wanita">Wanita</option>
                @else
                <option value="Pria">Pria</option>
                <option value="Wanita" selected>Wanita</option>
                @endif
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Gambar</label>
            <input type="file" name="file">

            <p class="help-block">Biarkan kosong jika gambar tidak di ganti</p>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </section>
</div>
@endsection

@push('add_js')
<!-- Select2 -->
<script src="{{url('LTE/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
    })
</script>
@endpush
