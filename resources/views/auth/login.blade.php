@extends('layouts/template')
@section('title', 'Halaman Login')

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
      <div class="row">
        <div class="col-sm-6">
          <h2>New Customer</h2>
          <p>Checkout Options:</p>
          <div class="radio">
            <label>
              <input type="radio" name="account" value="register" checked="checked">
              Register Account</label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="account" value="guest">
              Guest Checkout</label>
          </div>
          <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
          <input type="button" value="Continue" id="button-account" data-loading-text="Loading..." class="btn btn-primary">
        </div>
        <div class="col-sm-6">
          <h2>Returning Customer</h2>
          <p>I am a returning customer</p>
           <form method="POST" action="{{ route('login') }}">
             @csrf
          <div class="form-group">
            <label class="control-label" for="input-email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
             @error('email')
                <span class="invalid-feedback" role="alert">
                          <strong color="red">{{ $message }}</strong>
                </span>
              @enderror
          </div>
          <div class="form-group">
            <label class="control-label" for="input-password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
             @error('password')
                   <span class="invalid-feedback" role="alert">
                      <strong color="green">{{ $message }}</strong>
                 </span>
             @enderror
        </div>

        <div class="form-check">
         <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
             {{ __('Remember Me') }}
         </label>
         </div>
         <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                  @endif
              
          </form>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection