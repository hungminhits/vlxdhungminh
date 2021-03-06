@extends('master')
@section('content')

<div class="fvc" style="float:left;width:100%;">

	<div class="banner_page_list">
	@foreach ($typro as $typ)
	<h1> {{$name=$typ->name}}</h1>
	@endforeach
	</div>
	<div class="breadcrumbs">
		<div class="container">
			<ul>
				<li class="home"> <a href="/" title="Trang chủ">Trang chủ &nbsp;</a></li>
				<!-- blog -->

				<li><strong> {{$name}}</strong></li>

				<!-- current_tags -->
			</ul>
		</div>
	</div>

	<div class="tzcategory-shop-wrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 tzshop-aside">
					<div class="box_collection_pr">
						<div class="title_st">
							<h2>
								<div class="show_nav_bar1"><i class="fa fa-bars"></i></div>
								Danh mục sản phẩm
							</h2>
							<span class="arrow_title visible-md visible-md"></span>
							<div class="show_nav_bar hidden-lg hidden-md"></div>
						</div>
						<div class="list_item_collection show1">
							<ul>

							@for ($i=0;$i<count($type);$i++)
								@if ($type[$i]['name'] == $name)
								<li class="li_lv1 active"> <a href="{{route('type',[$type[$i]['id'],'sortBy'=>'default'])}}">{{$name}}</a> <span class="sub_minus"></span>
									<ul class="level0_415">


										<li class="li_lv2"> <a href="/"> sub1 </a></li>


										<!--level1-->
									</ul>
									<!--level0-->
									<!--level0 hover -->
									<ul class="level0_415_hover hidden-xs hidden-sm">


										<li class="li_lv2_hover "> <a href="/"> sub1 </a></li>


										<!--level1-->
									</ul>
									<!--level0--> 	
								</li>
			 
								@else

								<li class="li_lv1 "> <a href="{{route('type',[$type[$i]['id'],'sortBy'=>'default'])}}">{{$type[$i]['name']}}</a> <span class="sub_minus"></span>
								@endif
							@endfor
							</ul>
						</div>
					</div>
					<aside class="widget_bestsellers box_collection_pr">
						<div class="title_widget">
							<h2>
								SẢN PHẨM BÁN CHẠY
							</h2>
						</div>
						<ul>

							<li>

								<div class="as_bestsellers_thumb">
									<a href="/can-ho-2pn-tai-pearl-plaza"><img src="//bizweb.dktcdn.net/thumb/small/100/069/071/products/1.jpg?v=1458791387930" alt="Căn hộ 2PN tại Pearl Plaza"></a>
								</div>
								<div class="as_bestsellers_content">
									<h3><a href="/can-ho-2pn-tai-pearl-plaza" class="text2line">Căn hộ 2PN tại Pearl Plaza</a></h3>


									<small>250.000.000₫</small>


								</div>
							</li>

							<li>

								<div class="as_bestsellers_thumb">
									<a href="/can-ho-3pn-o-pearl-plaza"><img src="//bizweb.dktcdn.net/thumb/small/100/069/071/products/3.jpg?v=1458791640607" alt="Căn hộ 3PN  ở Pearl Plaza"></a>
								</div>
								<div class="as_bestsellers_content">
									<h3><a href="/can-ho-3pn-o-pearl-plaza" class="text2line">Căn hộ 3PN  ở Pearl Plaza</a></h3>




									<small>
										3.000.000.000₫
										<br>

										<em style="font-size: 14px;color: #ccc;">
											3.200.000.000₫			
										</em>

									</small>


								</div>
							</li>

							<li>


								<div class="as_bestsellers_thumb">
									<a href="/ban-can-ho-ssg-tower"><img src="//bizweb.dktcdn.net/thumb/small/100/069/071/products/9.jpg?v=1458792875780" alt="Bán căn hộ SSG Tower 3PN"></a>
								</div>
								<div class="as_bestsellers_content">
									<h3><a href="/ban-can-ho-ssg-tower" class="text2line">Bán căn hộ SSG Tower 3PN</a></h3>


									<small>3.300.000.000₫</small>


								</div>
							</li>

							<li>

								<div class="as_bestsellers_thumb">
									<a href="/ban-can-ho-ssg-tower-1"><img src="//bizweb.dktcdn.net/thumb/small/100/069/071/products/8.jpg?v=1458792918940" alt="Bán căn hộ SSG Tower 2 PN"></a>
								</div>
								<div class="as_bestsellers_content">
									<h3><a href="/ban-can-ho-ssg-tower-1" class="text2line">Bán căn hộ SSG Tower 2 PN</a></h3>


									<small>3.000.000.000₫</small>


								</div>
							</li>

							<li>


								<div class="as_bestsellers_thumb">
									<a href="/nha-pho-dep-3-tang-khac-phuc-nang-huong-tay"><img src="//bizweb.dktcdn.net/thumb/small/100/069/071/products/16.jpg?v=1458793722490" alt="Nhà phố đẹp 3 tầng khắc phục nắng hướng tây"></a>
								</div>
								<div class="as_bestsellers_content">
									<h3><a href="/nha-pho-dep-3-tang-khac-phuc-nang-huong-tay" class="text2line">Nhà phố đẹp 3 tầng khắc phục nắng hướng tây</a></h3>


									<small>4.100.000.000₫</small>


								</div>
							</li>

						</ul>
					</aside>
					<div class="banner_collection visible-lg visible-md">
						<a href="">
							<img src="//bizweb.dktcdn.net/100/069/071/themes/543675/assets/banner.jpg?1496115817221" alt="Mendover Theme">
						</a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="all-product-area">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="box_tool">
									<div class="result-short pull-left">
										<p class="result-count"> Sắp xếp : </p>
										<form class="filter-xs" method="POST">
											<div class="orderby-wrapper"> 

											<form  method="" id="form" action="{{route('type',$typro[0]->id)}}"> 
												<select name="sortBy" id="sortBy" class="selectBox" style="padding: 0px 10px; height: 30px;">
													<option id="default" value="default">Mặc định</option>
													<option id="alpha-asc" value="alpha-asc">A → Z</option>
													<option id="alpha-desc" value="alpha-desc">Z → A</option>
													<option id="price-asc" value="price-asc">Giá tăng dần</option>
													<option id="price-desc" value="price-desc">Giá giảm dần</option>
													<option id="created-desc" value="created-desc">Hàng mới nhất</option>
													<option id="created-asc" value="created-asc">Hàng cũ nhất</option>


												</select>
												<script>$('#sortBy').val('created-desc');</script>
												<script src="//bizweb.dktcdn.net/100/069/071/themes/543675/assets/sortby.js?1496115817221" type="text/javascript"></script>
											</div>

											<script type="text/javascript">
												var b="{{$_GET['sortBy']}}";
											$("#"+b).attr("selected","selected");
											
											</script>

										</form>

									</div>
									<div class="view-mode"> 
										<a href="javascript:;" class="active">
											<i class="fa fa-th"></i>
										</a> 
										<a href="javascript:;" class="switch-view" data-view="list">
											<i class="fa fa-bars"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row multi-columns-row">

					<script type="text/javascript">
					$('#sortBy').change(function(){
						
						$("#form").submit();
						
						
					});

					</script>


					@foreach ($product as $pro)
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class=" laster-shop-item row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
									<form action="/cart/add" method="post" class="variants" id="product-actions-1815731" enctype="multipart/form-data">
										<span class="tz-shop-meta">

											<input type="hidden" name="variantId" value="2783202">
											<a href="#" class="tzshopping add_to_cart add-cart" title="Mua ngay">
												Mua ngay
											</a>

											<a href="{{route('detail',$pro->name_khong_dau)}}" class="tzheart">
												Chi tiết
											</a>
										</span>
										<div class="laster-thumb row" onclick="location.href='/ban-can-ho-times-city';">

											<a href="/ban-can-ho-times-city" title="Bán căn hộ Times City Park Hill">
												<img  src="image/{{$pro->image}}" alt="">
											</a>


										</div>
									</form>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 stl_full_width">
									<div class="row">
										<div class="left_cnt_product">
											<h3><a href="/ban-can-ho-times-city" class="text2line">{{$pro->name}}</a></h3>
											<div class="right_cnt_product">


												<small>{{$pro->unit_price}}</small>


											</div>
										</div>

									</div>
								</div>
							</div>
						</div>

					@endforeach

					</div>
					<div class="tzpagenavi-shop">
							{{$product->appends(['sortBy'=>$_GET['sortBy']])->links()}}
					</div>

				</div>
			</div>
		</div>
	</div>



</div>

@endsection