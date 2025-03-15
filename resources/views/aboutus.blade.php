@extends('layouts.main.master')
@section('title')
Giới thiệu về Nha Khoa EURO
@endsection
@section('description')
Giới thiệu về Nha Khoa EURO
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('frontend/css/pages/cmIntroduce.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/cmTeam.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/page__introduce.css') }}" />
@endsection
@section('js')
@endsection
@section('content')
<main id="main">
   <section class="banner__global">
       <div class="frame">
           <img src="{{ url('frontend/images/banner__2.jpg') }}" alt="banner__2.jpg" />
       </div>
       <div class="breadcrumb">
           <div class="container">
               <ul>
                   <li><a href="{{ url('/') }}" title="Trang chủ">Trang chủ</a></li>
                   <li>
                       <a href="{{ url()->current() }}" title="Giới thiệu">Giới thiệu</a>
                   </li>
               </ul>
           </div>
       </div>
   </section>
   <section class="page-introduce">
       <div class="container">
           <div class="introduce__group">
               <div class="introduce__item">
                   <h1 class="introduce__info">NHA KHOA HUY HOANG</h1>
                   <div class="introduce__desc">
                       {!! $gioithieu->content !!}
                   </div>
               </div>
               <div class="introduce__video">
                   <div class="video" data-id="">
                       <div class="frame">
                           <img src="https://nhakhoavictorialuxury.com/uploads/images/thumbnail__1.jpg" alt="thumbnail__1.jpg" />
                           <div class="if__youtube"></div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="group__introduce">
               <div class="item">
                   <div class="frame">
                       <img src="{{url('frontend/images/introduce__5.jpg')}}" alt="introduce__5.jpg" />
                   </div>
                   <div class="introduce__content">
                       <h2 class="title__global">Tầm nhìn</h2>
                       <div class="introduce__desc">
                        <p>Đi đầu trong lĩnh vực chỉnh nha thẩm mỹ và trở thành Nha khoa được mọi người Việt tin dùng. Với các bác sĩ, Nha Khoa HUY HOANG là nơi các bác sĩ chỉnh nha thực thụ được trau dồi kiến thức.</p>

                        <p>Với khách hàng, Nha Khoa HUY HOANG là nơi mọi khách hàng đều có thể an tâm về chất lượng và dịch vụ, yên tâm giới thiệu Nha Khoa HUY HOANG với người thân.</p>
                       </div>
                   </div>
               </div>
               <div class="item">
                   <div class="frame">
                       <img src="{{url('frontend/images/introduce__6.jpg')}}" alt="introduce__6.jpg" />
                   </div>
                   <div class="introduce__content">
                       <h2 class="title__global">Sứ mệnh</h2>
                       <div class="introduce__desc">
                        <p>Nha khoa HUY HOANG cam kết luôn tận tâm và nỗ lực tối ưu hoá quy trình chỉnh nha để mang đến cho khách hàng sự an tâm tuyệt đối khi trải nghiệm dịch vụ chỉnh nha thẩm mỹ và hoàn thiện nụ cười.</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <section class="core-values">
       <div class="container">
           <div class="module__header">
               <h2 class="title__global">Giá trị cốt lõi</h2>
           </div>
           <div class="module__content">
               <div>
                  Nha khoa HUY HOANG cam kết luôn tận tâm và nỗ lực tối ưu hoá quy trình chỉnh nha để mang đến cho khách hàng sự an tâm tuyệt đối khi trải nghiệm dịch vụ chỉnh nha thẩm mỹ và hoàn thiện nụ cười.
                   </d>
               </div>
           </div>
   </section>
   <section class="section-team">
       <div class="container">
           <div class="module__header">
               <h2 class="title__global">Đội ngũ Y - Bác Sĩ</h2>
           </div>
           <div class="module__content">
               <div class="team">
               @if (!empty($founder))
                   @foreach ($founder as $item)
                   <div class="team__item">
                       <div class="frame team__avatar">
                           <img src="{{ $item->image }}" alt="{{ $item->name }}" />
                       </div>
                       <h3 class="team__name">{{ $item->name }}</h3>
                   </div>
                   @endforeach
               @endif
               </div>
           </div>
       </div>
   </section>
</main>
@endsection