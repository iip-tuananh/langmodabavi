@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
$priceDiscount = $product->price - $product->price * ($product->discount / 100);
@endphp
{{url(''.$imgs[0])}}
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
                  <li>
                     <a  href="{{route('allListProCate', ['cate'=>$product->cate_slug])}}"><span >{{languageName($product->cate->name)}}</span></a>						
                     <span><i class="fa fa-angle-right"></i></span>
                  </li>
                  <li><strong><span >{{languageName($product->name)}}</span></strong>
                  <li>
               </ul>
            </div>
         </div>
      </div>
   </section>
</div>
<section class="product" itemscope itemtype="http://schema.org/Product">
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <div class="row">
               <div class="col-xs-12 details-product">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 relative product-image-block ">
                        <div class="large-image">
                           <a href="{{$imgs[0]}}" data-rel="prettyPhoto[product-gallery]">
                           <img  id="zoom_01" src="{{$imgs[0]}}" alt="{{languageName($product->name)}}" loading="lazy">
                           </a>							
                           <div class="hidden">
                              @foreach ($imgs as $img)
                                 <div class="item">
                                    <a href="{{$img}}" data-image="{{$img}}" data-zoom-image="{{$img}}" data-rel="prettyPhoto[product-gallery]">										
                                    </a>
                                 </div>
                              @endforeach
                           </div>
                        </div>
                        <div id="gallery_01"  class="more-views" data-lg-items="3" data-md-items="3" data-sm-items="4" data-xs-items="3" data-smxs-items="3" data-margin="10">
                           @foreach ($imgs as $img)
                              <div class="item">
                                 <a href="javascript:;" class="thumb-link" title="" rel="{{$img}}">
                                 <img src="{{$img}}" data-src="{{$img}}" alt="" loading="lazy">
                                 </a>
                              </div>
                           @endforeach
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 details-pro">
                        <h1 class="title-head" >{{languageName($product->name)}}</h1>
                        <div class="detail-reviews">
                           <div class="sapo-product-reviews-badge sapo-product-reviews-badge-detail" data-id="8007134"></div>
                        </div>
                        {{-- <div class="detail-header-info">
                           Tình trạng: 
                           <span class="inventory_quantity">Còn hàng</span>
                           <span class="line">|</span>
                           Mã SP: 
                           <span class="masp">
                           Đang cập nhật
                           </span>
                        </div>
                        <div class="price-box">
                           <span class="special-price"><span class="price product-price">180.000₫</span> </span> <!-- Giá Khuyến mại -->
                           <span class="old-price"><del class="price product-price-old" >0</del> </span> <!-- Giá gốc -->
                        </div> --}}
                        <div class="product_description margin-bottom-20">
                           <div class="rte description">
                              {!!languageName($product->description)!!}
                           </div>
                        </div>
                        <div class="form-product">
                           <form enctype="multipart/form-data" id="add-to-cart-form" action="" method="" class="form-inline margin-bottom-10">
                              <div class="form-group form-groupx form-detail-action ">
                                 <a href="tel:{{$setting->phone1}}" class="btn btn-lg btn-primary " title="Liên hệ">
                                 <span>Liên hệ ngay</span>
                                 </a>									
                              </div>
                           </form>
                           <div class="social-sharing">
                              <div class="row">
                                 <div class="col-sm-12">
                                    <div class="social-media" data-permalink="{{route('detailProduct', ['slug'=>$product->slug])}}">
                                       Chia sẻ: 
                                       <a target="_blank" href="//www.facebook.com/sharer.php?u={{route('detailProduct', ['slug'=>$product->slug])}}" class="share-facebook" title="Chia sẻ lên Facebook">
                                       <i class="fa fa-facebook"></i>
                                       </a>
                                       <a target="_blank" href="//twitter.com/share?text={{languageName($product->name)}}&amp;url={{route('detailProduct', ['slug'=>$product->slug])}}" class="share-twitter" title="Chia sẻ lên Twitter">
                                       <i class="fa fa-twitter"></i>
                                       </a>
                                       <a target="_blank" href="//pinterest.com/pin/create/button/?url={{route('detailProduct', ['slug'=>$product->slug])}}&amp;media={{$imgs[0]}}&amp;description={{languageName($product->name)}}" class="share-pinterest" title="Chia sẻ lên pinterest">
                                       <i class="fa fa-pinterest"></i>
                                       </a>
                                       <a target="_blank" href="//plus.google.com/share?url={{route('detailProduct', ['slug'=>$product->slug])}}" class="share-google" title="+1">
                                       <i class="fa fa-google-plus"></i>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xs-12">
                  <div class="row margin-top-30 xs-margin-top-15">
                     <div class="col-xs-12">
                        <ul class="accordion nav nav-inline nav-tab-detailspro clearfix">
                           <li class="nav-item active">
                              <a class="nav-link " data-toggle="tab" href="javascript:;" role="tab">Mô tả<span class="caret hidden"><i class="fa fa-plus-square"></i></span></a>
                              <div class="tab-pane fade in active" id="home" role="tabpanel">
                                 <div class="rte">
                                    {!!languageName($product->content)!!}
                                 </div>
                              </div>
                           </li>
                           {{-- <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="javascript:;" role="tab">Tab tùy chỉnh <span class="caret hidden"><i class="fa fa-plus-square"></i></span></a>
                              <div class="tab-pane fade" id="profile" role="tabpanel">
                                 Các nội dung Hướng dẫn mua hàng viết ở đây
                              </div>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="javascript:;" role="tab">Đánh giá(APP) <span class="caret hidden"><i class="fa fa-plus-square"></i></span></a>
                              <div class="tab-pane fade" id="messages" role="tabpanel">
                                 <div id="sapo-product-reviews" class="sapo-product-reviews" data-id="8007134">
                                    <div id="sapo-product-reviews-noitem" style="display: none;">
                                       <div class="content">
                                          <p data-content-text="language.suggest_noitem"></p>
                                          <div class="product-reviews-summary-actions">
                                             <button type="button" class="btn-new-review" onclick="BPR.newReview(this); return false;" data-content-str="language.newreview"></button>
                                          </div>
                                          <div id="noitem-bpr-form_" data-id="formId" class="noitem-bpr-form" style="display:none;">
                                             <div class="sapo-product-reviews-form"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li> --}}
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
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
      @if (count($productlq) > 1)
      <div class="row">
         <div class="related-product margin-top-20 xs-margin-top-0 margin-bottom-30">
            <div class="heading a-left">
               <h2 class="title-head">Sản phẩm liên quan</h2>
            </div>
            <div class="products  slick-rela products-view-grid" data-lg-items="3" data-md-items="3" data-sm-items="3" data-xs-items="2" data-smxs-items="2" data-margin="30">
               @foreach ($productlq as $pro)
                  @if ($pro->id != $product->id)
                  <div class="item">
                     @include('layouts.product.item', ['product'=>$pro])
                  </div>
                  @endif
               @endforeach
            </div>
         </div>
         <script>
            $('.slick-rela').slick({
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
      </div>
      @endif
   </div>
</section>
<script>  
   setTimeout(function(){
      $('.sapo-product-reviews-badge').click(function(e) {
         let colosestReviews = $( "#sapo-product-reviews" ).closest( ".nav-item" );
         let aCollapse = colosestReviews.find( ".nav-link" );
         aCollapse.click();
         $('html, body').animate({
            scrollTop: colosestReviews.offset().top
         }, 500);
      })
   }, 500)
   
   $("#gallery_01").slick({
      autoplay: true,
      autoplaySpeed: 5000,
      dots: false,
      arrows: false,
      speed: 300,
      rows: 1,
      loop: false,
      infinite:false,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
         {
            breakpoint: 1200,
            settings: {
               slidesToShow: 4,
               slidesToScroll: 4
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
               slidesToShow: 5,
               slidesToScroll: 2
            }
         },
         {
            breakpoint: 767,
            settings: {
               slidesToShow: 3,
               slidesToScroll: 2
            }
         }
      ]
   });
   jQuery(function($) {
         $('.selector-wrapper').css({
            'text-align':'left',
            'margin-bottom':'15px'
         });
         });
   
         jQuery('.swatch :radio').change(function() {
            var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
            var optionValue = jQuery(this).val();
            jQuery(this)
               .closest('form')
               .find('.single-option-selector')
               .eq(optionIndex)
               .val(optionValue)
               .trigger('change');
         });
   
         $(document).ready(function() {
            if($(window).width()>1200){
               setTimeout(function(){
                  $('#zoom_01').elevateZoom({
                     gallery:'gallery_01', 
                     zoomWindowWidth:420,
                     zoomWindowHeight:500,
                     zoomWindowOffetx: 10,
                     easing : true,
                     scrollZoom : true,
                     cursor: 'pointer', 
                     galleryActiveClass: 'active', 
                     imageCrossfade: true
   
                  });
               },500);
            }
         
   
   
         });
   
         $('#gallery_01 img, .swatch-element label').click(function(e){
            $('.checkurl').attr('href',$(this).attr('src'));
            $('#zoom_01').attr('src',$(this).attr('data-src'));
            setTimeout(function(){
   
               $('.zoomContainer').remove();				
               $('#zoom_01').elevateZoom({
                  gallery:'gallery_01', 
                  zoomWindowWidth:420,
                  zoomWindowHeight:500,
                  zoomWindowOffetx: 10,
                  easing : true,
                  scrollZoom : true,
                  cursor: 'pointer', 
                  galleryActiveClass: 'active', 
                  imageCrossfade: true
   
               });
   
   
   
            },400);
   
            setTimeout(function(){
   
               $('#zoom_01').elevateZoom({
                  gallery:'gallery_01', 
                  zoomWindowWidth:420,
                  zoomWindowHeight:500,
                  zoomWindowOffetx: 10,
                  easing : true,
                  scrollZoom : true,
                  cursor: 'pointer', 
                  galleryActiveClass: 'active', 
                  imageCrossfade: true
   
               });
   
   
   
            },1000);
   
         })
</script>
@endsection