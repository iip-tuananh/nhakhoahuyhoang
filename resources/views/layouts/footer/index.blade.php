<footer id="footer">
   <div class="container">
       <div class="group">
           <div class="item">
               <a href="{{ url('/') }}" class="logo__f">
                   <img src="{{ url(@$setting->logo) }}" alt="icon__logo.png" />
               </a>
               <div class="note">
                   {!! @$setting->webname !!}
               </div>

               <a href="" target="bank_" class="link__" title="Map">
                   <span class="icon">
                       <img src="{{ url('frontend/images/icons/icon__map.png') }}" alt="icon__map.png" />
                   </span>
                   <span class="text">
                       {{ @$setting->address1 }}
                   </span>
               </a>
               <p class="link__">
                   <span class="icon">
                       <img src="{{ url('frontend/images/icons/icon__time.png') }}" alt="icon__time.png" />
                   </span>
                   <span class="text"> Giờ mở cửa: 8:00 - 19:00 </span>
               </p>
               <p class="link__">
                   <span class="icon">
                       <img src="{{ url('frontend/images/icons/icon__c2.png') }}" alt="icon__c.png" />
                   </span>
                   <span class="text">
                     Ngày hoạt động: Thứ hai - Chủ nhật
                   </span>
               </p>
               <a href="tel:{{ @$setting->hotline }}" class="link__" title="Map">
                   <span class="icon">
                       <img src="{{ url('frontend/images/icons/icon__phone.png') }}" alt="icon__phone.png" />
                   </span>
                   <span class="text"> {{ @$setting->phone1 }} </span>
               </a>
           </div>
           <div class="item">
               <h3 class="footer__title">Về chúng tôi</h3>
               <ul class="list">
                   @foreach ($pageContent as $item)
                       @if($item->type == 've-chung-toi')
                       <li class=" ">
                            <a href="{{route('pagecontent',['slug'=>$item->slug])}}" title=" {{$item->title}}">
                                {{$item->title}}
                            </a>
                        </li>
                       @endif
                   @endforeach
                
               </ul>
           </div>
           <div class="item">
               <h3 class="footer__title">Vị trí</h3>
               <div class="group_fg">
                   <div class="google__map frame">
                       {!! @$setting->iframe_map !!}
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="footer__bottom">
       <div class="container">
           <div class="bottom__group">
               <span> Nha Khoa Huy Hoang  2025. All Rights Reserved</span>
           </div>
       </div>
   </div>	
</footer>






