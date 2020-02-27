@extends('layouts/admin')

@section('title', 'Tambah Data Barang')
@section('content')
 <div class="row">
                 <div class="col-md-12">
                   <div class="white-box">
                     <h2 class="header-title">@yield('title') </h2>
                       <form action="/dashboard/tambah_barang/tambah" method="post" autocomplete="off" enctype="multipart/form-data">
                        {{ csrf_field() }}

                          <div class="form-group">
                            <label class="col-md-2 control-label">Nama Barang</label>
                            <div class="col-md-10">
                              <input type="text" name="nama_brg" id="nama_brg" value="{{ old('nama_brg') }}" class="form-control">
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
                              <textarea class="form-control" rows="5"  name="deskripsi" id="deskripsi">{{ old('deskripsi') }}</textarea>
                              @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">Gambar Barang</label>
                            <div class="col-md-10">
                              <input type="file" name="gambar" id="gambar" class="form-control">
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
                              <input type="text" name="harga" id="harga" value="{{ old('harga') }}" class="form-control">
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
                              <input type="text" name="stok" id="stok" value="{{ old('stok') }}" class="form-control">
                              @error('stok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                          </div>
                           <div class="form-group">
                            <label class="col-md-2 control-label">Kategori</label>
                            <div class="col-md-10"> 
                                <select class="custom-select form-control" id="kategori_id" name="kategori_id">
                                  @foreach($kategori as $k)
                                  <option value="{{$k->id}}">{{$k->nama_ktg}}</option>
                                 @endforeach
                                </select>
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