@extends('layouts/admin')

@section('title', 'Table Barang')
@section('content')

          <!--Start Page Title-->
              <!--End Page Title-->          
               <!-- Start responsive Table-->
                <div class="col-md-12">
                 <div class="white-box">
                    <h2 class="header-title">  @yield('title')</h2>
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
                
                <a href="/kategori/addkategori" class="btn btn-primary">Tambah Data</a> <br> <br>
                         <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Nomer</th>
                              <th>Nama Barang</th>
                              <th width="300px">Deskripsi</th>
                              <th>Gambar</th>
                              <th>Harga</th>
                              <th>Stok</th>
                              <th>Kategori</th>
                              <th>Action</th>
                              </tr>
                          </thead>
                          <?php $no = 0;?>
                          @foreach($lihat_data as $l)
                          <?php $no++ ;?>
                          <tbody>
                            <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{$l->nama_brg}}</td>
                              <td>{{$l->deskripsi}}</td>
                              <td><img src="{{URL::asset('product/'.$l->gambar)}}" width="100px" height="100px"></td>
                              <td>{{$l->harga}}</td>
                              <td>{{$l->stok}}</td>
                              <td>{{$l->kategori->id}}</td>
                              <td>
                                
                              <a href="/dashboard/lihat_barang/edit/{{$l->id}}" class="btn btn-success form-edit inline-block"> Edit</a>
                               <a href="/dashboard/delete/{{$l->id}}" class="btn btn-danger form-danger inline-block"> Hapus</a>
                               </td>
                               @endforeach
                             </tr>
                           </tbody>
                        </table>
                        {{ $lihat_data->links() }}
                       
    
                     </div>
                 </div>
                 </div>
               <!-- End responsive Table-->               
               
			   
@endsection