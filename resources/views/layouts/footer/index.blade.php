<footer class="footer bg-style" style="background: linear-gradient(#258a62db, #a5cc82), url(http://127.0.0.1:8000/frontend/images/img-1.jpg); 
background-repeat: no-repeat;
background-position: center;
background-size: cover;">
   <div class="container">
         <div class="footer-upper">
         <div class="row">
            <div class="item col-md-4 col-sm-6">
               <div class="footer-widget about-widget">
                     <a href="{{route('home')}}" class="logo-wrapper ">					
                     <img src="{{$setting->logo}}" alt="logo " loading="lazy">					
                     </a>
                     <p>
                     {{$setting->webname}}
                     </p>
                     <div class="link_btn">
                     <a href="{{route('lienHe')}}" class="button-style-one">Liên hệ</a>
                     </div>
                     <ul class="list-menu list-showroom">
                     <li class="clearfix">Địa chỉ: {{$setting->address1}}</li>
                     <li class="clearfix">Email: <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></li>
                     <li class="clearfix">Điện thoại: <a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></li>
                     </ul>
               </div>
            </div>
            <div class="item col-md-2 col-sm-6">
               <div class="footer-widget quick-links">
                     <h3 class="title">Về chúng tôi</h3>
                     <ul>
                     <li><a href="{{route('home')}}">Trang chủ</a></li>
                     <li><a href="{{route('allProduct')}}">Sản phẩm</a></li>
                     <li><a href="{{route('listService')}}">Công trình thi công</a></li>
                     <li><a href="{{route('allListBlog')}}">Tin tức</a></li>
                     <li><a href="{{route('lienHe')}}">Liên hệ</a></li>
                     </ul>
               </div>
            </div>
            <div class="item col-md-3 col-sm-6">
               <div class="footer-widget our-doctor">
                     <h3 class="title">Fanpage</h3>
                     <div class="fb-page" 
                     data-href="{{$setting->facebook}}"
                     data-width="380" 
                     data-hide-cover="false"
                     data-show-facepile="false"></div>
               </div>
            </div>
            <div class="item col-md-3 col-sm-6">
               <div class="footer-widget our-doctor">
                  <h3 class="title">Google map</h3>
                     {!!$setting->iframe_map!!}
               </div>
            </div>
         </div>
         </div>
   </div>
   <div class="container">
         <!--Footer Bottom-->
         <div class="footer-bottom">
         <div class="pull-left">
            <div class="copyright-text">
               <span>© Bản quyền thuộc về <b>{{$setting->company}}</b> <span class="fot-line">|</span> Cung cấp bởi 
               <a href="https://sbtsoftware.vn/" rel="nofollow" title="SBT" target="_blank">SBT</a>
               </span>
            </div>
         </div>
         <div class="pull-right">
            <div class="social-links pull-right">
               <ul class="inline-list social-icons">
                     <li>
                     <a class="icon-fallback-text" href="#">
                     <span class="fa fa-twitter" aria-hidden="true"></span>
                     </a>
                     </li>
                     <li>
                     <a class="icon-fallback-text" href="{{$setting->facebook}}">
                     <span class="fa fa-facebook" aria-hidden="true"></span>
                     </a>
                     </li>
                     <li>
                     <a class="icon-fallback-text" href="#" rel="publisher">
                     <span class="fa fa-google-plus" aria-hidden="true"></span>
                     </a>
                     </li>
                     <li>
                     <a class="icon-fallback-text" href="#">
                     <span class="fa fa-instagram" aria-hidden="true"></span>
                     </a>
                     </li>
                     <li>
                     <a class="icon-fallback-text" href="#">
                     <span class="fa fa-youtube" aria-hidden="true"></span>
                     </a>
                     </li>
               </ul>
            </div>
         </div>
         </div>
   </div>
</footer>