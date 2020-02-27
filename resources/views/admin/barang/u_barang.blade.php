@extends('layouts/admin')

@section('title', 'Tambah Data Barang')
@section('content')
 <div class="row">
                 <div class="col-md-12">
                   <div class="white-box">
                     <h2 class="header-title">@yield('title') </h2>
                       <form action="/dashboard/lihat_barang/edit/{{$product->id}}" method="post" autocomplete="off" enctype="multipart/form-data">
                        {{ csrf_field() }}

                          <div class="form-group">
                            <label class="col-md-2 control-label">Nama Barang</label>
                            <div class="col-md-10">
                              <input type="text" name="nama_brg" id="nama_brg" value="{{$product->nama_brg}}" class="form-control">
                              @error('nama_brg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                          </div>
                           <div class="form-group">
                            <label class="col-md-2 control-label">Deskripsi Barang</label>
                            <div class="col-md-10">
                              <textarea class="form-control" rows="5"  name="deskripsi" id="deskripsi">{{$product->deskripsi}}</textarea>
                              @error('nama_deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">Gambar Barang</label>
                            <div class="col-md-10">
                              <input type="file" name="gambar" id="gambar" class="form-control" value="{{$product->gambar}}">
                              @error('gambar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                          </div>
                           <div class="form-group">
                            <label class="col-md-2 control-label">Harga Barang</label>
                            <div class="col-md-10">
                              <input type="text" name="harga" id="harga" value="{{$product->harga}}" class="form-control">
                              @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                          </div>
                           <div class="form-group">
                            <label class="col-md-2 control-label">Jumlah Stok </label>
                            <div class="col-md-10">
                              <input type="text" name="stok" id="stok" value="{{$product->stok}}" class="form-control">
                              @error('stok')
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
                  
            @endsection