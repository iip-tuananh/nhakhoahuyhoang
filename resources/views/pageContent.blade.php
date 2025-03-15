@extends('layouts.main.master')
@section('title')
{{$pagecontentdetail->title}}
@endsection
@section('description')
{{$pagecontentdetail->title}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="breadcrumb-area">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="breadcrumb-content">
                   <ul class="nav">
                       <li><a href="{{route('home')}}">Trang chủ</a></li>
                       <li>{{$pagecontentdetail->title}}</li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
</div>
<div class="shop-category-area single-blog-page mtb-60px">
   <div class="container">
       <div class="row">
           <div class="col-lg-12 order-lg-last col-md-12 order-md-first">
               <div class="blog-posts ">
                   <div class="single-blog-post blog-grid-post">
                       <div class="blog-post-content-inner mt-30px">
                           <h4 class="blog-title"><a href="javascript:;">{{$pagecontentdetail->title}}</a></h4>
                       </div>
                       <div class="single-post-content">
                           {!!$pagecontentdetail->content!!}
                       </div>
                   </div>
                   <!-- single blog post -->
               </div>
           </div>
           <!-- Sidebar Area Start -->
       </div>
   </div>
</div>
@endsection