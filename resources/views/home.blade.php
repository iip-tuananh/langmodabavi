@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<section class="awe-section-1">
   <div class="home-slider "  data-dot=true data-md-items='1' data-lg-items='1' data-sm-items='1' data-xs-items="1" data-margin='0'>
      @foreach ($banners as $banner)
      <div class="item">
         <picture>
            <source 
               media="(min-width: 1200px)"
               srcset="{{$banner->image}}" loading="lazy">
            <source 
               media="(min-width: 992px)"
               srcset="{{$banner->image}}" loading="lazy">
            <source 
               media="(min-width: 569px)"
               srcset="{{$banner->image}}" loading="lazy">
            <source 
               media="(min-width: 480px)"
               srcset="{{$banner->image}}" loading="lazy">
            <img class="lazyload" src="{{$banner->image}}" alt="{{$banner->title}}" loading="lazy"/>
         </picture>
      </div>
      @endforeach
   </div>
   <!-- /.products -->
   <script>
         $('.home-slider').slick({
            lazyLoad: 'ondemand',
            centerMode: false,
            focusOnSelect: true,
            dots: false,
            loop: false,
            dots: false,
            arrows: false,
            slidesToShow: 1,
            autoplay: true
         });
   </script>
</section>
<section class="awe-section-2">
   <div class="section section-service margin-top-40 margin-bottom-20">
         <div class="container">
         <div class="sec-title a-center">
            <h2 class="inline-block">Tiêu chí chất lượng</h2>
         </div>
         <div class="section-content">
            <div class="row">
               <div class="col-md-4 box-tieuchi">
                  <img src="{{url('frontend/images/img-1.jpg')}}" alt="" loading="lazy">
                  <div class="info-tieuchi">
                     <h4 class="text-center">SẢN PHẨM CAO CẤP</h4>
                     <p>ĐÁ MỸ NGHỆ HOÀNG NAM, sản phẩm, chất lượng, mẫu mã hoa văn và thương hiệu ĐÁ MỸ NGHỆ UY TÍN hàng đầu tại Việt Nam hiện nay. Với 30 năm xây dựng và phát triển (1990 – 2020), là doanh nghiệp kế thừa và phát huy truyền thống của ông cha để lại…</p>
                  </div>
               </div>
               <div class="col-md-4 box-tieuchi">
                  <img src="{{url('frontend/images/img-2.jpg')}}" alt="" loading="lazy">
                  <div class="info-tieuchi">
                     <h4 class="text-center">UY TÍN – CHẤT LƯỢNG</h4>
                     <p>Nhận thức sâu sắc vấn đề tâm linh và sự ảnh hưởng đến thương hiệu, tương lai của chúng tôi. Đá mỹ nghệ HOÀNG NAM luôn cam kết, đảm bảo và đặt Uy Tín – Chất lượng sản phẩm lên hàng đầu. Đá mỹ nghệ HOÀNG NAM – Giá trị bền vững mai sau! Hãy gọi cho chúng tôi!</p>
                  </div>
               </div>
               <div class="col-md-4 box-tieuchi">
                  <img src="{{url('frontend/images/img-3.jpg')}}" alt="" loading="lazy">
                  <div class="info-tieuchi">
                     <h4 class="text-center">GIÁ TUYỆT ĐỐI</h4>
                     <p>Với sự Uy Tín – Chất lượng của sản phẩm chúng tôi luôn đặt ở vị trí đầu tiên trong quá trình xây dựng THƯƠNG HIỆU. Sản phẩm, công trình của chúng tôi luôn có Giá thành tuyệt đối nhất với sản phẩm chất lượng nhất cho Quý khách hàng.</p>
                  </div>
               </div>
            </div>
         </div>
         </div>
   </div>
</section>
<section class="awe-section-3">
   <section class="about-us">
         <div class="container">
         <div class="sec-title">
            <h2>Về chúng tôi</h2>
         </div>
         <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12">
               <div class="about-info">
                     {!!$aboutUs->description!!}
               </div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
               <div class="prize-slider">
                  @foreach ($prizes as $item)
                  <div class="item">
                     <img src="{{$item->image}}" alt="" loading="lazy">
                  </div>
                  @endforeach
               </div>
            </div>
            <script>
               $('.prize-slider').slick({
                  lazyLoad: 'ondemand',
                  centerMode: false,
                  focusOnSelect: true,
                  dots: false,
                  loop: false,
                  dots: false,
                  arrows: false,
                  slidesToShow: 1,
                  autoplay: true
               });
            </script>
         </div>
         </div>
   </section>
</section>
<section class="awe-section-5">
   <!--call-to-action section-->
   <section class="call-to-action subscribe-intro">
         <div class="container">
         <div class="row">
            <div class="col-md-9">
               <h3>HÃY GỌI CHO CHÚNG TÔI ĐỂ ĐƯỢC BÁO GIÁ, TƯ VẤN CHI TIẾT</h3>
               <p>Đá Mỹ Nghệ HOÀNG NAM rất hân hạnh được tư vấn MIỄN PHÍ cho Quý khách hàng trên toàn quốc. Chúng tôi Rất hân hạnh được phục vụ và đón tiếp Quý khách hàng. Hãy Gọi cho chúng tôi ngay hôm nay để được ƯU ĐÃI tốt nhất.</p>
            </div>
            <div class="col-md-3">
               <a href="tel:{{$setting->phone1}}" class="thm-btn inverse pull-right">Liên hệ ngay</a>
            </div>
         </div>
         </div>
   </section>
</section>
<section class="awe-section-6">
   <section class="latest-projects text-center">
         <div class="container">
         <div class="sec-title">
            <h2>Các sản phẩm nổi bật</h2>
         </div>
         <ul class="post-filter list-inline">
            @foreach ($categoryhome as $key=>$cate)
            @if ($key == 0)
            <li class="product-tab active" data-id="{{$cate->id}}">
               <span>{{languageName($cate->name)}}</span>
            </li>
            @else
            <li class="product-tab" data-id="{{$cate->id}}">
               <span>{{languageName($cate->name)}}</span>
            </li>
            @endif
            @endforeach
            {{-- <li data-filter=".dien-dan-dung">
               <span>Điện dân dụng</span>
            </li>
            <li data-filter=".dien-cong-nghiep">
               <span>Điện công nghiệp</span>
            </li>
            <li data-filter=".he-thong-nuoc">
               <span>Hệ thống nước</span>
            </li> --}}
         </ul>
         <div class="row products-view-grid">
            @foreach ($categoryhome as $key=>$cate)
            @if ($key == 0)
            <div class=" product-layout product-layout-{{$cate->id}}">
               @foreach ($cate->product as $product)
               <div class="col-md-4 col-sm-6 col-xs-12">
                  @include('layouts.product.item', ['product'=>$product])
               </div>
               @endforeach
            </div>
            @else
            <div class=" product-layout product-layout-{{$cate->id}}">
            </div>
            @endif
            @endforeach
         </div>
         <!-- /.row -->
         </div>
         <!-- /.container -->
   </section>
   <script>
      $('.post-filter .product-tab span').on('click',function() {
         var id = $(this).parent().data('id');
         $('.product-layout').addClass('hidden');
         $('.product-layout-'+id).removeClass('hidden');
         console.log('123');
         $.ajax({
            type: 'post',
            url: '/category/filter',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {id:id},
            success :function(data){
               $('.product-layout-'+id).html(data.html);
            }
         })
      })
   </script>
   <!-- /.latest-gallery -->
</section>
{{-- <section class="awe-section-2">
   <div class="section section-service margin-top-40 margin-bottom-20">
         <div class="container">
         <div class="sec-title a-center">
            <h2 class="inline-block"><a href="/san-pham-noi-bat">Sản phẩm nổi bật</a></h2>
         </div>
         <div class="section-content">
            <div class="products products-view-grid">
               <div class="products slickprolist products-view-grid " data-lg-items="4"  data-md-items="3" data-sm-items="3" data-xs-items="2" data-margin="30"  data-loop="true">
                     <div class="item">
                     <div class="product-box">
                        <div class="product-thumbnail relative">
                           <a href="/bang-mach-the-he-moi" title="Bảng mạch thế hệ mới">
                           <img class="lazyload"  src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/rolling.svg?1665822051727"  data-src="//bizweb.dktcdn.net/thumb/large/100/246/606/products/product7-600x600-c256926e-800d-4058-8aee-9e2b48889e50-9bb987fe-7556-4034-b193-8a9821f34d41-204a8862-6872-4651-acc3-5b8ad8205ae7.jpg?v=1503418055357" alt="Bảng mạch thế hệ mới">
                           </a>			
                           <div class="product-action clearfix">
                                 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8007134" enctype="multipart/form-data">
                                 <div>
                                    <input class="hidden" type="hidden" name="variantId" value="12728990" />
                                    <button class="btn btn-cart btn btn-circle  left-to" data-toggle="tooltip" title="Chọn sản phẩm"  type="button" onclick="window.location.href='/bang-mach-the-he-moi'" >
                                    <i class="fa fa-shopping-basket"></i>
                                    </button>
                                    <a data-toggle="tooltip" title="Xem nhanh" href="/bang-mach-the-he-moi" data-handle="bang-mach-the-he-moi" class="btn-circle btn_view btn  right-to quick-view">
                                    <i class="fa fa-search-plus"></i>
                                    </a>
                                 </div>
                                 </form>
                           </div>
                        </div>
                        <div class="product-info a-center">
                           <h3 class="product-name"><a href="/bang-mach-the-he-moi" title="Bảng mạch thế hệ mới">Bảng mạch thế hệ mới</a></h3>
                           <div class="sapo-product-reviews-badge" data-id="8007134"></div>
                           <div class="price-box clearfix">
                                 <div class="special-price">
                                 <span class="price product-price">180.000₫</span>
                                 </div>
                           </div>
                        </div>
                     </div>
                     </div>
                     <div class="item">
                     <div class="product-box">
                        <div class="product-thumbnail relative">
                           <div class="sale-flash hidden">- 
                                 55% 
                           </div>
                           <a href="/cap-noi-dien-hien-dai" title="Cap nối điện hiện đại">
                           <img class="lazyload"  src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/rolling.svg?1665822051727"  data-src="//bizweb.dktcdn.net/thumb/large/100/246/606/products/product16-e1474362532693-600x600-eeac0ef7-0fe5-4675-b266-3699640e5c4a-284f03ff-360a-473b-880a-58bf37577d64.jpg?v=1503418002943" alt="Cap nối điện hiện đại">
                           </a>			
                           <div class="product-action clearfix">
                                 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8007132" enctype="multipart/form-data">
                                 <div>
                                    <input class="hidden" type="hidden" name="variantId" value="12728985" />
                                    <button class="btn btn-cart btn btn-circle  left-to" data-toggle="tooltip" title="Chọn sản phẩm"  type="button" onclick="window.location.href='/cap-noi-dien-hien-dai'" >
                                    <i class="fa fa-shopping-basket"></i>
                                    </button>
                                    <a data-toggle="tooltip" title="Xem nhanh" href="/cap-noi-dien-hien-dai" data-handle="cap-noi-dien-hien-dai" class="btn-circle btn_view btn  right-to quick-view">
                                    <i class="fa fa-search-plus"></i>
                                    </a>
                                 </div>
                                 </form>
                           </div>
                        </div>
                        <div class="product-info a-center">
                           <h3 class="product-name"><a href="/cap-noi-dien-hien-dai" title="Cap nối điện hiện đại">Cap nối điện hiện đại</a></h3>
                           <div class="sapo-product-reviews-badge" data-id="8007132"></div>
                           <div class="price-box clearfix">
                                 <div class="special-price inline-block">
                                 <span class="price product-price">90.000₫</span>
                                 </div>
                                 <div class="old-price inline-block">															 
                                 <span class="price product-price-old">
                                 200.000₫			
                                 </span>
                                 </div>
                           </div>
                        </div>
                     </div>
                     </div>
                     <div class="item">
                     <div class="product-box">
                        <div class="product-thumbnail relative">
                           <a href="/may-phat-dien-sieu-la" title="Máy phát điện siêu lạ">
                           <img class="lazyload"  src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/rolling.svg?1665822051727"  data-src="//bizweb.dktcdn.net/thumb/large/100/246/606/products/product9-600x600-1b5a4b8c-d44d-4728-b64b-9f32eb8abcec-46b5d65f-ad88-4e8a-9375-0e73e1ac6c09-c3ae5433-4b1e-4890-8ee1-c2c0e36c1a7a.jpg?v=1503417956917" alt="Máy phát điện siêu lạ">
                           </a>			
                           <div class="product-action clearfix">
                                 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8007130" enctype="multipart/form-data">
                                 <div>
                                    <input type="hidden" name="variantId" value="12728981" />
                                    <button class="btn-buy btn-cart btn btn-circle left-to add_to_cart " data-toggle="tooltip" title="Thêm vào giỏ hàng">
                                    <i class="fa fa-shopping-basket"></i>
                                    </button>
                                    <a data-toggle="tooltip" title="Xem nhanh" href="/may-phat-dien-sieu-la" data-handle="may-phat-dien-sieu-la" class="btn-circle btn_view btn  right-to quick-view">
                                    <i class="fa fa-search-plus"></i>
                                    </a>
                                 </div>
                                 </form>
                           </div>
                        </div>
                        <div class="product-info a-center">
                           <h3 class="product-name"><a href="/may-phat-dien-sieu-la" title="Máy phát điện siêu lạ">Máy phát điện siêu lạ</a></h3>
                           <div class="sapo-product-reviews-badge" data-id="8007130"></div>
                           <div class="price-box clearfix">
                                 <div class="special-price">
                                 <span class="price product-price">6.000.000₫</span>
                                 </div>
                           </div>
                        </div>
                     </div>
                     </div>
                     <div class="item">
                     <div class="product-box">
                        <div class="product-thumbnail relative">
                           <a href="/thiet-bi-tiet-kiem-dien" title="Thiết bị tiết kiệm điện">
                           <img class="lazyload"  src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/rolling.svg?1665822051727"  data-src="//bizweb.dktcdn.net/thumb/large/100/246/606/products/slider2-600x600-9be1e64d-5678-46db-a85d-b45da7506e40-6c8184d9-59d4-4fc3-9cd7-584b39d0bb4f.jpg?v=1503417892580" alt="Thiết bị tiết kiệm điện">
                           </a>			
                           <div class="product-action clearfix">
                                 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8007128" enctype="multipart/form-data">
                                 <div>
                                    <input type="hidden" name="variantId" value="12728978" />
                                    <button class="btn-buy btn-cart btn btn-circle left-to add_to_cart " data-toggle="tooltip" title="Thêm vào giỏ hàng">
                                    <i class="fa fa-shopping-basket"></i>
                                    </button>
                                    <a data-toggle="tooltip" title="Xem nhanh" href="/thiet-bi-tiet-kiem-dien" data-handle="thiet-bi-tiet-kiem-dien" class="btn-circle btn_view btn  right-to quick-view">
                                    <i class="fa fa-search-plus"></i>
                                    </a>
                                 </div>
                                 </form>
                           </div>
                        </div>
                        <div class="product-info a-center">
                           <h3 class="product-name"><a href="/thiet-bi-tiet-kiem-dien" title="Thiết bị tiết kiệm điện">Thiết bị tiết kiệm điện</a></h3>
                           <div class="sapo-product-reviews-badge" data-id="8007128"></div>
                           <div class="price-box clearfix">
                                 <div class="special-price">
                                 <span class="price product-price">1.190.000₫</span>
                                 </div>
                           </div>
                        </div>
                     </div>
                     </div>
                     <div class="item">
                     <div class="product-box">
                        <div class="product-thumbnail relative">
                           <a href="/vi-xu-ly-tson" title="Vi xử lý TSON">
                           <img class="lazyload"  src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/rolling.svg?1665822051727"  data-src="//bizweb.dktcdn.net/thumb/large/100/246/606/products/product8-600x600-b391a3e7-dde0-468d-b768-2a2b0dfa2341.jpg?v=1503417861407" alt="Vi xử lý TSON">
                           </a>			
                           <div class="product-action clearfix">
                                 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8007126" enctype="multipart/form-data">
                                 <div>
                                    <input class="hidden" type="hidden" name="variantId" value="12728975" />
                                    <button class="btn btn-cart btn btn-circle  left-to" data-toggle="tooltip" title="Chọn sản phẩm"  type="button" onclick="window.location.href='/vi-xu-ly-tson'" >
                                    <i class="fa fa-shopping-basket"></i>
                                    </button>
                                    <a data-toggle="tooltip" title="Xem nhanh" href="/vi-xu-ly-tson" data-handle="vi-xu-ly-tson" class="btn-circle btn_view btn  right-to quick-view">
                                    <i class="fa fa-search-plus"></i>
                                    </a>
                                 </div>
                                 </form>
                           </div>
                        </div>
                        <div class="product-info a-center">
                           <h3 class="product-name"><a href="/vi-xu-ly-tson" title="Vi xử lý TSON">Vi xử lý TSON</a></h3>
                           <div class="sapo-product-reviews-badge" data-id="8007126"></div>
                           <div class="price-box clearfix">
                                 <div class="special-price">
                                 <span class="price product-price">1.190.000₫</span>
                                 </div>
                           </div>
                        </div>
                     </div>
                     </div>
                     <div class="item">
                     <div class="product-box">
                        <div class="product-thumbnail relative">
                           <a href="/thiet-bi-thong-minh-01" title="Thiết bị thông minh 01">
                           <img class="lazyload"  src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/rolling.svg?1665822051727"  data-src="//bizweb.dktcdn.net/thumb/large/100/246/606/products/product5-600x600.jpg?v=1503417783783" alt="Thiết bị thông minh 01">
                           </a>			
                           <div class="product-action clearfix">
                                 <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8007090" enctype="multipart/form-data">
                                 <div>
                                    <input class="hidden" type="hidden" name="variantId" value="12728929" />
                                    <button class="btn btn-cart btn btn-circle  left-to" data-toggle="tooltip" title="Chọn sản phẩm"  type="button" onclick="window.location.href='/thiet-bi-thong-minh-01'" >
                                    <i class="fa fa-shopping-basket"></i>
                                    </button>
                                    <a data-toggle="tooltip" title="Xem nhanh" href="/thiet-bi-thong-minh-01" data-handle="thiet-bi-thong-minh-01" class="btn-circle btn_view btn  right-to quick-view">
                                    <i class="fa fa-search-plus"></i>
                                    </a>
                                 </div>
                                 </form>
                           </div>
                        </div>
                        <div class="product-info a-center">
                           <h3 class="product-name"><a href="/thiet-bi-thong-minh-01" title="Thiết bị thông minh 01">Thiết bị thông minh 01</a></h3>
                           <div class="sapo-product-reviews-badge" data-id="8007090"></div>
                           <div class="price-box clearfix">
                                 <div class="special-price">
                                 <span class="price product-price">190.000₫</span>
                                 </div>
                           </div>
                        </div>
                     </div>
                     </div>
               </div>
            </div>
            <!-- /.products -->
         </div>
         </div>
   </div>
   <script>
         $('.slickprolist').slick({
               autoplay: true,
               autoplaySpeed: 5000,
               dots: false,
               arrows: false,
               speed: 300,
               rows: 1,
               loop: false,
               infinite:false,
               slidesToShow: 4,
               slidesToScroll: 3,
               responsive: [
                     {
                        breakpoint: 1200,
                        settings: {
                           slidesToShow: 4,
                           slidesToScroll: 3
                        }
                     },
                     {
                        breakpoint: 1024,
                        settings: {
                           slidesToShow: 3,
                           slidesToScroll: 3
                        }
                     },
                     {
                        breakpoint: 991,
                        settings: {
                           slidesToShow: 3,
                           slidesToScroll: 2
                        }
                     },
                     {
                        breakpoint: 767,
                        settings: {
                           slidesToShow: 2,
                           slidesToScroll: 2
                        }
                     }
               ]
            });
   </script>
</section> --}}

{{-- <section class="awe-section-4">
   <section class="service">
         <div class="container">
         <div class="sec-title">
            <h2>Dịch vụ</h2>
         </div>
         <div class="slickprolist2" data-lg-items="4"  data-md-items="3" data-sm-items="3" data-xs-items="1" data-margin="30" data-nav="true" data-loop="true">
            <article class="single-column">
               <div class="item">
                     <figure class="img-box">
                     <img class="lazyload"  src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/rolling.svg?1665822051727"  data-src="//bizweb.dktcdn.net/thumb/large/100/246/606/articles/service-2.jpg?v=1504624540293" alt="Xây dựng hệ thống điện" >
                     <figcaption class="default-overlay-outer">
                        <div class="inner">
                           <div class="content-layer">
                                 <a href="/xay-dung-he-thong-dien" class="thm-btn thm-tran-bg">Chi tiết</a>
                           </div>
                        </div>
                     </figcaption>
                     </figure>
                     <div class="content center">
                     <a href="/xay-dung-he-thong-dien">
                        <h3>Xây dựng hệ thống điện</h3>
                     </a>
                     <div class="text">
                        <p> Hệ thống điện, nước lâu ngày sẽ có những hỏng hóc ngoài ý muốn làm phiền cuộc sống của bạn. Hãy liên hệ với...</p>
                     </div>
                     </div>
               </div>
            </article>
            <article class="single-column">
               <div class="item">
                     <figure class="img-box">
                     <img class="lazyload"  src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/rolling.svg?1665822051727"  data-src="//bizweb.dktcdn.net/thumb/large/100/246/606/articles/service-3-661b0e91-889c-436e-a014-a0e8dd193be0.jpg?v=1504624622833" alt="Bảo trì điện" >
                     <figcaption class="default-overlay-outer">
                        <div class="inner">
                           <div class="content-layer">
                                 <a href="/bao-tri-dien-cong-nghiep" class="thm-btn thm-tran-bg">Chi tiết</a>
                           </div>
                        </div>
                     </figcaption>
                     </figure>
                     <div class="content center">
                     <a href="/bao-tri-dien-cong-nghiep">
                        <h3>Bảo trì điện</h3>
                     </a>
                     <div class="text">
                        <p> Hệ thống điện, nước lâu ngày sẽ có những hỏng hóc ngoài ý muốn làm phiền cuộc sống của bạn. Hãy liên hệ với...</p>
                     </div>
                     </div>
               </div>
            </article>
            <article class="single-column">
               <div class="item">
                     <figure class="img-box">
                     <img class="lazyload"  src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/rolling.svg?1665822051727"  data-src="//bizweb.dktcdn.net/thumb/large/100/246/606/articles/service-4.jpg?v=1504624742607" alt="Điện công nghiệp" >
                     <figcaption class="default-overlay-outer">
                        <div class="inner">
                           <div class="content-layer">
                                 <a href="/dien-cong-nghiep" class="thm-btn thm-tran-bg">Chi tiết</a>
                           </div>
                        </div>
                     </figcaption>
                     </figure>
                     <div class="content center">
                     <a href="/dien-cong-nghiep">
                        <h3>Điện công nghiệp</h3>
                     </a>
                     <div class="text">
                        <p> Hệ thống điện, nước lâu ngày sẽ có những hỏng hóc ngoài ý muốn làm phiền cuộc sống của bạn. Hãy liên hệ với...</p>
                     </div>
                     </div>
               </div>
            </article>
            <article class="single-column">
               <div class="item">
                     <figure class="img-box">
                     <img class="lazyload"  src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/rolling.svg?1665822051727"  data-src="//bizweb.dktcdn.net/thumb/large/100/246/606/articles/service-1-13ce5540-f414-49aa-b7b4-0d21ff2c4d06.jpg?v=1504624603803" alt="Sữa điều hòa tại nhà" >
                     <figcaption class="default-overlay-outer">
                        <div class="inner">
                           <div class="content-layer">
                                 <a href="/sua-dieu-hoa-tai-nha" class="thm-btn thm-tran-bg">Chi tiết</a>
                           </div>
                        </div>
                     </figcaption>
                     </figure>
                     <div class="content center">
                     <a href="/sua-dieu-hoa-tai-nha">
                        <h3>Sữa điều hòa tại nhà</h3>
                     </a>
                     <div class="text">
                        <p> Hệ thống điện, nước lâu ngày sẽ có những hỏng hóc ngoài ý muốn làm phiền cuộc sống của bạn. Hãy liên hệ với...</p>
                     </div>
                     </div>
               </div>
            </article>
            <article class="single-column">
               <div class="item">
                     <figure class="img-box">
                     <img class="lazyload"  src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/rolling.svg?1665822051727"  data-src="//bizweb.dktcdn.net/thumb/large/100/246/606/articles/service-3.jpg?v=1504624586050" alt="Sữa chữa  và bảo trì" >
                     <figcaption class="default-overlay-outer">
                        <div class="inner">
                           <div class="content-layer">
                                 <a href="/sua-chua-va-bao-tri" class="thm-btn thm-tran-bg">Chi tiết</a>
                           </div>
                        </div>
                     </figcaption>
                     </figure>
                     <div class="content center">
                     <a href="/sua-chua-va-bao-tri">
                        <h3>Sữa chữa  và bảo trì</h3>
                     </a>
                     <div class="text">
                        <p> Hệ thống điện, nước lâu ngày sẽ có những hỏng hóc ngoài ý muốn làm phiền cuộc sống của bạn. Hãy liên hệ với...</p>
                     </div>
                     </div>
               </div>
            </article>
            <article class="single-column">
               <div class="item">
                     <figure class="img-box">
                     <img class="lazyload"  src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/rolling.svg?1665822051727"  data-src="//bizweb.dktcdn.net/thumb/large/100/246/606/articles/service-1.jpg?v=1504624511957" alt="Dịch vụ điện gia dụng" >
                     <figcaption class="default-overlay-outer">
                        <div class="inner">
                           <div class="content-layer">
                                 <a href="/dich-vu-dien-gia-dung" class="thm-btn thm-tran-bg">Chi tiết</a>
                           </div>
                        </div>
                     </figcaption>
                     </figure>
                     <div class="content center">
                     <a href="/dich-vu-dien-gia-dung">
                        <h3>Dịch vụ điện gia dụng</h3>
                     </a>
                     <div class="text">
                        <p> Hệ thống điện, nước lâu ngày sẽ có những hỏng hóc ngoài ý muốn làm phiền cuộc sống của bạn. Hãy liên hệ với...</p>
                     </div>
                     </div>
               </div>
            </article>
         </div>
         </div>
   </section>
   <script>
         $('.slickprolist2').slick({
            autoplay: true,
            autoplaySpeed: 5000,
            dots: false,
            arrows: false,
            speed: 300,
            rows: 1,
            loop: false,
            infinite:false,
            slidesToShow: 4,
            slidesToScroll: 3,
            responsive: [
               {
                     breakpoint: 1200,
                     settings: {
                        slidesToShow: 4,
                        slidesToScroll: 3
                     }
               },
               {
                     breakpoint: 1024,
                     settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                     }
               },
               {
                     breakpoint: 991,
                     settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2
                     }
               },
               {
                     breakpoint: 767,
                     settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                     }
               }
            ]
         });
   </script>
</section> --}}


{{-- <section class="awe-section-7">
   <!--team section-->
   <section class="our-team">
         <div class="container">
         <div class="sec-title">
            <h2>Chuyên gia</h2>
         </div>
         <div class="slickteam" data-lg-items="4"  data-md-items="3" data-sm-items="3" data-xs-items="1" data-margin="30" data-nav="true" data-loop="true">
            <div class="item">
               <div class="single-team-member">
                     <figure class="img-box">
                     <a href="#"><img class="lazyload"  src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/rolling.svg?1665822051727"  data-src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/team-1.jpg?1665822051727" alt="Nguyễn Văn A"></a>
                     <div class="overlay">
                        <div class="inner-box">
                           <ul class="social">
                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     </figure>
                     <div class="author-info">
                     <a href="expart-details.html">
                        <h4>Nguyễn Văn A</h4>
                     </a>
                     <p>Chuyên gia điện nước</p>
                     <ul>
                        <li><i class="fa fa-phone"></i>ĐT: <a href="callto:+84123456789">+84123456789</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:emaildemo@gmail.com">emaildemo@gmail.com</a></li>
                     </ul>
                     </div>
               </div>
            </div>
            <div class="item">
               <div class="single-team-member">
                     <figure class="img-box">
                     <a href="#"><img class="lazyload"  src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/rolling.svg?1665822051727"  data-src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/team-2.jpg?1665822051727" alt="Nguyễn Văn B"></a>
                     <div class="overlay">
                        <div class="inner-box">
                           <ul class="social">
                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     </figure>
                     <div class="author-info">
                     <a href="expart-details.html">
                        <h4>Nguyễn Văn B</h4>
                     </a>
                     <p>Chuyên gia điện nước</p>
                     <ul>
                        <li><i class="fa fa-phone"></i>ĐT: <a href="callto:+84123456789">+84123456789</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:emaildemo@gmail.com">emaildemo@gmail.com</a></li>
                     </ul>
                     </div>
               </div>
            </div>
            <div class="item">
               <div class="single-team-member">
                     <figure class="img-box">
                     <a href="#"><img class="lazyload"  src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/rolling.svg?1665822051727"  data-src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/team-3.jpg?1665822051727" alt="Nguyễn Văn C"></a>
                     <div class="overlay">
                        <div class="inner-box">
                           <ul class="social">
                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     </figure>
                     <div class="author-info">
                     <a href="expart-details.html">
                        <h4>Nguyễn Văn C</h4>
                     </a>
                     <p>Chuyên gia điện nước</p>
                     <ul>
                        <li><i class="fa fa-phone"></i>ĐT: <a href="callto:+84123456789">+84123456789</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:emaildemo@gmail.com">emaildemo@gmail.com</a></li>
                     </ul>
                     </div>
               </div>
            </div>
            <div class="item">
               <div class="single-team-member">
                     <figure class="img-box">
                     <a href="#"><img class="lazyload"  src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/rolling.svg?1665822051727"  data-src="//bizweb.dktcdn.net/100/246/606/themes/801967/assets/team-4.jpg?1665822051727" alt="Nguyễn Văn D"></a>
                     <div class="overlay">
                        <div class="inner-box">
                           <ul class="social">
                                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     </figure>
                     <div class="author-info">
                     <a href="expart-details.html">
                        <h4>Nguyễn Văn D</h4>
                     </a>
                     <p>Chuyên gia điện nước</p>
                     <ul>
                        <li><i class="fa fa-phone"></i>ĐT: <a href="callto:+84123456789">+84123456789</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:emaildemo@gmail.com">emaildemo@gmail.com</a></li>
                     </ul>
                     </div>
               </div>
            </div>
         </div>
         </div>
   </section>
   <script>
         $('.slickteam').slick({
               autoplay: true,
               autoplaySpeed: 5000,
               dots: false,
               arrows: false,
               speed: 300,
               rows: 1,
               loop: false,
               infinite:false,
               slidesToShow: 4,
               slidesToScroll: 3,
               responsive: [
                     {
                        breakpoint: 1200,
                        settings: {
                           slidesToShow: 4,
                           slidesToScroll: 3
                        }
                     },
                     {
                        breakpoint: 1024,
                        settings: {
                           slidesToShow: 3,
                           slidesToScroll: 3
                        }
                     },
                     {
                        breakpoint: 991,
                        settings: {
                           slidesToShow: 3,
                           slidesToScroll: 2
                        }
                     },
                     {
                        breakpoint: 767,
                        settings: {
                           slidesToShow: 2,
                           slidesToScroll: 2
                        }
                     }
               ]
            });
   </script>
</section>
<section class="awe-section-8">
   <!--Paralax Style One-->
   <section class="parallax-style-one" style="background-image:url(//bizweb.dktcdn.net/100/246/606/themes/801967/assets/bg_count.jpg?1665822051727);">
         <div class="container">
         <div class="overlay">
            <!--Fact Counter-->
            <div class="fact-counter">
               <div class="row">
                     <div class="counter-outer">
                     <!--Column-->
                     <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="300ms">
                        <div class="item">
                           <div class="inner-box">
                                 <div class="icon-box">
                                 <i class="icon fa fa-users"></i>
                                 </div>
                                 <div class="count-outer">
                                 <span class="count-text" data-speed="3000" data-stop="150">150</span>
                                 <p>Dự án hoàn thành</p>
                                 </div>
                           </div>
                        </div>
                     </article>
                     <!--Column-->
                     <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="300ms">
                        <div class="item">
                           <div class="inner-box">
                                 <div class="icon-box">
                                 <i class="icon fa fa-trophy"></i>
                                 </div>
                                 <div class="count-outer">
                                 <span class="count-text" data-speed="3000" data-stop="1850">1850</span>
                                 <p>Số lượt ghé thăm</p>
                                 </div>
                           </div>
                        </div>
                     </article>
                     <!--Column-->
                     <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="300ms">
                        <div class="item">
                           <div class="inner-box">
                                 <div class="icon-box">
                                 <i class="icon fa fa-user"></i>
                                 </div>
                                 <div class="count-outer">
                                 <span class="count-text" data-speed="3000" data-stop="481">481</span>
                                 <p>Số khách thanh toán</p>
                                 </div>
                           </div>
                        </div>
                     </article>
                     <!--Column-->
                     <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="300ms">
                        <div class="item">
                           <div class="inner-box">
                                 <div class="icon-box">
                                 <i class="icon fa fa-bolt"></i>
                                 </div>
                                 <div class="count-outer">
                                 <span class="count-text" data-speed="3000" data-stop="2250">2250</span>
                                 <p>Số chiến công đầu</p>
                                 </div>
                           </div>
                        </div>
                     </article>
                     </div>
               </div>
            </div>
         </div>
         </div>
   </section>
</section> --}}
<section class="awe-section-9">
   <section class="latest-news">
         <div class="container">
         <div class="sec-title">
            <h2>
               Các công trình nổi bật
            </h2>
         </div>
         <div class="latest-news-carousel slickcongtrinh" data-lg-items="3"  data-md-items="3" data-sm-items="2" data-xs-items="1" data-xss-items="1" data-margin="30" data-nav="true">
            @foreach ($servicehome as $service)
            <div class="item">
               <figure class="image-box">
                     <picture>
                     <img  class="lazyload"  src="{{$service->image}}"  data-src="{{$service->image}}" alt="{{$service->name}}" >
                     </picture>
                     <div class="date">
                     <h5>{{date('d', strtotime($service->created_at))}}</h5>
                     <p>Th {{date('m', strtotime($service->created_at))}}</p>
                     </div>
               </figure>
               <div class="content-box">
                     <h3><a href="{{route('serviceDetail', ['slug'=>$service->slug])}}">{{$service->name}}</a></h3>
                     <p class="blog-item-summary">{!!languageName($service->description)!!}</p>
               </div>
            </div>
            @endforeach
         </div>
         </div>
   </section>
   <script>
         $('.slickcongtrinh').slick({
               autoplay: true,
               autoplaySpeed: 5000,
               dots: false,
               arrows: false,
               speed: 300,
               rows: 1,
               loop: false,
               infinite:false,
               slidesToShow: 3,
               slidesToScroll: 3,
               responsive: [
                     {
                        breakpoint: 1200,
                        settings: {
                           slidesToShow: 3,
                           slidesToScroll: 3
                        }
                     },
                     {
                        breakpoint: 1024,
                        settings: {
                           slidesToShow: 3,
                           slidesToScroll: 3
                        }
                     },
                     {
                        breakpoint: 991,
                        settings: {
                           slidesToShow: 3,
                           slidesToScroll: 2
                        }
                     },
                     {
                        breakpoint: 767,
                        settings: {
                           slidesToShow: 2,
                           slidesToScroll: 2
                        }
                     }
               ]
            });
   </script>
</section>
<section class="awe-section-9">
   <section class="latest-news">
         <div class="container">
         <div class="sec-title">
            <h2>
               Tin tức
            </h2>
         </div>
         <div class="latest-news-carousel slickblog" data-lg-items="3"  data-md-items="3" data-sm-items="2" data-xs-items="1" data-xss-items="1" data-margin="30" data-nav="true">
            @foreach ($homeBlog as $blog)
            <div class="item">
               <figure class="image-box">
                     <picture>
                     <img  class="lazyload"  src="{{$blog->image}}"  data-src="{{$blog->image}}" alt="{{languageName($blog->title)}}" >
                     </picture>
                     <div class="date">
                        <h5>{{date('d', strtotime($blog->created_at))}}</h5>
                        <p>Th {{date('m', strtotime($blog->created_at))}}</p>
                     </div>
               </figure>
               <div class="content-box">
                     <h3><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}">{{languageName($blog->title)}}</a></h3>
                     <p class="blog-item-summary"> {{languageName($blog->description)}}</p>
               </div>
            </div>
            @endforeach
         </div>
         </div>
   </section>
   <script>
         $('.slickblog').slick({
               autoplay: true,
               autoplaySpeed: 5000,
               dots: false,
               arrows: false,
               speed: 300,
               rows: 1,
               loop: false,
               infinite:false,
               slidesToShow: 3,
               slidesToScroll: 3,
               responsive: [
                     {
                        breakpoint: 1200,
                        settings: {
                           slidesToShow: 3,
                           slidesToScroll: 3
                        }
                     },
                     {
                        breakpoint: 1024,
                        settings: {
                           slidesToShow: 3,
                           slidesToScroll: 3
                        }
                     },
                     {
                        breakpoint: 991,
                        settings: {
                           slidesToShow: 3,
                           slidesToScroll: 2
                        }
                     },
                     {
                        breakpoint: 767,
                        settings: {
                           slidesToShow: 2,
                           slidesToScroll: 2
                        }
                     }
               ]
            });
   </script>
</section>
{{-- <section class="awe-section-10">
   <!--Start Brand area-->  
   <section class="brand-area">
         <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="brand slickbrand" data-lg-items="5"  data-md-items="4" data-sm-items="3" data-xs-items="2" data-margin="30" data-nav="true">
                     <!--Start single item-->
                     @foreach ($partner as $item)
                     <div class="item">
                     <div class="single-item">
                        <a href="{{$item->link}}" class="img25"><img class="lazyload"  src="{{$item->image}}"  data-src="{{$item->image}}"  alt="" loading="lazy">
                        </a>
                     </div>
                     </div>
                     @endforeach
               </div>
            </div>
         </div>
         </div>
   </section>
   <!--End Brand area-->
   <script>
         $('.slickbrand').slick({
            autoplay: true,
            autoplaySpeed: 5000,
            dots: false,
            arrows: false,
            speed: 300,
            rows: 1,
            loop: false,
            infinite:false,
            slidesToShow: 5,
            slidesToScroll: 5,
            responsive: [
               {
                     breakpoint: 1200,
                     settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5
                     }
               },
               {
                     breakpoint: 1024,
                     settings: {
                        slidesToShow: 5,
                        slidesToScroll: 3
                     }
               },
               {
                     breakpoint: 991,
                     settings: {
                        slidesToShow: 4,
                        slidesToScroll: 2
                     }
               },
               {
                     breakpoint: 767,
                     settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                     }
               }
            ]
         });	
   </script>
</section> --}}
@endsection