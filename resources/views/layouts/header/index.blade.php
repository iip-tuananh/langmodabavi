{{-- <div class="header-top">
   <div class="container clearfix">
         <div class="row">
         <!--Top Left-->
         <div class="top-left pull-left col-md-6">
            <ul class="links-nav clearfix">
               <li>
                     <a href="tel:1900 6750"><span class="fa fa-phone"></span> Gọi: 1900 6750</a>
               </li>
               <li>
                     <a href="mailto:support@sapo.vn"><span class="fa fa-envelope"></span> Email: support@sapo.vn</a>
               </li>
            </ul>
         </div>
         <!--Top Right-->
         <div class="top-right pull-right col-md-6">
            <div class="social-links clearfix">
               <ul class="inline-list a-right">
                     <li><i class="fa fa-unlock-alt"></i> <a href="/account/register">Đăng ký</a></li>
                     <li><i class="fa fa-user"></i> <a href="/account/login">Đăng nhập</a></li>
                     <li class="search">
                     <a href="javascript:;"><i class="fa fa-search"></i></a>
                     <div class="header_search search_form">
                        <form class="input-group search-bar search_form" action="/search" method="get" role="search">		
                           <input type="search" name="query" value="" placeholder="Tìm kiếm sản phẩm... " class="input-group-field st-default-search-input search-text" autocomplete="off">
                           <span class="input-group-btn">
                           <button class="btn icon-fallback-text">
                           <i class="fa fa-search"></i>
                           </button>
                           </span>
                        </form>
                     </div>
                     </li>
               </ul>
            </div>
         </div>
         </div>
   </div>
</div> --}}
<!-- Header Top End -->
<section class="mainmenu-area stricky">
   <div class="container">
         <div class="row">
         <div class="col-md-3">
            <div class="main-logo">
               <a href="{{route('home')}}" class="logo-wrapper ">					
               <img src="{{$setting->logo}}" alt="logo " loading="lazy" style="height: 100px;">					
               </a>
            </div>
         </div>
         <div class="col-md-7 menu-column">
            <nav class="main-menu">
               <div class="navbar-header">     
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
               </div>
               <div class="navbar-collapse collapse clearfix">
                     <ul class="navigation clearfix">
                     <li class="{{ Route::currentRouteName() == 'home' ? 'current' : '' }}"><a href="{{route('home')}}">Trang chủ</a></li>
                     <li class="{{ Route::currentRouteName() == 'aboutUs' ? 'current' : '' }}"><a href="{{route('aboutUs')}}">Giới thiệu</a></li>
                     <li class="dropdown {{ Route::currentRouteName() == 'allProduct' || Route::currentRouteName() == 'allListProCate' || Route::currentRouteName() == 'allListProType' ? 'current' : '' }}">
                        <a href="{{route('allProduct')}}">Sản phẩm <i class="fa fa-angle-right"></i></a>
                        <ul>
                           @foreach ($categoryhome as $cate)
                           <li>
                              <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}">{{languageName($cate->name)}} <i class="fa {{count($cate->typeCate) > 0 ? 'fa-angle-right' : ''}}"></i></a>
                              @if (count($cate->typeCate) > 0)
                                 <ul class="dropdown dropdown-lv3" style="display: none;">
                                    @foreach ($cate->typeCate as $type)
                                    <li>
                                       <a href="{{route('allListProType', ['cate'=>$type->cate_slug, 'type'=>$type->slug])}}">{{languageName($type->name)}}</a>
                                    </li>
                                    @endforeach
                                 </ul>
                              @endif
                           </li>
                           @endforeach
                        </ul>
                     </li>
                     <li class="{{ Route::currentRouteName() == 'listService' ? 'current' : '' }}"><a href="{{route('listService')}}">Công trình thi công</a></li>
                     <li class="dropdown {{ Route::currentRouteName() == 'allListBlog' || Route::currentRouteName() == 'listCateBlog' ? 'current' : '' }}">
                        <a href="{{route('allListBlog')}}">Tin tức <i class="fa fa-angle-right"></i></a>
                        <ul>
                           @foreach ($blogCate as $cate)
                           <li><a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}">{{languageName($cate->name)}}</a></li>
                           @endforeach
                        </ul>
                     </li>
                     <li class="{{ Route::currentRouteName() == 'lienHe' ? 'current' : '' }}"><a href="{{route('lienHe')}}">Liên hệ</a></li>
                     </ul>
                     <ul class="mobile-menu clearfix hidden-lg hidden-md">
                     <li><a href="{{route('home')}}">Trang chủ</a></li>
                     <li><a href="{{route('aboutUs')}}">Giới thiệu</a></li>
                     <li class="dropdown">
                        <a href="{{route('allProduct')}}">Sản phẩm</a>
                        <ul>
                           @foreach ($categoryhome as $cate)
                           <li>
                              <a href="{{route('allListProCate', ['cate'=>$cate->slug])}}">{{languageName($cate->name)}}</a>
                              @if (count($cate->typeCate) > 0)
                                 <ul class="dropdown dropdown-lv3" style="display: none;">
                                    @foreach ($cate->typeCate as $type)
                                       <li>
                                          <a href="{{route('allListProType', ['cate'=>$type->cate_slug, 'type'=>$type->slug])}}">{{languageName($type->name)}}</a>
                                       </li>
                                    @endforeach
                                 </ul>
                                 <div class="dropdown-btn"></div>
                              @endif
                           </li>
                           @endforeach
                        </ul>
                     </li>
                     <li><a href="{{route('listService')}}">Công trình thi công</a></li>
                     <li class="dropdown">
                        <a href="{{route('allListBlog')}}">Tin tức</a>
                        <ul>
                           @foreach ($blogCate as $cate)
                           <li><a href="{{route('listCateBlog', ['slug'=>$cate->slug])}}">{{languageName($cate->name)}}</a></li>
                           @endforeach
                        </ul>
                     </li>
                     <li><a href="{{route('lienHe')}}">Liên hệ</a></li>
                     </ul>
               </div>
            </nav>
         </div>
         <div class="col-md-2">
            <div class="right-area">
               <div class="link_btn float_right">
                     <a href="tel:{{$setting->phone1}}" class="thm-btn zoom-in-out-box">Gọi ngay</a>
               </div>
            </div>
         </div>
         </div>
         <style>
            .zoom-in-out-box {
               animation: zoom-in-zoom-out 2s ease infinite;
               }

               @keyframes zoom-in-zoom-out {
               0% {
                  transform: scale(1, 1);
               }
               50% {
                  transform: scale(1.2, 1.2);
               }
               100% {
                  transform: scale(1, 1);
               }
            }
         </style>
   </div>
</section>