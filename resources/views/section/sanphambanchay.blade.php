<!-- san pham ban chay -->
 
 <section class="awe-section-3"> 

                  <section class="list_style_product ">
                    <div class="new_title_color center">
                      <h2><span></span><a href="https://mendover-theme-1.bizwebvietnam.net/frontpage" title="Sản phẩm bán chạy">Sản phẩm bán chạy</a><span></span></h2>
                    </div>
                    <div class="container">
                      <div class="row featured-buttons-sell">

                        <div class="slider-items slider-width-col4 multi-columns-row">
                          @foreach($products as $product)
                          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="">
                              <div class="laster-shop-item">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                  <form action="{{route('buy',$product->id)}}" method="get" class="variants"   id="product-actions-1815208" enctype="multipart/form-data">
                                     
                                    <span class="tz-shop-meta">

                                      <input name="variantId" value="2782584" type="hidden">
                                      <a  id="mua_hang" value="{{$product->id}}"  class="tzshopping add_to_cart add-cart" title="Mua ngay">

                                       <div > Mua ngay </div>
                                      </a>

                                      <a href="{{route('detail',$product->id)}}" class="tzheart">
                                        Chi tiết
                                      </a>
                                    </span>
                                    <div class="laster-thumb row" onclick="location.href='/can-ho-2pn-tai-pearl-plaza';">

                                      <a href="{{ route('detail',$product->id)}}" title="Căn hộ 2PN tại Pearl Plaza">
                                        <img id="image{{$product->id}}"  src="image/{{$product->image }}" alt="Căn hộ 2PN tại Pearl Plaza">
                                      </a>


                                    </div>
                                  </form>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                  <div class="row">
                                    <div class="left_cnt_product">
                                      <h3><a id="name_sanpham{{$product->id}}" value="{{$product->name}}" href="https://mendover-theme-1.bizwebvietnam.net/can-ho-2pn-tai-pearl-plaza" class="text2line">{{ $product->name }}</a></h3>
                                      <div class="right_cnt_product" id="gia{{$product->id}}" giamgia="{{$product->promotion_price}}" dongia ="{{$product->unit_price}}" soluong_tam="1" tong_tam="0">

                                      @if($product->promotion_price != 0)
                                       <small>
                                         {{ $product->promotion_price}}
                                       </small>
                                        <em>
                                          {{ $product->unit_price}}
                                       </em>
                                       @else
                                        <em>
                                          {{ $product->unit_price}}
                                       </em>
                                       @endif


                                      </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          @endforeach

                          

                        </div>
                      </div>
                    </div>
                    <div style="text-align:center;float:left;width:100%;">

                      <a href="https://mendover-theme-1.bizwebvietnam.net/frontpage" class="tz-view-more2 tz-view-style2"><span>Xem thêm</span></a>
                    </div>
                  </section>
                </section>

  

<script type="text/javascript">
    
    $(".add-cart").click(function()
    {
        var i =0;
        var id=$(this).attr('value');



        var route="{{route('buy','id_sp')}}";
        route=route.replace("id_sp",id);
        
        var image = $('img#image'+id).attr('src');
        var name =  $('a#name_sanpham'+id).attr('value');

        var route_cart = "{{route('cart')}}";

        var promotion_price=$('#id'+id).attr('giamgia');
        var unit_price = $('#id'+id).attr('dongia')

        
        var price;
      
        
        if(promotion_price==0)
        {

          price = unit_price;
          
        }
        else
        {
          price = promotion_price;
        }
          // soluong hang

          
          var soluonghang = $('#id'+id).attr('soluonghang');
          if(isNaN(soluonghang)){
          soluonghang=parseInt(0);
          }
          else
          {
          soluonghang=parseInt($('#id'+id).attr('soluonghang'));
          }
          soluonghang = soluonghang +1;
          
        
              $('#id'+id).attr('soluonghang',soluonghang);
              $('#id'+id).attr('value',soluonghang);
             
              
          
          

         var tongsoluong = $('#soluong').attr('soluong');
         tongsoluong= parseInt(tongsoluong)+parseInt(1);
         

         
         
        var tong_tam = $('#gia'+id).attr('tong_tam');


        var tongtien=parseInt($('.price').attr('value'));

        if(isNaN(tongtien))
        {
         tongtien = parseInt(0);
        }
        else
        tongtien=parseInt(tongtien)+parseInt($('#gia'+id).attr('soluong_tam'))*parseInt(price);

        
                  
          $('.no-item').hide();
        $.ajax({
          url:route,
          type:'get',
          data: {id,id},
          success:function()
          {
            
               
              
              if(tongsoluong>0)
            {
             $('span.price').html(tongtien);

            $('.list-item-cart'+id).show();
              $('#soluong').html((tongsoluong)+" "+"sản phẩm");
              $('#soluong').attr('soluong',tongsoluong);
              $('#soluong').attr('value',tongsoluong);
              $('span.price').attr('value',tongtien)
               $('#id'+id).html((soluonghang) + "*" +(price));
              
               $('.top-subtotal').html("Tổng tiền:  <span class='price' tong_tam='0' value='"+tongtien+"'>"+tongtien+" </span>")
               $('#Thanhtoan').html("<a href='/checkout' class='btn-view-cart' id='Thanhtoan'><span>Thanh toán</span></a>");
              
              $('#Thanhtoan').show();
              $('.top-subtotal').show();

              // $('#id'+id).attr
              
              document.getElementById('cart-img-photo'+id).innerHTML = "<img src=" + image + "/>";



                
            }
          }


        });



        


    });
</script>



