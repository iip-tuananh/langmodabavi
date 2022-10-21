@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
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
                  <li><strong ><span > {{$title}}</strong></li>
               </ul>
            </div>
         </div>
      </div>
   </section>
</div>
<div class="container">
   <div class="row">
      <section class="main_container collection col-lg-9 col-md-9 ">
         <div class="category-products products">
            <div class="sortPagiBar margin-bottom-30">
               <div class="row">
                  <div class="col-xs-5 col-sm-8 col-lg-9 hidden-xs">
                     <div class="view-mode">
                        <h1 class="collection-title margin-top-0 inline-block">
                           {{$title}}
                        </h1>
                        <div class="tt hidden-sm hidden-xs inline-block">
                           <span class="hidden-sm hidden-xs">
                           ({{count($list)}} sản phẩm)
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-lg-3 text-xs-left text-sm-right">
                  </div>
               </div>
            </div>
            <section class="products-view products-view-grid">
               <div class="row">
                  @foreach ($list as $product)
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     @include('layouts.product.item', ['product'=>$product])
                  </div>
                  @endforeach
               </div>
               <div class="text-xs-right">
                  <nav class="clearfix">
                     {{$list->links()}}
                  </nav>
               </div>
            </section>
         </div>
      </section>
      <aside class="dqdt-sidebar sidebar right left-content col-lg-3 col-md-3 ">
         <aside class="aside-item sidebar-category collection-category">
            <div class="aside-title">
               <h2 class="title-head margin-top-0"><span>Danh mục</span></h2>
            </div>
            <div class="aside-content">
               <div class="nav-category navbar-toggleable-md">
                  <ul class="nav navbar-pills">
                     @foreach ($categoryhome as $cate)
                     <li class="nav-item">
                        <i class="fa fa-folder-o"></i>
                        <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}" class="nav-link">{{languageName($cate->name)}} </a>
                        @if (count($cate->typeCate) > 0)
                        <i class="fa fa-angle-down"></i>
                        <ul class="dropdown-menu">
                           @foreach ($cate->typeCate as $type)
                           <li class="nav-item">
                              <i class="fa fa-caret-right"></i>
                              <a class="nav-link" href="{{route('allListProType', ['cate'=>$type->cate_slug, 'type'=>$type->slug])}}">{{languageName($type->name)}} </a>
                           </li>
                           @endforeach
                        </ul>
                        @endif
                     </li>
                     @endforeach
                  </ul>
               </div>
            </div>
         </aside>
         <div class="aside-item aside-mini-list-product">
            <div >
               <div class="aside-title margin-top-5">
                  <h2 class="title-head">
                     Sản phẩm nổi bật
                  </h2>
               </div>
               <div class="aside-content related-product">
                  <div class="product-mini-lists">
                     <div class="products">
                        @foreach ($hotProduct as $product)
                        @php
                           $image = json_decode($product->images);
                        @endphp
                        <div class="row row-noGutter">
                           <div class="col-sm-12">
                              <div class="product-mini-item clearfix  ">
                                 <a href="{{route('detailProduct', ['slug'=>$product->slug])}}" class="product-img">
                                 <img src="{{$image[0]}}" alt="{{languageName($product->name)}}" loading="lazy">
                                 </a>
                                 <div class="product-info">
                                    <h3><a href="{{route('detailProduct', ['slug'=>$product->slug])}}" title="{{languageName($product->name)}}" class="product-name">{{languageName($product->name)}}</a></h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                        @endforeach
                     </div>
                     <!-- /.products -->
                  </div>
               </div>
            </div>
         </div>		
      </aside>
      <div id="open-filters" class="open-filters hidden-lg hidden-md">
         <i class="fa fa-align-right"></i>
         <span>Lọc</span>
      </div>
   </div>
</div>
@endsection
