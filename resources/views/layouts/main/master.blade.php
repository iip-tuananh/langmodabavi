<!DOCTYPE html>
<html lang="vi">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <title>@yield('title')</title>
   <meta name="description" content="">
   <meta name="keywords" content="@yield('title')"/>
   <meta name="robots" content="noodp,index,follow" />
   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <meta name="description" content="@yield('description')" />
   <link rel="canonical" href="{{url()->current()}}" />
   <meta property="og:locale" content="vi_VN" />
   <meta property="og:type" content="article" />
   <meta property="og:title" content="@yield('title')" />
   <meta property="og:description" content="@yield('description')" />
   <meta property="og:url" content="{{url()->current()}}" />
   <meta property="og:site_name" content="ahometh.vn" />
   <meta property="og:updated_time" content="2021-08-28T22:06:30+07:00" />
   <meta property="og:image" content="@yield('image')" />
   <meta property="og:image:secure_url" content="@yield('image')" />
   <meta property="og:image:width" content="598" />
   <meta property="og:image:height" content="333" />
   <meta property="og:image:alt" content="ahome-noi-that" />
   <meta property="og:image:type" content="image/jpeg" />
   <meta name="twitter:card" content="summary_large_image" />
   <meta name="twitter:title" content="@yield('title')" />
   <meta name="twitter:description" content="@yield('description')" />
   <meta name="twitter:image" content="@yield('image')" />
   <meta name="google-site-verification" content="KrGH4A7buUZUBA7M1v7_rHfxbgTgWNKI0vMiQlwS8So" />
   <!-- Fav Icon -->
   <link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
   <!-- Header JS -->
   <script src="{{asset('frontend/js/jquery-2.2.3.min.js')}}" type="text/javascript"></script>
   <!-- Bizweb javascript customer -->
   <!-- ================= Google Fonts ================== -->
   <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet" type="text/css" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700;900&display=swap" rel="stylesheet">
   <!-- Plugin CSS -->
   <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
   <link href="{{asset('frontend/css/plugin.scss.css')}}" rel="stylesheet" type="text/css" />
   <!-- Build Main CSS -->
   <link rel="preload" as='style' type="text/css" href="{{asset('frontend/css/base.scss.css')}}">
   <link rel="preload" as='style' type="text/css" href="{{asset('frontend/css/style.scss.css')}}">
   <link rel="preload" as='style' type="text/css" href="{{asset('frontend/css/electric.scss.css')}}">
   <link rel="preload" as='style' type="text/css" href="{{asset('frontend/css/electric-respon.scss.css')}}">
   <link rel="preload" as='style' type="text/css" href="{{asset('frontend/css/responsive.scss.css')}}">
   <link href="{{asset('frontend/css/base.scss.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('frontend/css/style.scss.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('frontend/css/electric.scss.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('frontend/css/electric-respon.scss.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('frontend/css/responsive.scss.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
   <!-- Main content -->
   @include('layouts.header.index')
   @yield('content')
   @include('layouts.footer.index')
   <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
   <!-- Bizweb javascript -->
   <!-- Plugin JS -->
   <!-- Add to cart -->
   <div class="ajax-load">
      <span class="loading-icon">
            <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
            <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
               <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
            </rect>
            <rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
               <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
            </rect>
            <rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
               <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
            </rect>
            </svg>
      </span>
   </div>
   <div class="loading awe-popup">
      <div class="overlay"></div>
      <div class="loader" title="2">
            <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
            <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
               <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
            </rect>
            <rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
               <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
            </rect>
            <rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
               <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
               <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
            </rect>
            </svg>
      </div>
   </div>
   <div id="popup-cart" class="modal fade" role="dialog">
      <div id="popup-cart-desktop" class="clearfix">
            <div class="title-popup-cart">
            <i class="fa fa-check" aria-hidden="true"></i> Bạn đã thêm <span class="cart-popup-name" style="color: red"></span> vào giỏ hàng
            </div>
            <div class="title-quantity-popup">
            <a href="/cart">
            Giỏ hàng của bạn (<span class="cart-popup-count"></span> sản phẩm) <i class="fa fa-caret-right" aria-hidden="true"></i>
            </a>
            </div>
            <div class="content-popup-cart">
            <div class="thead-popup">
               <div style="width: 54%;" class="text-left">Sản phẩm</div>
               <div style="width: 15%;" class="text-center">Đơn giá</div>
               <div style="width: 15%;" class="text-center">Số lượng</div>
               <div style="width: 15%;" class="text-center">Thành tiền</div>
            </div>
            <div class="tbody-popup">
            </div>
            <div class="tfoot-popup">
               <div class="tfoot-popup-1 clearfix">
                  <div class="pull-left popup-ship">
                        <p>Giao hàng trên toàn quốc</p>
                  </div>
                  <div class="pull-right popup-total">
                        <p>Thành tiền: <span class="total-price"></span></p>
                  </div>
               </div>
               <div class="tfoot-popup-2 clearfix">
                  <a class="button btn-proceed-checkout" title="Tiến hành đặt hàng" href="/checkout"><span>Tiến hành đặt hàng</span></a>
                  <a class="button btn-continue" title="Tiếp tục mua hàng" onclick="$('#popup-cart').modal('hide');"><span><span><i class="fa fa-caret-left" aria-hidden="true"></i> Tiếp tục mua hàng</span></span></a>
               </div>
            </div>
            </div>
            <a title="Close" class="quickview-close close-window" href="javascript:;" onclick="$('#popup-cart').modal('hide');"><i class="fa  fa-times-circle"></i></a>
      </div>
   </div>
   <div id="myModal" class="modal fade" role="dialog"></div>
   <script>
      document.addEventListener("DOMContentLoaded",function(){for(var t=document.getElementsByTagName("INPUT"),e=0;e<t.length;e++)t[e].oninvalid=function(t){t.target.setCustomValidity(""),t.target.validity.valid||(console.log(t.srcElement),"email"==t.srcElement.type?t.target.setCustomValidity("Email không đúng định dạng"):t.target.setCustomValidity("Không được bỏ trống"))},t[e].oninput=function(t){t.target.setCustomValidity("")}}),document.addEventListener("DOMContentLoaded",function(){for(var t=document.getElementsByTagName("textarea"),e=0;e<t.length;e++)t[e].oninvalid=function(t){t.target.setCustomValidity(""),t.target.validity.valid||(console.log(t.srcElement),"email"==t.srcElement.type?t.target.setCustomValidity("Email không đúng định dạng"):t.target.setCustomValidity("Không được bỏ trống"))},t[e].oninput=function(t){t.target.setCustomValidity("")}});
   </script>
   <script src="{{asset('frontend/js/jquery.fancybox.pack.js')}}" type="text/javascript"></script>		
   <script src="{{asset('frontend/js/isotope.js')}}" type="text/javascript"></script>
   <script src="{{asset('frontend/js/custom.js')}}" type="text/javascript"></script>
   <!-- Main JS -->
   <script src="{{asset('frontend/js/main.js')}}" type="text/javascript"></script>
   <!-- Product detail JS,CSS -->
   <div id="fb-root"></div>
   <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="Djvg5SF2"></script>
</body>
</html>