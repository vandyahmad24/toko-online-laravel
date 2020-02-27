@extends('layouts/admin')
@section('title', 'Table Kategori')
@section('content')
<style>
.form-edit {
    display: inline-block;
}

.form-delete {
    display: inline-block;
}
</style>
<!--Start Page Title-->
<!--End Page Title-->
<!-- Start responsive Table-->
<div class="col-md-12">
    <div class="white-box">
        <h2 class="header-title"> @yield('title')</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahkategori">
                Tambah Data
            </button>
            <br>
            <br>
            <!-- Modal -->
            <div class="modal fade" id="tambahkategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/dashboard/tambah_kategori/tambah/" method="post" autocomplete="off">
                                <div class="form-group" id="ini">
                                    <label class="col-md-2 control-label">Nama Kategori</label>
                                    <div class="col-md-10" id="anak">
                                        <input type="text" name="nama_ktg" id="nama_ktg" class="form-control">
                                        @error('nama_ktg')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                {{ csrf_field() }}
                                <button type="button" id="tambahkeranjang" class="btn btn-primary">Tambah
                                    Kategori</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <script>
                                $(document).ready(function() 
                                {
                                    $("#tambahkeranjang").click(function() 
                                    {
                                      var token = $(this).prev().val();
                                      var nama_ktg = $(this).siblings('#ini').children('#anak').find('#nama_ktg').val();
                                          $.post("{{url('/dashboard/tambah_kategori/tambah')}}",{_token:token,nama_ktg:nama_ktg},function(data) 
                                          {
                                              var obj = jQuery.parseJSON(JSON.stringify(data));
                                               alert(obj.nama+' berhasil di tambah');
                                               $("#tabelkategori").load("{{url('dashboard/loadkategori')}}"); 
                                          });
                                    });
                                });
                                </script>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
              $(document).ready(function()
              {
                $("#tabelkategori").load("{{url('dashboard/loadkategori')}}"); 
              });
            </script>
            <div id="tabelkategori">
              loading...
            </div>
        </div>
    
<!-- End responsive Table-->
@endsection