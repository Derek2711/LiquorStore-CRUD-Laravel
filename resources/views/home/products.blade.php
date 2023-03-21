<section class="product_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         <h3 > <span style="color:red">Our  Appeals</span></h3>
         <p> <span style="color:red">Cuz we sell our products for collection only and  don't have any new arrivals,
             we don't have enough products to sell.
            <span >So, we close for all products not to be bought for many quantities as u like. One registered account can buy any product for only one time.But some products have enough stocks. So if you buy the same product by repeating ,u can.</span></span></p>

          <br><br><br>  
         <h2>
            Our Products
         </h2>
      </div>
      
      <div class="row">
         @foreach($products as $product)
         <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
               <div class="option_container">
                  <div class="options">
                     <a href="{{url('product_details',$product->id)}}" class="option1">
                        Details
                     </a>

                     <a href="{{url('/add_cart',$product->id)}}" class="option2">
                        Add to cart
                     </a>
                  </div>
               </div>
               <div class="img-box">
                  <img src="/product/{{$product->image}}" alt="">
               </div>
               <div class="detail-box">
                  <h5>
                     {{$product->title}}
                  </h5>
                  @if($product->discount_price != null)
                  <h6>
                     ${{$product->discount_price}}
                  </h6>
                  <h6 style="text-decoration: line-through; color: red;">
                     ${{$product->price}}
                  </h6>
                  @else
                  <h6>
                     ${{$product->price}}
                  </h6>
                  @endif

               </div>
            </div>
         </div>
         @endforeach
         {{-- 
         <span style="margin-top: 30px;">
            {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
         </span> 
         --}}
      </div>

   </div>
</section>