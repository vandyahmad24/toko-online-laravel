
@extends('layouts/template')
@section('title', 'Halaman Register')

@section('content')
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-3 hidden-xs column-left" id="column-left">
      <div class="Categories left-sidebar-widget">
        <div class="columnblock-title">Account</div>
        <div class="category_block">
          <ul class="box-category">
            <li><a href="login.html">Login</a></li>
            <li><a href="register.html">Register</a></li>
            <li><a href="forgetpassword.html">Forgotten Password</a></li>
            <li><a href="#">My Account</a></li>
            <li><a href="#">Address Book</a></li>
            <li><a href="#">Wish List</a></li>
            <li><a href="#">Order History</a></li>
            <li><a href="#">Downloads</a></li>
            <li><a href="#">Reward Points</a></li>
            <li><a href="#">Transactions</a></li>
            <li><a href="#">Returns</a></li>
            <li><a href="#">Newsletter</a></li>
            <li><a href="#">Recurring payments</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-9" id="content">
      <p>If you already have an account with us, please login at the <a href="login.html">login page</a>.</p>
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <fieldset id="account">
         <input type="hidden" name="level" value={{'member'}}>
          <legend>{{ __('Register') }}</legend>
          <div class="form-group required">
            <label for="name" class="col-sm-2 control-label">Nama Anda</label>
            <div class="col-sm-10">
               <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
          </div>
          <div class="form-group required">
            <label for="email" class="col-sm-2 control-label">{{ __('E-Mail Address') }}</label>
            <div class="col-sm-10">
            
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                     </span>
                 @enderror
            </div>
          </div>
          <div class="form-group required">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
          </div>
          <div class="form-group required">
            <label for="password-confirm" class="col-sm-2 control-label">Konfirmasi Password</label>
            <div class="col-sm-10">
             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
          </div>
        </fieldset>
        <div class="buttons">
          <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Privacy Policy</b></a>
            <input type="checkbox" value="1" name="agree">
            <input type="hidden" id="member" name="member" value="member"/>
            &nbsp;
            <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
            </button>
          </div>
        </div>
      </form>
    </div>

  </div>
</div>
@endsection