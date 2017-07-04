<section class="awe-section-7"> 
              <section class="list_style_product ">
                        <div class="new_title_color center" style="margin-bottom: 120px;">
                          <h2>
                            <span></span>
                              <a href="https://mendover-theme-1.bizwebvietnam.net/san-pham-khuyen-mai" title="Sản phẩm khuyến mãi">Sản phẩm khuyến mãi</a>
                            <span></span>
                          </h2>
                        </div>
                      <div class="container">
                          <div id="featured-slider-2" class="row">
                            <div class="slider-items slider-width-col4 owl-carousel owl-theme" style="opacity: 1; display: block;">
                              <div class="owl-wrapper-outer autoHeight" style="height: 374px;">
                                <div class="owl-wrapper" style="width: 5472px; left: 0px; display: block; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);">
                                    <div>
                                      @foreach($products as $product )
                                      <div class="owl-item" style="width: 304px;">
                                        <div class="laster-shop-item">
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                            <form action="/cart/add" method="post" class="variants" id="product-actions-1816119" enctype="multipart/form-data">
                                              <span class="tz-shop-meta"> 
                                                <input type="hidden" name="variantId" value="2783750">
                                                  <a href="#" class="tzshopping add_to_cart add-cart" title="Mua ngay">
                                                  Mua ngay
                                                  </a>
                                                      
                                                  <a href="/nha-dep-2-tang-voi-thiet-ke-gan-gui-thien-nhien" class="tzheart">
                                                  Chi tiết
                                                  </a>
                                              </span>
                                              <div class="laster-thumb row" onclick="location.href='/nha-dep-2-tang-voi-thiet-ke-gan-gui-thien-nhien';">                                                  
                                                <div class="shop-icon-data">                      
                                                      <span class="hv_price">
                                                        - 
                                                          2 
                                                          %
                                                      </span>
                                                </div>
                                                  <div>  
                                                    <a href="/nha-dep-2-tang-voi-thiet-ke-gan-gui-thien-nhien" title="Nhà đẹp 2 tầng với thiết kế gần gũi thiên nhiên">
                                                      <img src="image/{{$product->image}}" alt="Nhà đẹp 2 tầng với thiết kế gần gũi thiên nhiên">
                                                    </a>


                                                  </div>
                                            </form>
                                          </div>
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
                                            <div class="row">
                                              <div class="left_cnt_product">
                                                    <h3><a href="/nha-dep-2-tang-voi-thiet-ke-gan-gui-thien-nhien" class="text2line">{{$product->name}}</a></h3>
                                                    <div class="right_cnt_product">
                                                      
                                                      
                                                       @if($product->promotion_price != 0)
                                                         <small>
                                                            {{ $product->promotion_price}}

                                                         </small>
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

                                      @endforeach
                                      <!-- ket thuc-->
                                    </div>
                                         
                                </div>
                              </div>
                            </div>
                          <div class="owl-controls clickable">
                            <div class="owl-buttons">
                              <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                              <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                          </div>

                      </div>
             
            </section><!--end class tz-lastest-shop-->
</section> 