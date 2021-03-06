<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
</head>
<body> 
    <form method="POST" action="{{route('storeupdate', $data->id_guest)}}">
        @csrf
        nama
        <input type=text name='nama_guest' value="{{$data->nama_guest}}"><br>
        Asal
        <select class="form-control select2 js-example-basic-multiple" name="asal">
            @foreach ($kota as $item)
                @if($item->id_kab_kota == $data->asal)
                <option value="{{$item->id_kab_kota}}" selected>{{$item->nama_kab_kota}}</option>
                @else
                <option value="{{$item->id_kab_kota}}">{{$item->nama_kab_kota}}</option>
                @endif
            @endforeach
        </select><br>
        Instansi
        <input type=text name='instansi' value="{{$data->instansi}}"><br>
        jabatan
        <input type=text name='jabatan' value="{{$data->jabatan}}"><br>
        Jenis Kelamin
        <input type=text name='jk' value="{{$data->jk}}"><br>
        Email
        <input type=text name='email' value="{{$data->email}}"><br>
        No Telepon
        <input type=text name='no_telepon' value="{{$data->no_telepon}}"><br>
        Datang
        <input type=text name='datang' value="Datang"><br>
        <button type='submit'>SIMPAN</button>
        </form>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script>
            @if(Session::has('message'))
              var type = "{{ Session::get('alert-type', 'info') }}";
              switch(type){
                  case 'info':
                      toastr.info("{{ Session::get('message') }}");
                      break;
                  
                  case 'warning':
                      toastr.warning("{{ Session::get('message') }}");
                      break;
          
                  case 'error':
                      toastr.error("{{ Session::get('message') }}");
                      break;
                      
                  case 'success':
                      toastr.success("{{ Session::get('message') }}");
                      break;
          
              }
            @endif
        </script>
        
</body>
</html>