@extends('layouts/template')
@section('title', 'Halaman Member')
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
      <form class="form-horizontal" enctype="multipart/form-data" method="post" action="register.html">
        <fieldset id="account">
          <legend>Masukkan Data Pribadimu</legend>
          <div class="form-group required">
            <label for="input-firstname" class="col-sm-2 control-label">Nama Lengkap</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="" name="firstname">
            </div>
          </div>
          <div class="form-group required">
            <label for="input-telephone" class="col-sm-2 control-label">Telephone</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="input-telephone" placeholder="Telephone" value="" name="telephone">
            </div>
          </div>
          <div class="form-group required">
            <label for="input-firstname" class="col-sm-2 control-label">Alamat </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="" name="firstname">
            </div>
          </div>
          </div>
        </fieldset>
        <div class="buttons">
          <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Privacy Policy</b></a>
            <input type="checkbox" value="1" name="agree">
            &nbsp;
            <input type="submit" class="btn btn-primary" value="Continue">
          </div>
        </div>
      </form>
    </div>

  </div>
</div>
@endsection