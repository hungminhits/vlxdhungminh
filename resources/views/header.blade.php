
<div id="mySidenav" class="sidenav menu_mobile hidden-md hidden-lg" style="height: 657px;">
  <span class="close_menu"></span>
  <div class="content_memu_mb">
    <div class="link_list_mobile">
      <ul class="ct-mobile">
        <li class="level0 level-top parent">
            <a href="{{route('home')}}">Trang chủ</a>

        </li>

        <li class="level0 level-top parent">
            <a href="{{route('info')}}">Giới thiệu</a>

        </li>

        <li class="level0 level-top parent">
            <a href="{{route('allPro')}}">Sản phẩm</a>
            <i class="ti-plus fa fa-angle-right"></i>
            <ul class="level0 sub-menu" style="display:none;">
              <li class="level1">
                @for($i=0;$i<count($type);$i++)
                  <li><a href="{{route('type',$type[$i]['id'])}}">{{$type[$i]['name']}}</a></li>
                @endfor
              </li>
            </ul>

        </li>

        <li class="level0 level-top parent">
          <a href="{{route('news')}}">Tin tức</a>

        </li>
        <li class="level0 level-top parent">
          <a href="{{route('contact')}}">Liên hệ</a>

        </li>
      </ul>
    </div>
  </div>
</div>
<div class="fix_height_mobile" style="float:left;width:100%;">
<div class="ops"></div>

                


 <header class="tz-header tz-header2">
                  <div class="overlay"></div>
                  <div class="header-top-bar">
                    <div class="container no-pad-768">
                      <div class="fvc">
                        <div class="col-sm-4 col-xs-2 col-lg-9 col-md-9 no-pad-left">
                          <div class="header-left">
                            <div class="menu-top-menu visible-xs">
                              
                              <a href="https://mendover-theme-1.bizwebvietnam.net/account/login" class=""><i class="fa fa-user"></i></a>

                              <ul class="reg_mobile">
                                
                                <li><a href="{{route('Login')}}">Đăng nhập</a></li>
                                <li><a href="{{route('register')}}">Đăng ký</a></li>
                                
                              </ul>
                            </div>
                            <div class="menu-top-menu hidden-xs">
                              <ul>
                                @if(Auth::check())
                                @if(Auth::User()->group == 1)
                                <li><a href="{{route('ViewContentAdmin')}}"><i class="fa fa-user"></i>Admin {{Auth::User()->full_name}}</a></li>
                                <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                                @else
                                <li><a href="{{route('myPage')}}"><i class="fa fa-user"></i>Chào bạn {{Auth::User()->full_name}}</a></li>
                                <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                                @endif
                                @else
                                <li><a href="{{route('Login')}}">Đăng nhập</a></li>
                                <li><a href="{{route('register')}}">Đăng ký</a></li>
                                @endif
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-8 col-xs-10 col-lg-3 col-md-3 no-pad-right">
                          <div class="search-cart-list">
                            <div class="header-search">
                              <form action="/search" method="get">
                                <div class="hiden_search">
                                  <input placeholder="Tìm kiếm..." name="query" maxlength="70" type="text">
                                  <input class="hidden" value="" type="submit">
                                  <button style="border:none;">
                                    <i class="fa fa-search"></i>
                                  </button>
                                </div>
                              </form>
                              <button>
                                <i class="fa fa-search"></i>
                              </button>
                            </div>
                            <div class="cart-total">
                              <ul>
                                <li>
                                  <a class="cart-toggler" href="{{route('giohang')}}">
                                   <span class="hidden-xs" style="color:#848484;"> Giỏ hàng:</span> 
                                      <spam class="count_item_pr" id="cart-total">@if(Session::has('cart'))
                                          <span id="soluong" soluong="{{$totalQty}}" value="{{$totalQty}}">(&nbsp{{$totalQty}}&nbsp)san pham</span>
                                            @else

                                          <span id="soluong" soluong="0">Trống</span> 
                                            @endif 
                                  </a>
                                 <div class="mini-cart-content shopping_cart 123">
                                    @if(Session::has('cart'))
                                      @foreach($product_cart as $product)
                                      <div class="list-item-cart{{$product['item']['id']}}" >                                       
                                        <div class="cart-img-details">
                                            <div class="cart-img-photo" id ="cart-img-photo{{$product['item']['id']}}">
                                                <a id="route_cart" href="{{route('cart')}}"><img alt="" src="image/{{$product['item']['image']}}">
                                                </a>
                                            </div>

                                            <div class="cart-img-contaent">
                                                <a href="/can-ho-3pn-o-pearl-plaza">
                                                  <h4 id="cart-name{{$product['item']['id']}}">
                                                                                            
                                                  {{$product['item']['name']}}

                                                  </h4>
                                                </a>
                                                  <span class="cart-item-amount" id="id{{$product['item']['id']}}" 
                                                     
                                                      soluonghang="{{$product['qty']}}"

                                                  giamgia="{{$product['item']['promotion_price']}}" dongia="{{$product['item']['unit_price']}}">

                                                        {{$product['qty']}} *
                                                        
                                                        @if($product['item']['promotion_price']==0)
                                                        {{$product['item']['unit_price']}}
                                                        @else
                                                        {{$product['item']['promotion_price']}}
                                                        @endif 
                                                             
                                                   
                                                </span>
                                            </div>             
                                            <div class="pro-del"  >
                                                <a class="cart-item-delete" value="{{$product['item']['id']}}"> 
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="clear"></div>                    
                                      </div>
                                      @endforeach
                                    
                                      <div class="top-subtotal">Tổng tiền: 
                                            
                                            <span class="price" tong_tam="0" value="{{$totalPrice}}">{{number_format($totalPrice)}} </span>
                                                                        
                                      </div>                         
                                   
                                      <div class="actions">
                                            <a href="/checkout" class="btn-view-cart">
                                            <span>Thanh toán</span></a>
                                      </div>
                                                                      
                                      @else
                                          <div class="no-item"><p>Không có sản phẩm nào trong giỏ hàng</p>
                                          </div>
                                      @endif
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="container" id="open_menu_mobile">
                    <h3 class="tz-logo pull-left">
                      
                      <a class="logo" href="{{route('home')}}">         
                        <img style="width: 400px" src="http://vlxdhungminh.com/vlxdhungminh_files/logo.png" alt="logo ">          
                      </a>
                      
                    </h3>
                    
                    <button class="btn-navbar tz_icon_menu pull-right  visible-xs visible-sm" type="button">
                      <i class="fa fa-bars"></i> MENU
                    </button>
                    <nav class="pull-right">
                      <ul class="nav-collapse">
                        
                        
                        <li>
                          <a href="{{route('home')}}">Trang chủ</a>
                        </li>
                        
                        
                        
                        <li>
                          <a href="{{route('info')}}">Giới thiệu</a>
                        </li>
                        
                        
                        
                        <li>
                          <a href="{{route('allPro',['sortBy'=>'default'])}}">Sản phẩm<span data-toggle="dropdown" class="dropdown-toggle fa fa-angle-down"></span></a>

                          <div class="nav-child dropdown-menu mega-dropdown-menu">
                            <div class="mega-dropdown-inner">
                              <div class="row">
                                <div data-width="12" class="col-md-12 mega-col-nav">
                                  <div class="mega-inner">
                                    <ul class="mega-nav level1">
                                      
                                      
                                      <!-- <li>
                                        <a href="https://mendover-theme-1.bizwebvietnam.net/nha-o">Nhà ở</a>
                                        <i style="float:right;line-height: 30px;" class="click_show fa fa-angle-right"></i>
                                        <ul class="mega-nav level1 click_hiden">
                                          
                                          <li>
                                            <a href="https://mendover-theme-1.bizwebvietnam.net/">sub1</a>
                                          </li>
                                          
                                        </ul>
                                      </li>
                                      
                                      
                                      
                                      <li>
                                        <a href="https://mendover-theme-1.bizwebvietnam.net/can-ho">Căn hộ</a>
                                        <i style="float:right;line-height: 30px;" class="click_show fa fa-angle-right"></i>
                                        <ul class="mega-nav level1 click_hiden">
                                          
                                          <li>
                                            <a href="https://mendover-theme-1.bizwebvietnam.net/">Sub2</a>
                                          </li>
                                          
                                        </ul>
                                      </li>
                                      
                                      
                                      
                                      <li>
                                        <a href="https://mendover-theme-1.bizwebvietnam.net/chung-cu">Chung cư</a>
                                      </li>
                                      
                                      
                                      
                                      <li>
                                        <a href="https://mendover-theme-1.bizwebvietnam.net/van-phong">Văn phòng</a>
                                      </li>
                                      
                                      
                                      
                                      <li>
                                        <a href="https://mendover-theme-1.bizwebvietnam.net/nha-du-an">Nhà ở dự án</a>
                                      </li> -->
                                      @for($i=0;$i<count($type);$i++)
                                      <li><a href="{{route('type',[$type[$i]['id'],'sortBy'=>'default'])}}">{{$type[$i]['name']}}</a></li>
                                      @endfor
                                      
                                      
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        
                        
                        
                        <li>
                          <a href="{{route('news')}}">Tin tức</a>
                        </li>
                        
                        
                        
                        <li>
                          <a href="{{route('contact')}}">Liên hệ</a>
                        </li>
                        
                        
                      </ul>
                              <!-- Menu mobile -->

                    </nav>
                  </div><!--end class container-->
                </header><!--end class tz-header-->
<script type="text/javascript">
//cart ajax
    $('.cart-item-delete').click(function(){
      var id=$(this).attr('value');
      var route="{{route('delete1cart','id_sp')}}";
      route=route.replace("id_sp",id);

      var tongsoluong=$('#soluong').attr('soluong');
      tongsoluong=tongsoluong-$('#id'+id).attr('soluonghang');


      var tongtien=$('.price').attr('value');
      var gia=$('#id'+id).attr('giamgia');
       if(gia==0)
        gia=$('#id'+id).attr('dongia');
      tongtien=tongtien-($('#id'+id).attr('soluonghang')*gia);
      
      
      $.ajax({
        url: route,
        type:'get',
        data: {id:id},
        success:function(){
          alert(tongsoluong);
          $('#soluong').attr('soluong',tongsoluong);
          $('#soluong').attr('value',tongsoluong);
          $('#id'+id).attr('soluonghang',0)
          $('.list-item-cart'+id).hide();
           // $('#id'+id).attr('soluonghang',soluonghang);
           // $('#id'+id).attr('value',soluonghang);

           
          if(tongsoluong>0)
            $('#soluong').html((tongsoluong)+" "+"sản phẩm");   
          else
          {
           
            $('p.no-item').show();
            $('#soluong').html((tongsoluong)+" "+"sản phẩm");
            $('.123').html("Không có sản phẩm nào trong giỏ hàng");
            $('.top-subtotal').hide();
            $('.actions').hide();
                       
          }

          $('.price').attr('value',tongtien);
          $('.price').html((tongtien));
        }
      
      });
    });


  </script>