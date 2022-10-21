@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{($detail_service->description)}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="fixbg-breadcrumb">
	<section class="bread-crumb">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="breadcrumb" >
				<li class="home">
					<a   href="{{route('home')}}" ><span >Trang chủ</span></a>						
					<span><i class="fa fa-angle-right"></i></span>
				</li>
				<li >
					<a  href="{{route('listService')}}"><span >Công trình</span></a>	
					<span><i class="fa fa-angle-right"></i></span>
				</li>
				<li><strong >{{($detail_service->name)}}</strong></li>
				</ul>
			</div>
		</div>
	</div>
	</section>
</div>
<div class="container article-wraper">
	<div class="row">
	<section class="right-content col-lg-8 ">
		<div class="box-heading relative hidden">
			<h1 class="title-head page_title">{{($detail_service->name)}}</h1>
		</div>
		<article class="article-main" itemscope itemtype="http://schema.org/Article">
			<div class="row">
				<div class="col-lg-12">
				<div class="article-details">
					<div class="article-image relative">
						<div class="date">
							<h5>{{date('d', strtotime($detail_service->created_at))}}</h5>
							<p>Th {{date('m', strtotime($detail_service->created_at))}}</p>
						</div>
						<a href="#">
						<img itemprop="image" class="img-fluid" src="{{$detail_service->image}}" alt="{{($detail_service->name)}}">
						</a>
					</div>
					<h1 class="article-title"><a href="#" itemprop="name">{{($detail_service->name)}}</a></h1>
					<div class="article-content" itemprop="description">
						<div class="rte">
							{!!languageName($detail_service->content)!!}
						</div>
					</div>
				</div>
				</div>
				<div class="col-xs-12">
				<div class="row row-noGutter tag-share">
					<div class="col-xs-12 col-sm-6 tag_article ">		
					</div>
					<div class="col-xs-12 col-sm-6 a-right">
						<div class="social-media" data-permalink="{{route('serviceDetail', ['slug'=>$detail_service->slug])}}">
							Chia sẻ: 
							<a target="_blank" href="//www.facebook.com/sharer.php?u={{route('serviceDetail', ['slug'=>$detail_service->slug])}}" class="share-facebook" title="Chia sẻ lên Facebook">
							<i class="fa fa-facebook"></i>
							</a>
							<a target="_blank" href="//twitter.com/share?text={{($detail_service->name)}}&amp;url={{route('serviceDetail', ['slug'=>$detail_service->slug])}}" class="share-twitter" title="Chia sẻ lên Twitter">
							<i class="fa fa-twitter"></i>
							</a>
							<a target="_blank" href="//pinterest.com/pin/create/button/?url={{route('serviceDetail', ['slug'=>$detail_service->slug])}}&amp;media=http://bizweb.dktcdn.net/thumb/1024x1024/100/246/606/articles/b-5.jpg?v=1502891301513&amp;description={{($detail_service->name)}}" class="share-pinterest" title="Chia sẻ lên pinterest">
							<i class="fa fa-pinterest"></i>
							</a>
							<a target="_blank" href="//plus.google.com/share?url={{route('serviceDetail', ['slug'=>$detail_service->slug])}}" class="share-google" title="+1">
							<i class="fa fa-google-plus"></i>
							</a>
						</div>
					</div>
				</div>
				</div>
			</div>
		</article>
	</section>
	<aside class="left left-content col-md-4 ">
		<aside class="blog-aside aside-item sidebar-category blog-category">
		<div class="aside-title">
			<h2 class="title-head"><span>Danh mục</span></h2>
		</div>
		<div class="aside-content">
			<div class="nav-category  navbar-toggleable-md" >
				<ul class="nav navbar-pills">
					<li class="nav-item">
					<i class="fa  fa-angle-right"></i>
					<a class="nav-link" href="{{route('home')}}">Trang chủ</a>
					</li>
					<li class="nav-item">
					<i class="fa  fa-angle-right"></i>
					<a href="{{route('allProduct')}}" class="nav-link">Sản phẩm</a>
					<i class="fa fa-angle-down" ></i>
					<ul class="dropdown-menu">
						@foreach ($categoryhome as $cate)
						<li class="dropdown-submenu nav-item">
							<i class="fa  fa-angle-right"></i>
							<a class="nav-link" href="{{route('allListProCate', ['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
							@if (count($cate->typeCate) > 0)
							<i class="fa fa-angle-down" ></i>
							<ul class="dropdown-menu">
								@foreach ($cate->typeCate as $type)
								<li class="nav-item">
								<i class="fa  fa-angle-right"></i>
								<a class="nav-link" href="{{route('allListProType', ['cate'=>$type->cate_slug, 'type'=>$type->slug])}}">{{languageName($type->name)}}</a>
								</li>
								@endforeach
							</ul>
							@endif
						</li>
						@endforeach
					</ul>
					</li>
					<li class="nav-item">
					<i class="fa  fa-angle-right"></i>
					<a class="nav-link" href="{{route('listService')}}">Công trình thi công</a>
					</li>
					<li class="nav-item">
					<i class="fa  fa-angle-right"></i>
					<a href="{{route('allListBlog')}}" class="nav-link">Tin tức</a>
					<i class="fa fa-angle-down" ></i>
					<ul class="dropdown-menu">
						@foreach ($blogCate as $cate)
						<li class="nav-item">
							<i class="fa  fa-angle-right"></i>
							<a class="nav-link" href="{{route('listCateBlog', ['slug'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
						</li>
						@endforeach
					</ul>
					</li>
					<li class="nav-item">
					<i class="fa  fa-angle-right"></i>
					<a class="nav-link" href="{{route('lienHe')}}">Liên hệ</a>
					</li>
				</ul>
			</div>
		</div>
		</aside>
		<div class="blog-aside aside-item">
		<div >
			<div class="aside-title">
				<h2 class="title-head">Tin tức nổi bật</h2>
			</div>
			<div class="aside-content">
				<div class="blog-list blog-image-list">
					@foreach ($hotBlogs as $blog)
					<div class="loop-blog">
					<div class="name-right">
						<h3><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}">{{languageName($blog->title)}}</a></h3>
					</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		</div>
	</aside>
	</div>
</div>
@endsection