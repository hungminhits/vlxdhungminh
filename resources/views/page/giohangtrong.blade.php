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
			<section class="main-cart-page main-container col1-layout" style="padding-bottom: 300px">
				<div class="main container hidden-xs">
					<div class="col-main cart_desktop_page cart-page" style="min-height: auto;"><p class="hidden-xs-down">Không có sản phẩm nào trong giỏ hàng. Quay lại <a href="{!! url('/')!!}" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p></div>

				</div>
				<div class="cart-mobile hidden-md hidden-lg hidden-sm">
					<form action="/cart" method="post" novalidate="" class="margin-bottom-0">
						<div class="header-cart" style="background:#fff;">
							
							<div class="title-cart">
								<h3>Giỏ hàng của bạn</h3><p>(chưa có sản phẩm nào) nhấn vào cửa hàng <a href="{!! url('/')!!}" style="color: ">Cửa hàng</a> để mua hàng</p>
							</div>
							
						</div>

						<div class="header-cart-content" style="background:#fff;"></div>

					</form>

				</div>

			</section>
</div>
@endsection