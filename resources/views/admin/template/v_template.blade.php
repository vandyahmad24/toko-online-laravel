@extends('layouts/admin')

@section('title', 'Table Manajemen Template')
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
                                  <th>Nama Template</th>
                                  <th>Folder</th>
                                  <th>Status</th>
                                  <th>Action</th>
                             
                              </tr>
                          </thead>
                         
                          <tbody>
                                @foreach ( $templates as $template )
                                <tr>
                                  <td>1</td>
                                    <td>{{$template->nama_template}}</td>
                                    <td>{{$template->folder}}</td>
                                    <td>@if ( $template->selected == 1) Aktif @else Mati @endif</td>
                                    <td>
                                       <span style="display: none">{{$active = $template->selected}}</span>
                                      <form action="/dashboard/aksi/{{$template->id}}" method="post">
                                        @csrf
                                        
                                            <input type="hidden" name="selected" value="{{$active}}">
                                            @if($active == '1')
                                            <button class="btn btn-danger">Matikan</button>
                                            @else
                                            <button class="btn btn-success">Aktifkan</button>
                                            @endif
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                           </tbody>
                        </table>      
                        <!-- s -->             
                     </div>
                 </div>
                 </div>
               <!-- End responsive Table-->               
               
			   
@endsection