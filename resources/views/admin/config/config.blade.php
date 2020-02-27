@extends('layouts/admin')

@section('title', 'Konfigurasi Toko')
@section('content')
 <div class="row">
                 <div class="col-md-12">
                   <div class="white-box">
                     <h2 class="header-title">@yield('title') </h2>
                     <div class="table-responsive">
                        @if(Session::has("success"))
                  <div class="alert alert-success">
                    {{Session::get('success')}}
                  </div>
                  @endif
                  @if(Session::has("error"))
                  <div class="alert alert-danger">
                    {{Session::get('error')}}
                  </div>
                  @endif
                     @foreach ($lihat_data as $l)
                       <form action="/dashboard/config/update/{{$l->id}}" method="post" autocomplete="off" enctype="multipart/form-data">
                        {{ csrf_field() }}

                          <div class="form-group">
                            <label class="col-md-2 control-label">Nama Toko</label>
                            <div class="col-md-10">
                              <input type="text" name="nama_toko" id="nama_toko" value="{{ old('nama_toko') }}  {{$l->nama_toko}} " class="form-control"> 
                              @error('nama_toko')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                          </div>
                           <div class="form-group">
                            <label class="col-md-2 control-label">Alamat Toko</label>
                            <div class="col-md-10">
                              <textarea class="form-control" rows="5" value="{{ old('alamat') }} {{$l->alamat}}"   name="alamat" id="alamat">{{ old('alamat') }} {{$l->alamat}}</textarea>
                              @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">Footer </label>
                            <div class="col-md-10">
                              <input type="text" name="footer" id="footer" class="form-control" value="{{ old('footer') }} {{$l->footer}}">
                             @error('footer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                          </div>
                           <div class="form-group">
                            <label class="col-md-2 control-label">Kontak Toko</label>
                            <div class="col-md-10">
                              <input type="text" name="kontak" id="kontak" value="{{ old('kontak') }} {{$l->kontak}}" class="form-control">
                              @error('kontak')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                          </div>
                           <div class="form-group">
                            <label class="col-md-2 control-label">Facebook Toko </label>
                            <div class="col-md-10">
                              <input type="text" name="facebook" id="facebook" value="{{ old('facebook') }} {{$l->facebook}}" class="form-control">
                              @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">Instagram Toko </label>
                            <div class="col-md-10">
                              <input type="text" name="instagram" id="instagram" value="{{ old('instagram') }} {{$l->instagram}}" class="form-control">
                              @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">No Rek </label>
                            <div class="col-md-10">
                              <input type="text" name="no_rek" id="no_rek" value="{{ old('no_rek') }} {{$l->no_rek}}" class="form-control">
                              @error('no_rek')
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
                        @endforeach
                      </div>
                    </div>
                  </div>

            @endsection