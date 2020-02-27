@extends('layouts/admin')

@section('title', 'Tambah User')
@section('content')
 <div class="row">
                 <div class="col-md-12">
                   <div class="white-box">
                     <h2 class="header-title">Tambah User </h2>
                       <form action="/dashboard/tambah_user/tambah/" method="post" autocomplete="off">
                        {{ csrf_field() }}
                          <div class="form-group">
                            <label class="col-md-2 control-label">Nama User</label>
                            <div class="col-md-10">
                              <input type="text" name="name" id="name" class="form-control" required="">
                              @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">Email</label>
                            <div class="col-md-10">
                               <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control">
                               @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-2 control-label">Passowrd</label>
                            <div class="col-md-10">
                              <input id="password" type="password" class="form-control" name="password" required>
                              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                          </div>
                          <div class="form-group">
                            <label for="password-confirm" class="col-sm-2 control-label">Konfirmasi Password</label>
                            <div class="col-md-10">
                           <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                             </div>
                          </div>
                          
            
                          <div class="form-group">
                            <label class="col-md-2 control-label">Level</label>
                            <div class="col-md-10">
                               
								  <select class="custom-select form-control" id="level" name="level">
								    <option value="admin">Admin</option>
								    <option value="member">Member</option>
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