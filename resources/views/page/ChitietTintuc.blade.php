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
			</ul>
		</div>
	</div>

<section class="tzblog-wrap">
	<div class="container">
		<div class="row flx">
			<div id="cate_atc" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 tzshop-aside">
				
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
								@foreach ($typenews as $type)
								<li class="li_lv1"> <a href="{{route('TypeNews',[$type->id,'sortBy'=>'default'])}}">{{$type->name}}</a> <span class="sub_minus"></span>
								</li>
								@endforeach
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
							@foreach($newNoiBat as $tintuc)
							<li style="margin: 15px 0px;padding-bottom: 15px;">
								<div class="as_bestsellers_thumb">
									<a href="{{route('news-detail',$tintuc->id)}}" title="{{$tintuc->title}}">
										
										<img alt="{{$tintuc->title}}" src="images/{{$tintuc->image}}">
										
									</a>
								</div>
								<div class="as_bestsellers_content">
									<h3><a title="{{$tintuc->title}}" href="{{route('news-detail',$tintuc->id)}}">{{$tintuc->title}}</a></h3>
									<div class="post-date">{{date("d/m/Y",strtotime($tintuc->created_at))}}</div>
								</div>
							</li>
							@endforeach
						</ul>
				</aside>
			</div>
			<div id="content_atc" class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<div class="tzpost-content">
					<h2>{{$newDetail[0]->title}}</h2>
					<div class="infor_article post-date">
						<p style="color: #bda87f;"><i class="fa fa-user" ></i>{{$newDetail[0]->full_name}} <i class="fa fa-clock-o" ></i>{{$newDetail[0]->created_at}}</p>
					</div>
					<p style="text-align: center;"><img src="images/{{$newDetail[0]->image}}" /></p>

					<p style="text-align: justify;">{{$newDetail[0]->content}}</p>
				</div>
{{-- 				<div class="tag_article">
					
				</div>
				<div class="social-media media-icon">
					<ul>
						<li>
							<a class="color-tooltip facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=https://mendover-theme-1.bizwebvietnam.net/noi-that-can-ho-voi-nhung-mau-sac-tuong-phan&t=" data-toggle="tooltip" title="" data-original-title="Facebook">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<li>
							<a  class="color-tooltip twitter" target="_blank" data-toggle="tooltip" title="" href="http://twitter.com/share?url=https://mendover-theme-1.bizwebvietnam.net/noi-that-can-ho-voi-nhung-mau-sac-tuong-phan&text=&via=TWITTER_NAME" data-original-title="Twitter">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a  class="color-tooltip google-plus" target="_blank" data-toggle="tooltip" title="" href="https://plus.google.com/share?url=https://mendover-theme-1.bizwebvietnam.net/noi-that-can-ho-voi-nhung-mau-sac-tuong-phan" data-original-title="Google-plus">
								<i class="fa fa-google-plus"></i>
							</a>
						</li>
						<li>
							<a  class="color-tooltip dribbble" target="_blank" data-toggle="tooltip" title="" href="http://www.pinterest.com/pin/create/button/?url=https://mendover-theme-1.bizwebvietnam.net/noi-that-can-ho-voi-nhung-mau-sac-tuong-phan&description=&media=" data-original-title="instagram">
								<i class="fa fa-instagram"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="tzcomments-area">
					
					
					<h3 class="tz-title-comment">5 Bình luận</h3>
					
					<ol class="comment-list">
						
						<li>
							<div class="comment-body">
								<div class="comment-content">
									<strong>Nguyễn Trần Diễm Thị Trà My </strong>
									<span class="comment-metadata">
										01/09/2016
										<a href="#respond">Trả lời</a>
									</span>
									<p>a</p>
								</div><!--comment-content -->
							</div><!--comment-body -->
						</li>
						
						<li>
							<div class="comment-body">
								<div class="comment-content">
									<strong>Nguyễn Trần Diễm Thị Trà My </strong>
									<span class="comment-metadata">
										01/09/2016
										<a href="#respond">Trả lời</a>
									</span>
									<p>a</p>
								</div><!--comment-content -->
							</div><!--comment-body -->
						</li>
						
						<li>
							<div class="comment-body">
								<div class="comment-content">
									<strong>Nguyễn Trần Diễm Thị Trà My </strong>
									<span class="comment-metadata">
										01/09/2016
										<a href="#respond">Trả lời</a>
									</span>
									<p>tuyệt vời cho không gian.
Tời
Bài viết thật tuyệt vời</p>
								</div><!--comment-content -->
							</div><!--comment-body -->
						</li>
						
						<li>
							<div class="comment-body">
								<div class="comment-content">
									<strong>Nguyễn Trần Diễm Thị Trà My </strong>
									<span class="comment-metadata">
										01/09/2016
										<a href="#respond">Trả lời</a>
									</span>
									<p>tuyệt vời cho không gian.
TAGS :
   
1 Bình luận
KHÁCH
15/04/2016 Trả lời
Bài viết thật tuyệt vời</p>
								</div><!--comment-content -->
							</div><!--comment-body -->
						</li>
						
					</ol>
					
					<div class="tzpagenavi-shop">
	<ul>
		
		
		
		
		<li class="active"><a href="#" style="pointer-events:none">1</a></li>
		
		
		
		
		<li><a href="/noi-that-can-ho-voi-nhung-mau-sac-tuong-phan?page=2">2</a></li>
		
		                
		
		<li><a href="/noi-that-can-ho-voi-nhung-mau-sac-tuong-phan?page=2" title="2"><i class="fa fa-angle-right" ></i></a></li>
		                  
	</ul>
</div>
					
					
					
					<h3 class="tz-title-comment">VIẾT BÌNH LUẬN CỦA BẠN:</h3>

					<div id="respond" class="comment-respond">				
						<form accept-charset='UTF-8' action='/posts/noi-that-can-ho-voi-nhung-mau-sac-tuong-phan/comments' id='article_comments' method='post'>
<input name='FormType' type='hidden' value='article_comments' />
<input name='utf8' type='hidden' value='true' />
						
 --}}
						
						<div class="row">
							<div style="margin-bottom:15px;" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="to_comment">
								<label>Họ và tên<span class="required">*</span></label>
								<input type="text" class=" form-control " id="user" name="Author" value="">
							</div>
							<div style="margin-bottom:15px;" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<label>Email<span class="required">*</span></label>
								<input class="form-control "  type="text" id="email" name="Email" value="">
							</div>
						</div>
						<label>Viết bình luận<span class="required">*</span></label>
						<textarea rows="5" cols="50" style="min-height: 100px;" id="comment" class="form-control " title="Bình luận" name="Body"></textarea>
						<button type="submit" value="gửi bình luận" class="button_height_44" style="margin-top:20px;">Gửi bình luận</button>
						</form>
					</div>
					
				</div>	
			</div>
		</div>
	</div>
</section><!--end class tzblog-wrap-->
</div>
@endsection