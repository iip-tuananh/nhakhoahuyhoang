<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="{{url(''.$setting->favicon)}}"
	   type="image/x-icon" />
	<link rel="apple-touch-icon"
	   href="{{url(''.$setting->favicon)}}">
	<meta name="robots" content="noodp,index,follow" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>@yield('title')</title>

	<link rel="canonical" href="{{\Request::url()}}" />
	<meta property="og:locale" content="vi_VN" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="@yield('title')" />
	<meta property="og:description" content="@yield('description')" />
	<meta property="og:url" content="{{\Request::url()}}" />
	<meta property="og:site_name" content="JicaFood" />
	<meta property="og:image" content="@yield('image')" />
	<meta property="og:image:secure_url" content="@yield('image')" />
	<meta property="og:image:width" content="548" />
	<meta property="og:image:height" content="343" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="@yield('description')" />
	<meta name="twitter:title" content="@yield('title')" />
	<meta name="twitter:image" content="@yield('image')" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet" />


	 <!--link css-->

	 <link rel="stylesheet" type="text/css" title="" href="{{ env('AWS_R2_URL') }}/frontend/css/tool.css">

     <link rel="stylesheet" type="text/css" title="" href="{{ env('AWS_R2_URL') }}/frontend/css/main.css">

	<link rel="stylesheet" type="text/css" title="" href="{{ env('AWS_R2_URL') }}/frontend/css/toastr.min.css">

    <link rel="stylesheet" type="text/css" title="" href="{{ env('AWS_R2_URL') }}/frontend/css/custom.css">
	<link rel="stylesheet" type="text/css" title="" href="{{ env('AWS_R2_URL') }}/frontend/css/callbuttom.css">
	<link rel="stylesheet" type="text/css" title="" href="{{ env('AWS_R2_URL') }}/frontend/css/notify.css">
	<script type="text/javascript" src="{{ env('AWS_R2_URL') }}/frontend/js/plugins/jquery.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    @yield('css')

	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
	<body>
		<div class="loadingcover" style="display: none;">
			<p class="csslder">
				<span class="csswrap">
					<span class="cssdot"></span>
					<span class="cssdot"></span>
					<span class="cssdot"></span>
				</span>
			</p>
		</div>

        <div class="wrapper">

		@include('layouts.header.index')

			@yield('content')

		@include('layouts.footer.index')
		@if(Session::has('success'))
		<div class="lobibox-notify-wrapper top right">
			<div class="lobibox-notify lobibox-notify-success animated-fast fadeInDown without-icon notify-mini" style="width: 368px;">
				<div class="lobibox-notify-icon-wrapper">
					<div class="lobibox-notify-icon">
						<div></div>
					</div>
				</div>
				<div class="lobibox-notify-body">
					<div class="lobibox-notify-msg" style="max-height: 32px;">{{ Session::get('success') }}</div>
				</div>
				<span class="lobibox-close" onclick="$('.lobibox-notify-wrapper').remove()">×</span>
			</div>
		</div>
		@endif
		@if(Session::has('error'))
		<div class="lobibox-notify-wrapper top right">
			<div class="lobibox-notify lobibox-notify-error animated-fast fadeInDown without-icon notify-mini" style="width: 368px;">
				<div class="lobibox-notify-icon-wrapper">
					<div class="lobibox-notify-icon">
						<div></div>
					</div>
				</div>
				<div class="lobibox-notify-body">
					<div class="lobibox-notify-msg" style="max-height: 32px;">{{ Session::get('error') }}</div>
				</div>
				<span class="lobibox-close" onclick="$('.lobibox-notify-wrapper').remove()">×</span>
			</div>
		</div>
		@endif
		<div class="notify bar-top do-show" >
		</div>
		<div onclick="window.location.href= 'tel:{{$setting->phone1}}'" class="hotline-phone-ring-wrap">
		  <div class="hotline-phone-ring">
			 <div class="hotline-phone-ring-circle"></div>
			 <div class="hotline-phone-ring-circle-fill"></div>
			 <div class="hotline-phone-ring-img-circle">
				<a href="tel:{{$setting->phone1}}" class="pps-btn-img">
				   <img src="{{url('frontend/images/phone.png')}}" alt="Gọi điện thoại" width="50">
				</a>
			 </div>
		  </div>
		  <a href="tel:{{$setting->phone1}}">
		  </a>
		  <div class="hotline-bar"><a href="tel:{{$setting->phone1}}">
			 </a><a href="tel:{{$setting->phone1}}">
				<span class="text-hotline">{{$setting->phone1}}</span>
			 </a>
		  </div>
	
	   </div>
	   <div class="inner-fabs show"><a target="blank" href="{{$setting->facebook}}" class="fab roundCool"
			 id="challenges-fab" data-tooltip="Chỉ đường bản đồ">
			 <img class="inner-fab-icon" src="{{url('frontend/images/facebook-icon.png')}}" alt="challenges-icon" border="0">
		  </a><a target="blank" href="https://zalo.me/{{$setting->phone1}}" class="fab roundCool" id="chat-fab"
			 data-tooltip="Nhắn tin Zalo">
			 <img class="inner-fab-icon" src="{{url('frontend/images/zalo.png')}}" alt="chat-active-icon" border="0">
		  </a>
	   </div>
	   <div class="fab roundCool call-animation" id="main-fab">
		  <img class="img-circle" src="{{url('frontend/images/lienhe2.png')}}" alt="">
	   </div>

        </div>

		<!--Link js-->


      

        <script type="module" src="{{ env('AWS_R2_URL') }}/frontend/js/main.js"></script>

		<script type="text/javascript" src="{{ env('AWS_R2_URL') }}/frontend/js/toastr.min.js"></script>

        <script type="text/javascript" src="{{ env('AWS_R2_URL') }}/frontend/js/customer.js"></script>
		<script type="text/javascript" src="{{ env('AWS_R2_URL') }}/frontend/js/callbuttom.js"></script>
		<script type="text/javascript" src="{{ env('AWS_R2_URL') }}/frontend/js/notify.js"></script>
		<script type="text/javascript" src="{{ env('AWS_R2_URL') }}/frontend/js/notify.min.js"></script>
        @yield('script')

		<script type="text/javascript">
			$(document).ready(function(){
				toastr.options = {
					"closeButton": false,
					"debug": false,
					"newestOnTop": false,
					"progressBar": false,
					"positionClass": "toast-top-right",
					"preventDuplicates": false,
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "5000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				}
			});
		</script>




	</body>
</html>
