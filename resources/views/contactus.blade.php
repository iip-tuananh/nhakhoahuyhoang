@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('frontend/css/pages/page__contact.css') }}" />
@endsection
@section('js')
@endsection
@section('content')
<main id="main">
	<section class="banner__global">
		<div class="frame">
			<img src="{{url('frontend/images/banner__2.jpg')}}" alt="banner__2.jpg">
		</div>
		<div class="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="{{route('home')}}" title="Trang chủ">Trang chủ</a></li>
					<li>
						<a href="{{url()->current()}}" title="Liên hệ">Liên hệ</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="page__contact">
		<div class="container">
			<h2 class="title__global">NHA KHOA HUY HOANG</h2>
			<div class="module__content">
				<div class="contact">
					<div class="contact__item">
						<div class="contact__icon">
							<img src="https://nhakhoavictorialuxury.com/uploads/images/icons/icon__map.png" alt="icon__map.png">
						</div>
						<h3 class="contact__title">
							{{$setting->address1}}
						</h3>
					</div>
					<div class="contact__item">
						<div class="contact__icon">
							<img src="https://nhakhoavictorialuxury.com/uploads/images/icons/icon__time.png" alt="icon__time.png">
						</div>
						<h3 class="contact__title">
							Giờ mở cửa: <br>
							8:00 - 19:00
						</h3>
					</div>
					<div class="contact__item">
						<div class="contact__icon">
							<img src="https://nhakhoavictorialuxury.com/uploads/images/icons/icon__c.png" alt="icon__c.png">
						</div>
						<h3 class="contact__title">
							Ngày hoạt động: <br>
							Thứ hai - Chủ nhật
						</h3>
					</div>
					<div class="contact__item">
						<div class="contact__icon">
							<img src="https://nhakhoavictorialuxury.com/uploads/images/icons/icon__phone.png" alt="icon__phone.png">
						</div>
						<h3 class="contact__title">
							Hotline: <br>
							{{$setting->phone1}}
						</h3>
					</div>
				</div>
				<div class="contact__from">
					<h2 class="title__global">Liên hệ với chúng tôi</h2>
					<form id="frm_contact" action="{{route('postcontact')}}" method="post" class="form">
						@csrf
						<div class="form__item">
							<input type="text" name="name" placeholder="Họ tên" required>
							<input type="text" name="phone" placeholder="Số điện thoại" required>
							<input type="text" name="address" placeholder="Địa chỉ" required>
							<input type="email" name="email" placeholder="Email">
							<textarea name="mess" placeholder="Nội dung"></textarea>
							<span class="fr-error" id="error_content"></span>
							<button type="submit" class="btn btn__submit btn_contact">Gửi</button>
						</div>
						<div class="frame">
						{!!$setting->iframe_map!!}
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
@endsection