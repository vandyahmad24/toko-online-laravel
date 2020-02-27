@extends('layouts/template')

@section('title', 'Book Store')
@section('content')
<div class="mainbanner">
  <div id="main-banner" class="owl-carousel home-slider">
    <div class="item"> <a href="#"><img src="frontend/image/banners/Main-Banner1.jpg" alt="main-banner1" class="img-responsive" /></a> </div>
    <div class="item"> <a href="#"><img src="frontend/image/banners/Main-Banner2.jpg" alt="main-banner2" class="img-responsive" /></a> </div>
    <div class="item"> <a href="#"><img src="frontend/image/banners/Main-Banner3.jpg" alt="main-banner3" class="img-responsive" /></a> </div>
  </div>
</div>
<div id="center">
  <div class="container">
    <div class="row">
      <div class="content col-sm-12">
        <div class="customtab">
          <h3 class="productblock-title">For Your Best Look</h3>
           <div id="tabs" class="customtab-wrapper">
            <ul class='customtab-inner'>
              <li class='tab'><a href="#tab-furnitur">Popular</a></li>
              <li class='tab'><a href="#tab-livin">Best Sellers</a></li>
              <li class='tab'><a href="#tab-kitche">Specials</a></li>
              <li class='tab'><a href="#tab-outdoo">New product</a></li>
            </ul>
          </div>
        </div>
        <!-- tab-furniture-->
        <div id="tab-furnitur" class="tab-content">
          <div class="row"> 
            <script type="text/javascript">
                $(document).ready(function()
                {
                    $(".tambahkeranjang").click(function()
                    {  
                        var token = $(this).prev().prev().val();
                        var product = $(this).prev().val();      
                          $.post("{{url('/member/tambah/cart/')}}",{product:product,_token:token},function(data)
                          {
                            var obj = jQuery.parseJSON(JSON.stringify(data));
                           
                              if (obj.status==1){
                                  alert(obj.product+' berhasil di tambah');
                              }else{
                                  alert('gagal');
                              }
                          });
                        return false;
                    });
                });
            </script>

             @foreach ($data as $d)
            <form id="keranjang" action="/member/tambah/cart" method="post" autocomplete="off">
              
             
              <input type="hidden" class="" name="qty" value="1">
            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="item">
                <div class="product-thumb">
                 <div class="image product-imageblock"> <a href="product.html"> 
                    <img src="{{URL::asset('product/'.$d->gambar)}}" width="622px" height="800px" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> 
                    <img src="{{URL::asset('product/'.$d->gambar)}}" alt="iPod Classic" title="iPod Classic"  width="622px" height="800px" class="img-responsive" /> </a>

                    <ul class="button-group">
                      <li>
                        {{ csrf_field() }}
                        <input type="hidden" class="product_id" name="product_id" value="{{$d->id}}">
                        <button type="submit" class="addtocart-btn tambahkeranjang" title="Add to Cart"  > Tambah Ke keranjang </button>
                      </li>
                    </ul>
                      
                  </div>
                  <div class="caption product-detail">
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    <h4 class="product-name"><a href="#">{{$d->nama_brg}}</a></h4>
                    <h5 class="product-name"><a href="#">{{$d->deskripsi}}</a></h5>
                    <p class="price product-price">Rp. {{number_format($d->harga,'0','','.')}}</p>
                    <input type="hidden" name="subtotal" value="{{$d->harga*1}}">
                  </div>
                </div>
              </div>
            </div>     
            </form>    
            @endforeach
            <div class="viewmore">
              <div class="btn">View More All Products</div>
               
                             
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
