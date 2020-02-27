@extends('layouts/admin')

@section('title', 'Edit Kategori')
@section('content')
 <div class="row">
                 <div class="col-md-12">
                   <div class="white-box">
                     <h2 class="header-title">Edit Kategori Product </h2>
                       <form action="/lihat_kategori/edit/{{$data->id}}" method="post" autocomplete="off">
                        @csrf
                          <div class="form-group">
                            <label class="col-md-2 control-label">Nama Kategori</label>
                            <div class="col-md-10">
                              <input type="text" name="nama_ktg" id="nama_ktg" class="form-control" value="{{$data->nama_ktg}}">
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