@extends('layouts.master')

@push('add_css')
<!-- DataTables -->
<link rel="stylesheet" href="{{url('LTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endpush

@section('title')
<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header"><br>
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
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Foto</th>
              <th>Nama</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <ul class="products-list product-list-in-box">
                <tr>
                    <td>
                      
                    <div class="product-img">
                      <img src="http://css-registration.banjarmasinkota.go.id/upload/foto/{{$item->foto}}" class="img-circle" width="50px" alt="User Image">
                    </div>
                    </td>
                    <td>
                    <div class="product-info">
                        <a href={{url("home/{$id_guest}/data_tamu/{$item->id_guest}")}} class="product-title">{{$item->nama_guest}}</a><br />
                          <span class="product-description">
                                {{$item->instansi}}
                          </span>
                          <span class="product-description">
                                {{$item->kabkota->nama_kab_kota}}
                          </span>
                    </div>
                    </td>
                </tr>
                </ul>
                @endforeach
            </tbody>
          </table>
        </div>
              <!-- /.box-body -->
        <div class="box-body">
        </div>
      </div>
  </section>
</div>
@endsection

@push('add_js')
<!-- page script -->

<!-- DataTables -->
<script src="{{url('LTE/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('LTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script>
  $.fn.DataTable.ext.pager.numbers_length = 4;
    $(function () {
      $('#example1').DataTable({
        'lengthChange': false,
        "oLanguage": {
          "sSearch": "Cari Nama :"
          }
      })
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endpush
