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
                                      <a  id="mua_hang" value="{{$product->id}}" class="tzshopping add_to_cart add-cart" title="Mua ngay">

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
                                      <div class="right_cnt_product" id="gia{{$product->id}}" giamgia="{{$product->promotion_price}}" dongia ="{{$product->unit_price}}" >

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

   
<div id="myModal" class="modal fade " role="dialog" style="display: none;"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative; z-index: 9;"><span aria-hidden="true">×</span></button><h4 class="modal-title"><span><i class="fa fa-check" aria-hidden="true"></i></span>Thêm vào giỏ hàng thành công</h4></div><div class="modal-body"><div class="media"><div class="media-left"><div class="thumb-1x1"><img width="70px" src="//bizweb.dktcdn.net/thumb/small/100/069/071/products/3.jpg" alt="Căn hộ 3PN  ở Pearl Plaza"></div></div><div class="media-body"><div class="product-title">Căn hộ 3PN  ở Pearl Plaza</div><div class="product-new-price"><span>3.000.000.000 đ</span></div></div></div><button class="btn btn-block btn-outline-red" data-dismiss="modal">Tiếp tục mua hàng</button><a href="/checkout" class="btn btn-block btn-radius">Tiến hành thanh toán »</a></div></div></div></div>


