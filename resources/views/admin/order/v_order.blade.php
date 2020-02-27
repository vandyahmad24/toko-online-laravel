@extends('layouts/admin')

@section('title', 'Table Orders')
@section('content')


<style>
    .form-edit{
      display: inline-block;
    }
    .form-delete{
      display: inline-block;
    }
</style>
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
                         <table class="table table-bordered nowrap">
                          <thead>
                            <tr>
                              <th>Nomer</th>
                              <th>Nama Pemesan</th>
                              <th>Nama Penerima</th>
                              <th>Alamat Pengiriman</th>
                              <th>No Penerima</th>
                              <th>Status</th>
                              <th>Rubah Status</th>
                              <th>Detail Belanja</th>
                              </tr>
                          </thead>
                          <?php $no = 0;?>
                          @foreach($lihat_data as $l)
                          <?php $no++ ;?>
                          <tbody>
                            <tr>
                              <td>{{ $no }}</td>
                              <td>{{$l->user->name}}</td>
                              <td>{{$l->nama_penerima}}</td>
                              <td>{{$l->alamat}}</td>
                              <td>{{$l->no_penerima}}</td>
                               <td>
                                <form action="/dashboard/order/status/{{$l->id}}" method="post">
                                  {{ csrf_field() }}
                                 <select class="custom-select @if($l->status == 'pending') label label-warning @endif @if($l->status == 'konfirmasi') label label-success @endif @if($l->status == 'dikirim') label label-primary @endif " id="status" name="status">
                                <option class="custom-select label label-warning" value="pending" @if($l->status == 'pending') selected @endif>Pending</option>
                                <option class="custom-select label label-success" value="konfirmasi" @if($l->status == 'konfirmasi') selected @endif>Konfirmasi</option>
                                <option class="custom-select label label-primary" value="dikirim" @if($l->status == 'dikirim') selected @endif>Dikirim</option>
                              </select>
                             
                               </td>
                              <td>
                                  <button type="submit" class="btn btn-primary">Rubah Status</button>
                              </form>
                              </td>
                              <td>
                                <a href="/dashboard/order/detail/{{$l->id}}" class="btn btn-success form-edit">Detail Order</a>
                              </td>
                               @endforeach
                             </tr>
                           </tbody>
                        </table>                       
                     </div>
                 </div>
                 </div>
               <!-- End responsive Table-->               
               
			  
@endsection