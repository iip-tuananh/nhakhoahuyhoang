@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
    <link rel="stylesheet" href="{{ env('AWS_R2_URL') }}/frontend/css/pages/cmIntroduce.css" />
    <link rel="stylesheet" href="{{ env('AWS_R2_URL') }}/frontend/css/pages/cmAppointment.css" />
    <link rel="stylesheet" href="{{ env('AWS_R2_URL') }}/frontend/css/pages/cmTeam.css" />
    <link rel="stylesheet" href="{{ env('AWS_R2_URL') }}/frontend/css/pages/index.css" />
@endsection
@section('script')
    <script type="text/javascript" src="{{ env('AWS_R2_URL') }}/frontend/js/plugins/slick.js"></script>
    <script type="module">
        import addonBanner from "{{ env('AWS_R2_URL') }}/frontend/js/addons/addon-banner.js";
        import {
            height,
            resizeHeight,
            slideVideo,
            createIYoutube,
        } from "{{ env('AWS_R2_URL') }}/frontend/js/addons/addonVideo.js";
        import slideResult from "{{ env('AWS_R2_URL') }}/frontend/js/addons/addonResult.js";
        import slideFeedback from "{{ env('AWS_R2_URL') }}/frontend/js/addons/addonFeedback.js";
        import addonLibrary from "{{ env('AWS_R2_URL') }}/frontend/js/addons/addonLibrary.js";
        addonBanner();
        height();
        resizeHeight();
        slideVideo();
        createIYoutube();
        slideResult();
        slideFeedback();
        addonLibrary();
    </script>
@endsection
@section('content')
<main id="main">
   <section class="addon__banner">
      @foreach ($banner as $key => $item)
      <div class="banner__item">
         <div class="frame">
            <img src="{{$item->image}}" alt="slide {{$key+1}}">
         </div>
      </div>
      @endforeach
   </section>
   <section class="home-introduce">
      <div class="container">
         <div class="introduce">
            <div class="introduce__group">
               <div class="introduce__item">
                  <h1 class="introduce__title">Giới thiệu</h1>
                  <h2 class="introduce__info">NHA KHOA HUY HOANG</h2>
                  <div class="introduce__desc">
                     {!!$gioithieu->content!!}
                  </div>
               </div>
               <div class="introduce__video">
                  <div class="video__slide">
                     @foreach ($video as $item)
                     <div class="slide__item">
                        <div class="video" data-id="{{$item->link}}">
                           <div class="frame">
                              <img src="{{$item->image}}" alt="thumbnail__1.jpg" />
                              <div class="if__youtube"></div>
                           </div>
                           <button class="btn btn__play">
                           <img src="{{url('frontend/images/icons/icon__play.png')}}" alt="icon__play.png" />
                           </button>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
            <div class="introduce__album">
               <div class="album__slide">
                  @foreach ($video as $item)
                  <div class="album__item">
                     <div class="album__box">
                        <div class="frame">
                           <image src="{{$item->image}}" alt="thumbnail__1.jpg"></image>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="home-service">
      <div class="container">
         <div class="module__header">
            <h2 class="title__global">Dịch vụ tại phòng khám</h2>
         </div>
         <div class="module__content">
            <div class="service">
               @foreach ($categoryhome as $item)
               <div class="service__item">
                  <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}" class="frame service__avatar" title="{{languageName($item->name)}}">
                  <img src="{{$item->avatar}}" alt="{{languageName($item->name)}}" />
                  </a>
                  <div class="service__comment">
                     <h2 class="service__title">
                        <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}" title="{{languageName($item->name)}}">
                        {{languageName($item->name)}}
                        </a>
                     </h2>
                     <div class="service__desc">
                        {!!($item->content)!!}
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </section>
   <section class="home-result" style="background-image: url('{{ env('AWS_R2_URL') }}/frontend/images/bg__result.jpg')">
      <div class="container">
         <div class="module__header">
            <h2 class="title__global">KẾT QUẢ NIỀNG</h2>
         </div>
         <div class="module__content">
            <div class="result">
               @foreach ($albumaffter as $item)
               <div class="result__item">
                  <div class="result__box">
                     <div class="result__logo">
                        <img src="{{$setting->logo}}" alt="result__logo.png" />
                     </div>
                     <div class="frame result__avatar" title="Tình trạng răng khấp khểnh">
                        <img src="{{$item->image}}" alt="Tình trạng răng khấp khểnh" />
                     </div>
                     <h3 class="result__title" title="Tình trạng răng khấp khểnh">
                        {{$item->name}}
                     </h3>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </section>
   <section class="section-team">
      <div class="container">
         <div class="module__header">
            <h2 class="title__global">ĐỘI NGŨ BÁC SĨ PHÒNG KHÁM</h2>
         </div>
         <div class="module__content">
            <div class="team">
               @foreach ($founder as $item)
               <div class="team__item">
                  <div class="frame team__avatar">
                     <img src="{{$item->image}}" alt="{{$item->name}}" />
                  </div>
                  <h3 class="team__name">{{$item->name}}</h3>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </section>
   <section class="home-feedback">
      <div class="container">
         <div class="module__header">
            <h2 class="title__global">PHẢN HỒI TỪ KHÁCH HÀNG</h2>
         </div>
         <div class="module__content">
            <div class="feedback">
               @foreach ($reviewcus as $item)
               <div class="feedback__item">
                  <div class="feedback__box">
                     <div class="feedback__desc">
                        <span class="not"> “ </span>
                       {!!languageName($item->content)!!}
                     </div>
                     <div class="feedback__author">
                        <div class="feedback__avatar">
                           <img src="{{$item->avatar}}" alt="author__1.png" />
                        </div>
                        <div class="feedback__header">
                           <h3 class="feedback__name">{{languageName($item->name)}}</h3>
                        </div>
                        <div class="feedback__desc">
                           {{languageName($item->position)}}
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </section>
   <section class="home-post">
      <div class="container">
         <div class="module__header">
            <h2 class="title__global">Bài viết chuyên môn</h2>
         </div>
         <div class="module__content">
            <div class="post">
               @foreach ($hotnews as $item)
               <div class="post__item">
                  <a href="{{route('detailBlog',['slug'=>$item->slug])}}" class="frame post__avatar" title="{{languageName($item->title)}}">
                  <img src="{{$item->image}}" alt="{{languageName($item->title)}}" />
                  </a>
                  <h2 class="post__title" title="{{languageName($item->title)}}">
                     <a href="{{route('detailBlog',['slug'=>$item->slug])}}">
                     {{languageName($item->title)}}
                     </a>
                  </h2>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </section>
   <section class="home-library">
      <div class="container">
         <div class="module__header">
            <h2 class="title__global">Thư viện hình ảnh</h2>
         </div>
         <div class="module__module">
            <div class="library">
               <div class="library__one">
                  @foreach ($album as $item)
                  <div class="library__item">
                     <div class="library__box">
                        <div class="frame">
                           <img src="{{$item->image}}" alt="library__1.jpg" />
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
               <div class="album">
                  <div class="album__slider">
                     @foreach ($album as $item)
                     <div class="album__item">
                        <div class="album__box">
                           <div class="frame">
                              <img src="{{$item->image}}" alt="library__1.jpg" />
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="home-committed">
      <div class="container">
         <div class="module__header">
            <h2 class="title__global">CAM KẾT VỚI KHÁCH HÀNG</h2>
         </div>
         <div class="module__content">
            <div class="committed">
               @foreach ($bannerqc as $item)
               <div class="committed__item">
                  <div class="committed__box">
                     <div class="frame">
                        <img src="{{$item->image}}" alt="{{$item->name}}" />
                     </div>
                     <div class="committed__comment">
                        <h3 class="committed__title">
                           {{$item->name}}
                        </h3>
                        <div class="committed__desc">
                           {{languageName($item->description)}}
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
               
            </div>
         </div>
      </div>
   </section>
   
   <section class="appointment" id="appointment">
      <div class="container">
         <div class="module__content">
            <div class="appointment">
               <div class="frame appointment__banner">
                  <img src="{{ env('AWS_R2_URL') }}/frontend/images/library__1.jpg" alt="Hẹn lịch khám" />
               </div>
               <div class="appointment__item">
                  <h2 class="title__global">Hẹn lịch khám</h2>
                  <div class="appointment__not">
                     Mọi thắc mắc, câu hỏi chuyên sâu hay cần tư vấn thêm về từng trường hợp, xin vui lòng gửi thông tin theo mẫu dưới đây. Phòng khám sẽ phản hồi trong vòng 24h ngay khi nhận được thông tin.
                  </div>
                  <form class="form" id="myFormHome" method="POST">
                     <div class="row">
                        <div class="col">
                           <input type="text" name="name" placeholder="Họ và Tên" />
                           <span class="fr-error" id="error_name"></span>
                        </div>
                        <div class="col">
                           <input type="text" name="phone" placeholder="Điện thoại" />
                           <span class="fr-error" id="error_phone"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col">
                           <input type="email" name="email" placeholder="Email" />
                           <span class="fr-error" id="error_email"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col">
                           <select name="service" id="">
                              <option value="">Dịch vụ cần tư vấn</option>
                              @foreach ($categoryhome as $item)
                              <option value="{{languageName($item->name)}}">{{languageName($item->name)}}</option>
                              @endforeach
                           </select>
                           <span class="fr-error" id="error_service"></span>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col">
                           <textarea name="note" placeholder="Ghi chú"></textarea>
                        </div>
                     </div>
                     <button class="btn btn__submit" type="submit">
                        <span class="loader ml-15 spin-icon"></span>
                     Hẹn lịch khám
                     </button>
                  </form>
                  <script>
                     $('#myFormHome').validate({
                              rules: {
                                 "name": {
                                    required: true,
                                 },
                                 "phone": {
                                    required: true,
                                    minlength: 10,
                                    digits: true,
                                 }
                              },
                              messages: {
                                 "name": {
                                    required: "Tên bạn là gì?",
                                 },
                                 "phone": {
                                    required: "Nhập sdt liên hệ",
                                    digits:"Nhập đúng định dạng số điện thoại",
                                    minlength:"Nhập tối thiểu 10 số"
                                 }
                              },
                           submitHandler: function(form) {
                              $(".spin-icon").css("display", "block");
                              $.ajax({
                               url: "https://script.google.com/macros/s/AKfycbznqMwvk-JLBHp1bmXhkRaLt5sIx55MTLhWi8oWMTGNIulRuedQnidtCPcCAyZrnqxd/exec",
                               type: "post",
                               data: $("#myFormHome").serializeArray(),
                               success: function () {
                                  $(".spin-icon").css("display", "none");
                                 jQuery.notify("Thành công! Chúng tôi sẽ sớm liên hệ", "success");
                               },
                               error: function () {
                                 jQuery.notify("Gửi thông tin thất bại", "error");
                               }
                            });
                           }
                           });
                  </script>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
      
@endsection