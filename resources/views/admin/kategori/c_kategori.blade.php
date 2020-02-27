@extends('layouts/admin')

@section('title', 'Tambah Kategori')
@section('content')
<div class="modal fade" id="tambahkeranjang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="row">
                 <div class="col-md-12">
                   <div class="white-box">
                     <h2 class="header-title">Tambah Kategori Product </h2>
                       <form action="/dashboard/tambah_kategori/tambah/" method="post" autocomplete="off">
                        {{ csrf_field() }}
                          <div class="form-group">
                            <label class="col-md-2 control-label">Nama Kategori</label>
                            <div class="col-md-10">
                              <input type="text" name="nama_ktg" id="nama_ktg" class="form-control">
                              @error('nama_ktg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                          </div>
                           <div class="form-group">
                            <label class="col-md-2 control-label"></label>
                            <div class="col-md-10">
                               <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                          </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
          </div>
  </div>
            @endsection