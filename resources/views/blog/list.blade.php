@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
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
                  <li><strong >{{$title_page}}</strong></li>
               </ul>
            </div>
         </div>
      </div>
   </section>
</div>
<div class="container">
   <div class="row">
      <section class="right-content col-md-8 ">
         <div class="box-heading relative hidden">
            <h1 class="title-head page_title">{{$title_page}}</h1>
         </div>
         <section class="list-blogs blog-main blog-latest-news">
            <div class="row">
               @foreach ($blogs as $blog)
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="item">
                     <figure class="image-box">
                        <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}">
                        <img src="{{$blog->image}}" alt="{{languageName($blog->title)}}" loading="lazy">
                        </a>
                     </figure>
                     <div class="date">
                        <h5>{{date('d', strtotime($blog->created_at))}}</h5>
                        <p>Th {{date('m', strtotime($blog->created_at))}}</p>
                     </div>
                     <h3><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}">{{languageName($blog->title)}}</a></h3>
                     <p class="blog-item-summary"> {{languageName($blog->description)}}</p>
                  </div>
               </div>
               @endforeach
            </div>
         </section>
         <div class="row">
            <div class="col-xs-12 text-xs-left">
               <nav class="clearfix">
                  {{$blogs->links()}}
               </nav>
            </div>
         </div>
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