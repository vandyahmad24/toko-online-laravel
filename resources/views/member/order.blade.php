@extends('layouts/template')
@section('title', 'Halaman Order')
@section('content')
<br>
<br>
<div class="container">
  <div class="row">
 <div class="col-sm-8" id="content">
      <p>Isi data dengan lengkap untuk meneruskan pembelanjaan</a>.</p>
       <form  class="form-horizontal"  action="/member/order/store" method="post" autocomplete="off">
                        {{ csrf_field() }}
        <fieldset id="account">
          <legend>Informasi Pribadi</legend>
          <div class="form-group required">
            <label for="nama_pembeli" class="col-sm-2 control-label">Nama Pembeli</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-firstname" placeholder="{{ Auth::user()->name }}" readonly>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-lastname" class="col-sm-2 control-label">Nama Penerima</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-lastname" placeholder="Nama Penerima" name="nama_penerima">
            </div>
          </div>
          <div class="form-group required">
            <label for="input-email" class="col-sm-2 control-label">Alamat Penerima</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="" name="alamat" placeholder="alamat">
            </div>
          </div>
          <div class="form-group required">
            <label for="no_penerima" class="col-sm-2 control-label">No Penerima Telephone</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="no_penerima" name="no_penerima">
            </div>
          </div>
          <legend>Data Biaya</legend>
          <div class="form-group required">
            <label for="ongkir" class="col-sm-2 control-label">Ongkir</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="ongkir" name="ongkir" >
              
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
    <div class="col-sm-4" id="content">
    	<br>
    	<p>Berikut Merupakan Daftar Belanjaan Anda</p>
    	<table class="table table-bordered">
    		@foreach($keranjang as $k)
    		<tr>
    			<th>No</th>
    			<th>Nama Barang</th>
    			<th>Jumlah</th>
    			<th>Harga</th>

    		</tr>
    		<tr>
    			<td>{{$loop->iteration}}</td>
    			<td>{{$k->product->nama_brg}}</td>
                <td>{{$k->qty}}</td>
                <td>{{$k->product->harga}}</td>
                
    		</tr>
    		@endforeach
    	</table>
    </div>
</div>
</div>
@endsection