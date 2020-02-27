@extends('layouts/template')
@section('title', 'Halaman Order')
@section('content')
<br>
<br>
<div class="container">
  <div class="row">
 <div class="col-sm-12" id="content">
 	@foreach($data as $d)
 	 @endforeach
      <h1>Hay, {{$d->user->name}}, Berikut  detail pembelanjaan anda </h1>
      	
      <table class="table table-bordered">
            <div class="table-responsive">
            			<tr>
            				<td>No</td>
            				<td>Nama Product</td>
            				<td>Harga Product</td>
            				<td>Total Pembelian</td>
            				<td>Harga Pembelian </td>

            			</tr>
            			@foreach($data as $e)
            			<tr>
            				<td>{{$loop->iteration}}</td>
            				<td>{{$e->product->nama_brg}}</td>
            				<td>Rp {{number_format($e->product->harga,'0','','.')}}</td>
            				<td>{{$e->qty}}</td>
            				<td>Rp. {{number_format($e->subtotal,'0','','.')}}</td>
            			</tr>
            			 @endforeach
                         <tr>
                             <td colspan="4">Ongkir</td>
                            <td><b>Rp. {{number_format($e->order->ongkir,'0','','.')}}</b></td>
                         </tr>
            			 <tr>
            				<td colspan="4">Total Pembayaran</td>
            				<td><b>Rp. {{number_format($e->order->total,'0','','.')}}</b></td>
            			</tr>
            

            	</div>
        	
        </table>
    </div>
  
</div>
</div>
@endsection