@extends('master')
@section('content')
<div class="fvc" style="float:left;width:100%;">
	 {!! csrf_field() !!}
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
									@if(Session::has('cart'))
										@foreach($product_cart as $product)
											<div class="item-cart productid{{$product['item']['id']}}" >
									
												<div style="width: 17%" class="image">
													<a class="product-image" title="Bán loại {{$product['item']['name']}}" href="/ban-can-ho-ssg-tower-1">
														<img width="75" height="auto" alt="Bán  {{$product['item']['name']}}" src="images/{{$product['item']['image']}}">
													</a>
												</div>

												<div style="width: 33%" class="a-center">
													<h2 class="product-name"> 
														<a href="/ban-can-ho-ssg-tower-1">{{$product['item']['name']}}</a> 
													</h2>
													<span class="variant-title" style="display: none;">Default Title</span>
												</div>

												<div style="width: 15%" class="a-center">
													<span class="item-price{{$product['item']['id']}}" giamgia="{{$product['item']['promotion_price']}}" dongia="{{$product['item']['unit_price']}}">
													@if($product['item']['promotion_price'] !=0)
														 <span class="price">
														 {{number_format($product['item']['promotion_price'])}} VND
														 </span>
													@else
														<span class="price">
														{{number_format($product['item']['unit_price'])}} VND
														 </span>
													@endif
													</span>
												</div>

												<div style="width: 14%" class="a-center">
													<div class="input_qty_pr">
														<input class="variantID" type="hidden" name="variantId" value="{{$product['item']['id']}}">

														<button id="left{{$product['item']['id']}}" value="{{$product['item']['id']}}" onclick="minus({{$product['item']['id']}})"   class="reduced_pop items-count btn-minus" type="button" >

														<i class="fa fa-caret-left"></i>

														</button>

														<input type="text" maxlength="12" min="0" class="input-text number-sidebar input_pop input_pop qtyItem{{$product['item']['id']}}" id="qtyItem{{$product['item']['id']}}" name="Lines" size="4" value=" {{$product['qty']}}">
														<button id="right" onclick="plus({{$product['item']['id']}})" class="increase_pop items-count btn-plus" type="button">
														<i class="fa fa-caret-right"></i>
														</button>
													</div>

												</div>

												<div style="width: 15%" class="a-center">
													<span class="cart-price{{$product['item']['id']}}">
														 <span class="price" value=" {{$product['price']}} ">{{$product['qty'] * $product['price'] }}</span> 
													</span>
												</div>

												<div style="width: 6%">
													<a class="button remove-item remove-item-cart"  title="Xóa" href="javascript:;" data-id="{{$product['item']['id']}}" onclick="remove({{$product['item']['id']}})">
														<i class="fa fa-trash"></i>
														<span><span>Xóa</span></span>
													</a>
												</div>

										
											</div>
										@endforeach
									@endif
									
									
								
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

														<button onclick="delete_all_cart()" id="empty_cart_button" class="button_height_44" title="Clear Cart" value="empty_cart" name="update_cart_action" type="button">
															<span>
																<span  >Xóa giỏ hàng</span>
															</span>
														</button>
													</td>
												</tr>
												@if(Session::has('cart'))
												<tr class="order-total shopping-cart-table-total" style="background: #fff;border: 1px solid #ebebeb;">
													<th>Tổng tiền thanh toán</th>
													<td style="padding: 15px 19px;color: #bda87f;font-size: 16px;font-weight: bold;">
														<span class="amount totals_price" value ="{{$totalPrice}}">{{number_format($totalPrice)}}</span>
													</td>
												</tr>
												@else 
												  <h3>Không có sản phẩm nào trong giỏ hàng</h3>
												@endif
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

		<script type="text/javascript">


			function minus(id)
			{			
						
						var route="{{route('delete1product','id_sp')}}";
		        			route_delete_product=route.replace("id_sp",id);
		        			

						var result = document.getElementById("qtyItem"+id).value;
						
						if(result<3)
						{
							document.getElementById("left"+id).disabled = true;
						}
						else
						{
							document.getElementById("left"+id).disabled = false;
						}
						result--;

						

		        		var tongsoluong=$('#soluong').attr('soluong');
		      			tongsoluong=tongsoluong-1;



						$(".qtyItem"+id).attr('value',result);
						var price = $('.item-price'+id).attr('giamgia');
						if(price==0)
						{
							price = $('i.tem-price'+id).attr('dongia');
						}
						

						var thanhtien = parseInt(0);
						thanhtien = thanhtien + (parseInt(result)*parseInt(price));
						
						
						$('.cart-price'+id).html("<span class='price'> "+thanhtien+" </span>")


						var tongtien = $('.totals_price').attr('value');
						
						tongtien = tongtien - price;
				
					$.ajax({
					url:route_delete_product,
					type:'get',
        			data: {id:id},
        			success:function()
        			{
        				$('.totals_price').html(tongtien);
        				$('.totals_price').attr('value',tongtien);
        				$('#soluong').attr('soluong',tongsoluong);
          				$('#soluong').attr('value',tongsoluong);
          				if(tongsoluong>0)
          				{
            				$('#soluong').html((tongsoluong)+" "+"sản phẩm");
            				$('#id'+id).html(result + " * " + price );
            				$('.top-subtotal').html("Tổng tiền:  <span class='price' tong_tam='0' value='"+tongtien+"'>"+tongtien+" </span>")


          				}

				          				

        			},
        			error:function()
        			{
        				alert(" có lỗi" + e);
        			},

				})
				
				
				
			}

			function plus(id)
			{

				var route="{{route('buy','id_sp')}}";
        			route_buy_product=route.replace("id_sp",id);
        			

				var result = document.getElementById("qtyItem"+id).value;
				if(result>1)
				{
					document.getElementById("left"+id).disabled = false;
				}
				result++;

				var tongsoluong=$('#soluong').attr('soluong');
      			tongsoluong=parseInt(tongsoluong) + parseInt(1);



				var price = $('.item-price'+id).attr('giamgia');
				if(price==0)
				{
					price = $('.item-price'+id).attr('dongia');
				}

				$(".qtyItem"+id).attr('value',result);

				var thanhtien = parseInt(0);
				thanhtien = thanhtien + (parseInt(result)*parseInt(price));
			

				$('.cart-price'+id).html("<span class='price'> "+thanhtien+" </span>")	
				var tongtien = $('.totals_price').attr('value');
				
				tongtien = parseInt(tongtien) + parseInt(price);
				
					$.ajax({
					url:route_buy_product,
					type:'get',
        			data: {id:id},
        			success:function()
        			{
        				$('.totals_price').html(tongtien);
        				$('.totals_price').attr('value',tongtien);
        				$('#soluong').attr('soluong',tongsoluong);
          				$('#soluong').attr('value',tongsoluong);
          				if(tongsoluong>0)
          				{
            				$('#soluong').html((tongsoluong)+" "+"sản phẩm");
            				$('#id'+id).html(result + " * " + price );
            				$('.top-subtotal').html("Tổng tiền:  <span class='price' tong_tam='0' value='"+tongtien+"'>"+tongtien+" </span>")

          				}
          				
          				

        			},
        			error:function()
        			{
        				alert(" có lỗi");
        			},

				})
							
				
			}

		</script>

		<script type="text/javascript">
			function delete_all_cart()
			{
				alert("da vao");
				var route ="{{ route('delete_all_cart')}}";
				alert(route);
				 $.ajax({
				        url: route,
				        type:'get',
				        data: null,
				        success:function(){
				        	window.location.replace(route);

				        }
				    });


			}
				
			function remove(id)
			{


					var route="{{route('delete1cart','id_sp')}}";
					route=route.replace("id_sp",id);
					$('.productid'+id).hide();
					
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
				            $('.123').html(" <div class='no-item'>Không có sản phẩm nào trong giỏ hàng</div> ");
				            $('.top-subtotal').hide();
				            $('.actions').hide();
				                       
				          }

				          $('.price').attr('value',tongtien);
				          $('.price').html((tongtien));
				          $('.totals_price').html(tongtien);
        				$('.totals_price').attr('value',tongtien);
				        }
	      
	      		});

			}
			
		</script>


	<!-- 	var result = document.getElementById('qtyItem{{$product['item']['id']}}'); var qtyItem{{$product['item']['id']}} = result.value; if( !isNaN( qtyItem{{$product['item']['id']}} ) &amp;&amp; qtyItem{{$product['item']['id']}} > 1 ) result.value--;return false; -->

	<!-- plus
	var result = document.getElementById('qtyItem{{$product['item']['id']}}'); var qtyItem{{$product['item']['id']}} = result.value; if( !isNaN( qtyItem{{$product['item']['id']}})) result.value++;return false; -->