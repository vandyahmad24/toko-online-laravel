@extends('layouts/template')
@section('title', 'Halaman Cart')
@section('content')
<br>
<br>

<div class="container">
  <div class="row">
    <div id="column-left" class="col-sm-3 hidden-xs column-left">
      <div class="Categories left-sidebar-widget">
        <div class="columnblock-title">Top Categories</div>
        <div class="category_block">
          <ul class="box-category treeview-list treeview">
            <li><a href="#" class="activSub">Desktops</a>
              <ul>
                <li><a href="#">PC</a></li>
                <li><a href="#">MAC</a></li>
              </ul>
            </li>
            <li><a href="#" class="activSub">Laptops &amp; Notebooks</a>
              <ul>
                <li><a href="#">Macs</a></li>
                <li><a href="#">Windows</a></li>
              </ul>
            </li>
            <li><a href="#" class="activSub">Components</a>
              <ul>
                <li><a href="#">Mice and Trackballs</a></li>
                <li><a href="#" class="activSub" >Monitors</a>
                  <ul>
                    <li><a href="#"  >test 1</a></li>
                    <li><a href="#"  >test 2</a></li>
                  </ul>
                </li>
                <li><a href="#">Windows</a></li>
              </ul>
            </li>
            <li><a href="#">Tablets</a></li>
            <li><a href="#">Software</a></li>
            <li><a href="#">Phones & PDAs</a></li>
            <li><a href="#">Cameras</a></li>
            <li><a href="#">MP3 Players</a></li>
          </ul>
        </div>
      </div>
      <div class="special left-sidebar-widget">
        <div class="columnblock-title"></div>
        
      </div>
    </div>
    <div class="col-sm-9" id="content">
      <form enctype="multipart/form-data" method="post" action="#">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
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
              <tr>
              	<td class="text-center">No</td>
                <td class="text-center">Gambar</td>
                <td class="text-left">Nama Product</td>
                <td class="text-left">Jumlah</td>
                <td class="text-right">Harga</td>
                <td class="text-right">Total</td>
                <td class="text-center">Aksi</td>
              </tr>
            </thead>
            <tbody>
            	@foreach($keranjang as $k)
              <tr>
              	<td class="text-center">{{$loop->iteration}}</td>
                <td class="text-center"><img src="{{URL::asset('product/'.$k->product->gambar)}}" width="100px" height="100px"></td>
                <td class="text-left">{{$k->product->nama_brg}}</td>
                <td class="text-left">{{$k->qty}}</td>
                <td class="text-right">Rp {{ number_format($k->product->harga,'0','','.')}}</td>
                <td class="text-right">Rp {{ number_format($k->subtotal,'0','','.') }}</td>
                 <td class="text-center">
                <a href="/member/delete/{{$k->id}}" class="btn btn-danger form-edit"> Delete</a>
                </td>
	              </tr>
            </tbody>
            @endforeach
          </table>
        </div>
      </form>
      <h2>{{$k->user->name}} , Silahkan Cek kembali Pembelanjaan anda</h2>
      <p>Jika anda memliki kupoon diskon silahkan masukkan kupon tersebut.</p>
      <div id="accordion" class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a class="accordion-toggle " aria-expanded="true" data-parent="#accordion"  data-toggle="collapse"  href="#collapse-coupon">Use Coupon Code <i class="fa fa-caret-down"></i></a></h4>
          </div>
          <div class="panel-collapse collapse in" id="collapse-coupon">
            <div class="panel-body">
              <label for="input-coupon" class="col-sm-4 control-label">Enter your coupon here</label>
              <div class="input-group">
                <input type="text" class="form-control" id="input-coupon" placeholder="Enter your coupon here" value="" name="coupon">
                <span class="input-group-btn">
                <input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-coupon" value="Apply Coupon">
                </span></div>
            </div>
          </div>
        </div>
       
        
      </div>
      <br>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-8">
          <table class="table table-bordered">
            <tbody>
              <tr>
              
                <td class="text-right"><strong>Harga Total</strong></td>
                <td class="text-right">Rp. {{ number_format($jumlah,'0','','.')}}</td>

              </tr>
              <tr>
                <td class="text-right"><strong>Diskon:</strong></td>
                <td class="text-right">$2.00</td>
              </tr>
              <tr>
                <td class="text-right"><strong>VAT (20%):</strong></td>
                <td class="text-right">$42.00</td>
              </tr>
              <tr>
                <td class="text-right"><strong>Total:</strong></td>
                <td class="text-right">$254.00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="buttons">
        <div class="pull-left"><a class="btn btn-default" href="{{url('/')}}">Continue Shopping</a></div>
        <div class="pull-right"><a class="btn btn-primary" href="{{url('/member/order')}}">Checkout</a></div>
      </div>
    </div>
  </div>
</div>
@endsection