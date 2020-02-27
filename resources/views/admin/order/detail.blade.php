@extends('layouts/admin')

@section('title', 'Halaman Detail')
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
                    <h2 class="header-title"> Tabel Detail Order</h2>
                       <table class="table table table-hover m-0">
                       	   <tr>
						    <td>Nama :</td>
						    <td>{{$data->user->name}}</td>
						  </tr>
						  <tr>
						    <td>Alamat :</td>
						    <td>{{$data->alamat}}</td>
						  </tr>
						  <tr>
						    <td>Nama Penerima :</td>
						    <td>{{$data->nama_penerima}}</td>
						  </tr>
                          <tr>
						    <td>No Hp Penerima :</td>
						    <td>{{$data->no_penerima}}</td>
						  </tr>
						  <tr>
						    <td>Status :</td>
						    <td>{{$data->status}}</td>
						  </tr>
                             
                        </table>            
                     </div>
                     <div class="white-box">
                    <h2 class="header-title">  Tabel Product</h2>
                         <table class="table table-bordered">

						  <tr>
						    <th>Nama Product</th>
						    <th class="text-center">Gambar</th>
						    <th>Qty</th>
						    <th>Harga</th>
						  </tr>
						   @foreach($detail as $d)
						  <tr>
						    <td>{{$d->product->nama_brg}}</td>
						    <td class="text-center"><img src="{{URL::asset('product/'.$d->product->gambar)}}" width="100px" height="100px"></td>
						    <td>{{$d->qty}}</td>
						    <td class="text-right">Rp {{number_format($d->product->harga,'0','','.')}}</td>
						  </tr>
						  @endforeach   
						  <tr>
						  	<th>Total</th>
						  	<th colspan="3" class="text-right">Rp. {{number_format($total+$data->ongkir,'0','','.')}}</th>
						  </tr>
						                          
                        </table>            
                     </div>
                 </div>
                 </div>
               <!-- End responsive Table-->   

                              
               
			   
@endsection