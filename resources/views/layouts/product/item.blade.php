
@php
$img = json_decode($product->images);
$discountPrice = $product->price - $product->price * ($product->discount / 100);
@endphp
<div class="product-box">
   <div class="product-thumbnail relative">
      <a href="{{route('detailProduct', ['slug'=>$product->slug])}}" title="{{languageName($product->name)}}">
      <img class="lazyload"  src="{{$img[0]}}"  data-src="{{$img[0]}}" alt="{{languageName($product->name)}}">
      </a>			
      {{-- <div class="product-action clearfix">
            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-8007134" enctype="multipart/form-data">
            <div>
               <input class="hidden" type="hidden" name="variantId" value="12728990" />
               <button class="btn btn-cart btn btn-circle  left-to" data-toggle="tooltip" title="Chọn sản phẩm"  type="button" onclick="window.location.href='{{route('detailProduct', ['slug'=>$product->slug])}}'" >
               <i class="fa fa-shopping-basket"></i>
               </button>
               <a data-toggle="tooltip" title="Xem nhanh" href="{{route('detailProduct', ['slug'=>$product->slug])}}" data-handle="bang-mach-the-he-moi" class="btn-circle btn_view btn  right-to quick-view">
               <i class="fa fa-search-plus"></i>
               </a>
            </div>
            </form>
      </div> --}}
   </div>
   <div class="product-info a-center">
      <h3 class="product-name"><a href="{{route('detailProduct', ['slug'=>$product->slug])}}" title="{{languageName($product->name)}}">{{languageName($product->name)}}</a></h3>
      {{-- <div class="sapo-product-reviews-badge" data-id="8007134"></div>
      <div class="price-box clearfix">
            <div class="special-price">
            <span class="price product-price">180.000₫</span>
            </div>
      </div> --}}
   </div>
</div>
