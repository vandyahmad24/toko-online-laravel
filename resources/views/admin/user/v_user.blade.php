@extends('layouts/admin')

@section('title', 'Table User')
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
       <a href="/dashboard/tambah_user" class="btn btn-primary">Tambah Data</a> <br> <br>

                         <table class="table table-bordered nowrap">
                          <thead>
                            <tr>
                              <th>Nomer</th>
                              <th>Nama User</th>
                              <th>Email</th>
                              <th>Level</th>
                              <th scope="col">Action</th>
                              </tr>
                          </thead>
                          <?php $no = 0;?>
                          @foreach($lihat_data as $l)
                          <?php $no++ ;?>
                          <tbody>
                            <tr>
                              <td>{{ $no }}</td>
                              <td>{{$l->name}}</td>
                              <td>{{$l->email}}</td>
                              <td>{{$l->level}}</td>
                              <td>
                                <a href="/dashboard/lihat_user/edit/{{$l->id}}" class="btn btn-success form-edit"> Edit</a>
                                <a href="/dashboard/delete/{{$l->id}}" class="btn btn-danger form-edit"> Delete</a>
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