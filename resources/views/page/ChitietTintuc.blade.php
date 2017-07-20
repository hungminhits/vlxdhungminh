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
										
										<img alt="{{$tintuc->title}}" src="/	images/{{$tintuc->image}}">
										
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

					<p style="text-align: justify;">{!!html_entity_decode($newDetail[0]->content)!!}</p>
				</div>
						
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