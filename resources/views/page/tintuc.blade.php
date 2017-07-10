@extends('master')
@section('content')
<div class="fvc" style="float:left;width:100%;">
	
	<div class="banner_page_list">
		
		<h1>Tin tức</h1>
		
	</div>
	<div class="breadcrumbs">
		<div class="container">
			<ul>
				<li class="home"> <a href="/" title="Trang chủ">Trang chủ &nbsp;</a></li>
				<!-- blog -->
				
				<li class="active"><strong>Tin tức</strong></li>
				

				<!-- article -->
				
				<!-- current_tags -->
				





				
			</ul>
		</div>
	</div>

	<section class="tzblog-wrap">
		<div class="container">
			<div class="row flx">
				<div id="cate" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 tzshop-aside">
					
					<div class="box_collection_pr">
						<div class="title_st">
							<h2>
								<div class="show_nav_bar1"><i class="fa fa-bars"></i></div>
								Danh mục tin tức
							</h2>
							<span class="arrow_title visible-md visible-md"></span>
							<div class="show_nav_bar hidden-lg hidden-md"></div>
						</div>
						<div class="list_item_collection show1">
							<ul>
								
							</ul>
						</div>
					</div>
					
					
					<aside class="widget_bestsellers box_collection_pr">
						<div class="title_nost">
							<h2>
								TIN MỚI CẬP NHẬT
							</h2>
						</div>
						<ul>
							@foreach($new as $tintuc)
							<li style="margin: 15px 0px;padding-bottom: 15px;">
								<div class="as_bestsellers_thumb">
									<a href="/noi-that-can-ho-voi-nhung-mau-sac-tuong-phan" title="{{$tintuc->title}}">
										
										<img alt="{{$tintuc->title}}" src="images/{{$tintuc->image}}">
										
									</a>
								</div>
								<div class="as_bestsellers_content">
									<h3><a title="{{$tintuc->title}}" href="/noi-that-can-ho-voi-nhung-mau-sac-tuong-phan">{{$tintuc->title}}</a></h3>
									<div class="post-date">{{date("d/m/Y",strtotime($tintuc->created_at))}}</div>
								</div>
							</li>
							@endforeach
						</ul>
					</aside>
					
				</div>
				<div id="list_blg" class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					
					<div class="row gird-margin">
						@foreach($news as $new)
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<article class="blog-gird-item blog-item blog-gird-item3">
								<div class="pageblog-thumb">
									
									<a href="/noi-that-can-ho-voi-nhung-mau-sac-tuong-phan" title="{{$new->title}}"><img alt="{{$new->title}}" src="images/{{$new->image}}"></a>
									
									<a title="{{$new->title}}" href="/noi-that-can-ho-voi-nhung-mau-sac-tuong-phan" class="tzblog-view"><i class="fa fa-search"></i></a>
								</div>
								<h2><a href="/noi-that-can-ho-voi-nhung-mau-sac-tuong-phan">{{$new->title}}</a></h2>
								<span class="tzblog-meta">
									<em><i class="fa fa-user"></i>Nguyễn Tùng</em>
									<em><i class="fa fa-clock-o"></i>{{date("d/m/Y",strtotime($new->created_at))}}</em>
								</span>
								<div class="action-button-hiden" style="    text-align: left;">
									
									<p style="text-align: justify;">{{strstr($new->description, ".", true)}}...</p>
									
									<div class="quickviewbtn">
										<a style="margin:0px;padding: 13px 40px;" class="color-tooltip" data-toggle="tooltip" href="/noi-that-can-ho-voi-nhung-mau-sac-tuong-phan" title="Đọc tiếp">Đọc tiếp</a>
									</div>
								</div>
							</article>
						</div>
						@endforeach
					</div><!--end class row-->
					
					<div>{{$news->links()}}</div>
				</div>

			</div>
		</div><!--end class container-->
	</section><!--end class tzblog-wrap-->



</div>
@endsection