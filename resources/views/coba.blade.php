			@foreach($keranjang as $k)
			<li>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td class="text-center"><a href="#"><img style="width: 90px" class="img-thumbnail" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" src="{{URL::asset('product/'.$k->product->gambar)}}"></a></td>
                    <td class="text-left" ><a href="#">{{$k->product->nama_brg}}</a></td>
                    <td class="text-right">{{$k->qty}}</td>
                    <td class="text-right">{{$k->subtotal}}</td>
                    <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button"><i class="fa fa-times"></i></button></td>
                  </tr>
                </tbody>
              </table>
            </li>
            @endforeach
            <li>
              <div>
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td class="text-right"><strong>Total</strong></td>
                      <td class="text-right">Rp. {{number_format($jumlah)}}</td>
                    </tr>
                  </tbody>
                </table>
                <p class="text-right"> <span class="btn-viewcart"><a href="{{url('/member/cart')}}"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a></span> <span class="btn-checkout"><a href="checkout.html"><strong><i class="fa fa-share"></i> Checkout</strong></a></span> </p>
              </div>
            </li>