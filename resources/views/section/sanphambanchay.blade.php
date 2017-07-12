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

        var promotion_price = $('#gia'+id).attr('giamgia');
        var unit_price = $('#gia'+id).attr('dongia');
        
        var price = $('#gia'+id).attr('giamgia');
      
        
        if(price==0)
        {

          price = $('#gia'+id).attr('dongia');
          
        }
      
        alert(price);
        
        
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
          

         var tongsoluong = $('#soluong').attr('soluong');
         tongsoluong= parseInt(tongsoluong)+parseInt(1);

        var tongtien=parseInt($('.price').attr('value'));

        if(isNaN(tongtien))
        {
         tongtien = parseInt(0);
         tongtien = tongtien + parseInt($('#gia'+id).attr('soluong_tam'))*parseInt(price);
        }
        else
        {
        tongtien=parseInt(tongtien)+parseInt($('#gia'+id).attr('soluong_tam'))*parseInt(price);
        }

        
        $.ajax({
        url: route,
        type:'get',
        data: {id:id},
        success:function()
          {
                    

                        if ($('.list-item-cart'+id).length){
                          $('.list-item-cart'+id).html(" <div class='cart-img-details'>        <div class='cart-img-photo' id ='cart-img-photo"+id+"'> <a id='route_cart'                href='"+route_cart+"'> <img alt='' src='"+image+"' > </a> </div>                            <div class='cart-img-contaent'><a href='/can-ho-3pn-o-pearl-plaza'><h4 id='cart-name"+id+"'>"+name+"</h4></a><span class='cart-item-amount' id='id"+id+"' soluonghang='"+soluonghang+"' giamgia='"+promotion_price+"' dongia='"+unit_price+"'> "+soluonghang+" *"+price+"</span></div> <div class='pro-del'><a class='cart-item-delete' value='"+id+"'><i class='fa fa-times'></i></a></div></div>");
                          }
                          else
                          {

                              if($('.top-subtotal').length)
                              {
                                $('.top-subtotal').html("Tổng tiền:  <span class='price' tong_tam='0' value='"+tongtien+"'>"+tongtien+" </span>")
                                
                              }
                              else
                              {

                                $('.123').append("<div class='top-subtotal'> Tổng tiền:  <span class='price' tong_tam='0' value='"+tongtien+"'>  </div ");
                              }

                              $('.123').append("<div class='list-item-cart"+id+"' >   <div class='cart-img-details'>        <div class='cart-img-photo' id ='cart-img-photo"+id+"'> <a id='route_cart'                href='"+route_cart+"'> <img alt='' src='"+image+"' > </a> </div>                            <div class='cart-img-contaent'><a href='/can-ho-3pn-o-pearl-plaza'><h4 id='cart-name"+id+"'>"+name+"</h4></a><span class='cart-item-amount' id='id"+id+"' soluonghang='"+soluonghang+"' giamgia='"+promotion_price+"' dongia='"+unit_price+"'> "+soluonghang+" *"+price+"</span></div> <div class='pro-del'><a class='cart-item-delete' value='"+id+"'><i class='fa fa-times'></i></a></div></div> <div class='clear'></div> </div>  ");



                        
                          }
                          $('.list-item-cart'+id).show();

                        
                  if(tongsoluong>0)
                    {   
                        $('.no-item').hide();
                        $('#id'+id).attr('soluonghang',soluonghang);
                        $('#soluong').attr('soluong',tongsoluong);
                        $('#soluong').attr('value',tongsoluong);
                        $('#soluong').html((tongsoluong)+" "+"sản phẩm");
                        $('span.price').attr('value',tongtien);
                        $('#id'+id).html((soluonghang) + "*" +(price));

                        $('.top-subtotal').html("Tổng tiền:  <span class='price' tong_tam='0' value='"+tongtien+"'>"+tongtien+" </span>")
                        $('.actions').html("<a href='/checkout' class='btn-view-cart' ><span>Thanh toán</span></a>");


                     
                    }

          }


        });



        


    });
</script>



