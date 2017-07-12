@extends('master')
@section('content')
<div class="fvc" style="float:left;width:100%;">
	
	<div class="banner_page_list">
		
		<h1>Giỏ hàng</h1>
		
	</div>
	<div class="breadcrumbs">
		<div class="container">
			<ul>
				<li class="home"> <a href="/" title="Trang chủ">Trang chủ &nbsp;</a></li>
				<!-- blog -->
				
				<li class="active"><strong>Giỏ hàng</strong></li>
				
				<!-- collection -->
				
				<!-- current_tags -->
				
				
			</ul>
		</div>
	</div>



		<section class="main-cart-page main-container col1-layout">
			<div class="main container hidden-xs">
				<div class="col-main cart_desktop_page cart-page">
					<div class="cart page_cart hidden-xs">
						<form action="/cart" method="post" novalidate="" class="margin-bottom-0">
							<div class="bg-scroll">
								<div class="cart-thead">
									<div style="width: 17%">Hình ảnh</div>
									<div style="width: 33%"><span class="nobr">Thông tin sản phẩm</span></div>
									<div style="width: 15%" class="a-center"><span class="nobr">Đơn giá</span></div>
									<div style="width: 14%" class="a-center">Số lượng</div>
									<div style="width: 15%" class="a-center">Thành tiền</div>
									<div style="width: 6%">Xoá</div>
								</div>

								<div class="cart-tbody">
									<!--  San pham -->
									<div class="item-cart productid-2783190">
										<div style="width: 17%" class="image">
											<a class="product-image" title="Bán căn hộ SSG Tower 2 PN" href="/ban-can-ho-ssg-tower-1">
												<img width="75" height="auto" alt="Bán căn hộ SSG Tower 2 PN" src="//bizweb.dktcdn.net/thumb/compact/100/069/071/products/8.jpg">
											</a>
										</div>

										<div style="width: 33%" class="a-center">
											<h2 class="product-name"> 
												<a href="/ban-can-ho-ssg-tower-1">Bán căn hộ SSG Tower 2 PN</a> 
											</h2>
											<span class="variant-title" style="display: none;">Default Title</span>
										</div>

										<div style="width: 15%" class="a-center">
											<span class="item-price">
												 <span class="price">3.000.000.000₫</span>
											</span>
										</div>

										<div style="width: 14%" class="a-center">
											<div class="input_qty_pr">
												<input class="variantID" type="hidden" name="variantId" value="2783190">

												<button onclick="var result = document.getElementById('qtyItem2783190'); var qtyItem2783190 = result.value; if( !isNaN( qtyItem2783190 ) &amp;&amp; qtyItem2783190 > 1 ) result.value--;return false;" disabled="" class="reduced_pop items-count btn-minus" type="button">

												<i class="fa fa-caret-left"></i>

												</button>

												<input type="text" maxlength="12" min="0" class="input-text number-sidebar input_pop input_pop qtyItem2783190" id="qtyItem2783190" name="Lines" size="4" value="1">
												<button onclick="var result = document.getElementById('qtyItem2783190'); var qtyItem2783190 = result.value; if( !isNaN( qtyItem2783190 )) result.value++;return false;" class="increase_pop items-count btn-plus" type="button">
												<i class="fa fa-caret-right"></i>
												</button>
											</div>

										</div>

										<div style="width: 15%" class="a-center">
											<span class="cart-price">
												 <span class="price">3.000.000.000₫</span> 
											</span>
										</div>

										<div style="width: 6%">
											<a class="button remove-item remove-item-cart" title="Xóa" href="javascript:;" data-id="2783190">
												<i class="fa fa-trash"></i>
												<span><span>Xóa</span></span>
											</a>
										</div>
									</div>
									
									<!--  San pham -->
									<div class="item-cart productid-2783202">
										<div style="width: 17%" class="image">
											<a class="product-image" title="Bán căn hộ Times City Park Hill" href="/ban-can-ho-times-city">
												<img width="75" height="auto" alt="Bán căn hộ Times City Park Hill" src="//bizweb.dktcdn.net/thumb/compact/100/069/071/products/10.jpg">
											</a>
										</div>

										<div style="width: 33%" class="a-center">
											<h2 class="product-name"> 
												<a href="/ban-can-ho-times-city">Bán căn hộ Times City Park Hill</a> 
											</h2>

											<span class="variant-title" style="display: none;">Default Title</span>
										</div>

										<div style="width: 15%" class="a-center">
											<span class="item-price"> 
												<span class="price">4.300.000.000₫</span>
											</span>
										</div>

										<div style="width: 14%" class="a-center">
											<div class="input_qty_pr">
												<input class="variantID" type="hidden" name="variantId" value="2783202">
													<button onclick="var result = document.getElementById('qtyItem2783202'); var qtyItem2783202 = result.value; if( !isNaN( qtyItem2783202 ) &amp;&amp; qtyItem2783202 > 1 ) result.value--;return false;" disabled="" class="reduced_pop items-count btn-minus" type="button">
													<i class="fa fa-caret-left"></i>
													</button>

												<input type="text" maxlength="12" min="0" class="input-text number-sidebar input_pop input_pop qtyItem2783202" id="qtyItem2783202" name="Lines" size="4" value="1">
													<button onclick="var result = document.getElementById('qtyItem2783202'); var qtyItem2783202 = result.value; if( !isNaN( qtyItem2783202 )) result.value++;return false;" class="increase_pop items-count btn-plus" type="button">
													<i class="fa fa-caret-right"></i>
													</button>
											</div>
										</div>

										<div style="width: 15%" class="a-center">
											<span class="cart-price"> 
												<span class="price">4.300.000.000₫</span> 
											</span>
										</div>

										<div style="width: 6%">
											<a class="button remove-item remove-item-cart" title="Xóa" href="javascript:;" data-id="2783202">
												<i class="fa fa-trash"></i>
												<span>
													<span>Xóa</span>
												</span>
											</a>
										</div>
									</div>

								</div>
							</div>
						</form>
						<div class="cart-collaterals cart_submit row">
							<div class="totals col-sm-12 col-md-12 col-xs-12">
								<div class="totals">
									<div class="inner">
										<table class="table shopping-cart-table-total margin-bottom-0" id="shopping-cart-totals-table">
											<colgroup>
												<col>
												<col>
											</colgroup>

											<tfoot>
												<tr>
													<td class="a-right last" colspan="50" style="padding: 15px;">
														<button style="float:left;" onclick="window.location.href='/collections/all'" name="checkout" class="button_height_44" title="Tiếp tục mua hàng" type="button">
															<span>Tiếp tục mua hàng</span>
														</button>

														<button onclick="window.location='/cart/clear'" id="empty_cart_button" class="button_height_44" title="Clear Cart" value="empty_cart" name="update_cart_action" type="button">
															<span>
																<span>Xóa giỏ hàng</span>
															</span>
														</button>
													</td>
												</tr>

												<tr class="order-total shopping-cart-table-total" style="background: #fff;border: 1px solid #ebebeb;">
													<th>Tổng tiền thanh toán</th>
													<td style="padding: 15px 19px;color: #bda87f;font-size: 16px;font-weight: bold;">
														<span class="amount totals_price price">10.600.000.000₫</span>
													</td>
												</tr>
											</tfoot>
										</table>
										<ul class="checkout" style="margin-top:25px;">
											<li class="clearfix">
												<button class="button_height_44 f-right" title="Tiến hành đặt hàng" type="button" onclick="window.location.href='/checkout'">
													<span>Thanh toán</span>
												</button>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="cart-mobile hidden-md hidden-lg hidden-sm">
				<form action="/cart" method="post" novalidate="" class="margin-bottom-0">
							<div class="header-cart" style="background:#fff;">
								
								<div class="title-cart">
									<h3>Giỏ hàng của bạn</h3>
								</div>
								
							</div>

							<div class="header-cart-content" style="background:#fff;">
								<div class="cart_page_mobile content-product-list">
									<!--  San pham -->
									<div class="item-product item productid-2783190 ">
										<div class="item-product-cart-mobile">
											<a href="/ban-can-ho-ssg-tower-1">	</a>
												<a class="product-images1" href="" title="Bán căn hộ SSG Tower 2 PN">
													<img width="80" height="150" alt="" src="//bizweb.dktcdn.net/thumb/small/100/069/071/products/8.jpg">
												</a>
										</div>

										<div class="title-product-cart-mobile">
											<h3>
												<a href="/ban-can-ho-ssg-tower-1" title="Bán căn hộ SSG Tower 2 PN">Bán căn hộ SSG Tower 2 PN</a>
											</h3>

											<p>Giá: <span>3.000.000.000₫</span></p>
										</div>

										<div class="select-item-qty-mobile">
											<div class="txt_center">
												<input class="variantID" type="hidden" name="variantId" value="2783190">
													<button onclick="var result = document.getElementById('qtyMobile2783190'); var qtyMobile2783190 = result.value; if( !isNaN( qtyMobile2783190 ) &amp;&amp; qtyMobile2783190 > 0 ) result.value--;return false;" class="reduced items-count btn-minus" type="button">–</button>

												<input type="text" maxlength="12" min="0" class="input-text number-sidebar qtyMobile2783190" id="qtyMobile2783190" name="Lines" size="4" value="1">
													<button onclick="var result = document.getElementById('qtyMobile2783190'); var qtyMobile2783190 = result.value; if( !isNaN( qtyMobile2783190 )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button>
											</div>

											<a class="button remove-item remove-item-cart" href="javascript:;" data-id="2783190">Xoá</a>
										</div>
									</div>

									<!--  San pham -->
									<div class="item-product item productid-2783202 ">
										<div class="item-product-cart-mobile">
											<a href="/ban-can-ho-times-city">	</a>
												<a class="product-images1" href="" title="Bán căn hộ Times City Park Hill">
													<img width="80" height="150" alt="" src="//bizweb.dktcdn.net/thumb/small/100/069/071/products/10.jpg">
												</a>
										</div>

										<div class="title-product-cart-mobile">
											<h3>
												<a href="/ban-can-ho-times-city" title="Bán căn hộ Times City Park Hill">Bán căn hộ Times City Park Hill</a>
											</h3>

											<p>Giá: <span>4.300.000.000₫</span></p>
										</div>

										<div class="select-item-qty-mobile">
											<div class="txt_center">
												<input class="variantID" type="hidden" name="variantId" value="2783202">
													<button onclick="var result = document.getElementById('qtyMobile2783202'); var qtyMobile2783202 = result.value; if( !isNaN( qtyMobile2783202 ) &amp;&amp; qtyMobile2783202 > 0 ) result.value--;return false;" class="reduced items-count btn-minus" type="button">–</button>

												<input type="text" maxlength="12" min="0" class="input-text number-sidebar qtyMobile2783202" id="qtyMobile2783202" name="Lines" size="4" value="1">
													<button onclick="var result = document.getElementById('qtyMobile2783202'); var qtyMobile2783202 = result.value; if( !isNaN( qtyMobile2783202 )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button>
											</div>

											<a class="button remove-item remove-item-cart" href="javascript:;" data-id="2783202">Xoá</a>
										</div>
									</div>

								</div>

								<div class="header-cart-price" style="">
									<div class="button-acc-cart">
										<button class="button_height_44 f-left" title="Mua thêm" type="button" onclick="window.location.href='/collections/all'">
											<span>Mua thêm</span>
										</button>

										<button class="button_height_44 f-left" title="Xóa toàn bộ đơn hàng" type="button" onclick="window.location.href='/cart/clear'">
											<span>Xoá hết</span>
										</button>
									</div>

									<div class="title-cart ">
										<span class="text-xs-left">Tổng cộng: </span>
										<span class="text-xs-right totals_price_mobile">10.600.000.000₫</span>
									</div>

									<div class="checkout">
										<button class="btn-proceed-checkout-mobile button_height_44" title="Thanh toán" type="button" onclick="window.location.href='/checkout'">
											<span>Tiến hành thanh toán</span>
										</button>
									</div>
								</div>
							</div>
				</form>
			</div>
		</section>
</div>
		@endsection