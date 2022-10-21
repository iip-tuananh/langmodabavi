@extends('layouts.main.master')
@section('title')
Giới thiệu về {{$setting->company}}
@endsection
@section('description')
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
                  <li><strong >Giới thiệu</strong></li>
               </ul>
            </div>
         </div>
      </div>
   </section>
</div>
<section class="about-us">
   <div class="container">
      <div class="sec-title">
         <h2>Về chúng tôi</h2>
      </div>
      <div class="row">
         {!!$pageContent->content!!}
      </div>
   </div>
</section>
@endsection