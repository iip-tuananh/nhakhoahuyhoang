<header id="header">
   <div class="header-top">
      <div class="container">
         <a href="{{ url('/') }}" class="logo" title="suyn fashion">
         <img src="{{ url(@$setting->logo) }}" alt="icon__logo.png">
         </a>
         <div class="top-group">
            <div class="top-item">
               <div class="top-icon">
                  <img src="{{ url('frontend/images/icons/icon__add.png') }}" alt="" />
               </div>
               <a href="javascript:;" class="top-link">
                  <h3 class="top-title">Địa chỉ</h3>
                  <p class="top-content">
                     {{ @$setting->address1 }}
                  </p>
               </a>
            </div>
            <div class="top-item">
               <div class="top-icon">
                  <img src="{{ url('frontend/images/icons/icon__phone.png') }}" alt="" />
               </div>
               <a href="tel:+ {{ @$setting->phone1 }}" class="top-link">
                  <h3 class="top-title">Hotline</h3>
                  <h4>{{ @$setting->phone1 }}</h4>
               </a>
            </div>
            <a href="javascript:void(0)" class="top-calendar" modal-show="show" modal-data="#calendar">
               <img src="{{ url('frontend/images/icons/icon__calendar.png') }}" alt="" />
               <h4>Hẹn lịch khám</h4>
            </a>
         </div>
         <button class="btn toggle__menu">
         <img src="{{ url('frontend/images/icons/icon__menu.png') }}" alt="" />
         </button>
      </div>
   </div>
   <div class="header__main" >
      <div class="container">
         <div class="addon__menu">
            <div class="box__menu">
               <ul class="menu">
                  <li class="menu__list   ">
                     <a href="{{route('home')}}" class="menu__link" title="Trang chủ">Trang chủ</a>
                  </li>
                  <li class="menu__list   ">
                     <a href="{{route('aboutUs')}}" class="menu__link" title="Giới thiệu">Giới thiệu</a>
                  </li>
                  <li class="menu__list   ">
                     <a href="" class="menu__link" title="Dịch vụ">Dịch vụ</a>
                     <ul class="">
                        @foreach ($categoryhome as $item)
                        <li>
                           <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}" title="{{languageName($item->name)}}">
                              {{languageName($item->name)}}
                           </a>
                        </li>
                        @endforeach
                     </ul>
                  </li>
                  @foreach ($blogCate as $item)
                  <li class="menu__list   ">
                     <a href="{{route('listCateBlog',['slug'=>$item->slug])}}" class="menu__link" title="{{languageName($item->name)}}">{{languageName($item->name)}}</a>
                     @if (count($item->typeCate)>0)
                     <ul class="">
                        @foreach ($item->typeCate as $i)
                        <li>
                           <a href="{{route('listTypeBlog',['slug'=>$i->slug])}}" title=" {{languageName($i->name)}}">
                           {{languageName($i->name)}}
                           </a>
                        </li>
                        @endforeach
                     </ul>
                     @endif
                  </li>
                  @endforeach
                  <li class="menu__list   ">
                     <a href="{{route('lienHe')}}" class="menu__link" title="Liên hệ">Liên hệ</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</header>
<div class="bs-modal" id="calendar">
   <div class="modal-frame">
      <div class="content-modal">
         <div class="body-modal">
            <div class="calendar">
               <button type="button" title="close" modal-show="close" class="btn close__modal">
               X
               </button>
               <div class="calendar__banner">
                  <img src="{{ url('frontend/images/calendar.png') }}" alt="calendar.png" />
               </div>
               <form class="calendar__form" id="myForm">
                  <h3 class="calendar__title">
                     Xin vui lòng để lại thông tin! phòng khám sẽ liên hệ
                     tư vấn cho bạn trong thời gian sớm nhất
                  </h3>
                  <div class="row">
                     <div class="col">
                        <input type="text" name="name" placeholder="Họ và Tên" />
                     </div>
                     <div class="col">
                        <input type="text" name="phone" placeholder="Điện thoại" />
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <input type="text" name="address" placeholder="Địa chỉ" />
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <input type="textt" name="email" placeholder="Email" />
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
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <textarea name="note" placeholder="Ghi chú"></textarea>
                     </div>
                  </div>
                  <button class="btn btn__submit" type="submit"><span class="loader ml-15 spin-icon"></span> Gửi</button>
               </form>
            </div>
         </div>
      </div>
   </div>
   <script>
      $('#myForm').validate({
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
                data: $("#myForm").serializeArray(),
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
    <script>
      window.onscroll = function() {myFunction()};
      
      var header = document.getElementById("header");
      var sticky = header.offsetTop;
      
      function myFunction() {
        if (window.pageYOffset > sticky) {
          header.classList.add("sticky");
        } else {
          header.classList.remove("sticky");
        }
      }
      </script>
      <style>
         .sticky {
  position: fixed;
  top: 0;
  width: 100%;
  
  z-index: 9999;
}
      </style>
</div>