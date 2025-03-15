@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('js')
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/cmPost.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/page__news.css') }}" />
@endsection
@section('content')
<main id="main">
    <section class="banner__global">
        <div class="breadcrumb">
            <div class="container">
                <ul>
                    <li><a href="{{ url('/') }}" title="Trang chủ">Trang chủ</a></li>
                    <li>
                        <a href="" title="{{$title}}">{{$title}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="page-news">
        <div class="container">
            <div class="module__header">
                <h1 class="title__global">Dịch vụ {{$title}}</h1>
            </div>
            <div class="module__content">
                <div class="promotion">
                   @if (count($list)>0)
                   <div class="promotion__group">
                     @foreach ($list as $item)
                         @php
                               $img = json_decode($item->images);
                         @endphp
                         <div class="post__global">
                             <a href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}" class="frame" title="{{languageName($item->name)}}">
                                 <img src="{{$img[0] }}" alt="{{languageName($item->name)}}" />
                             </a>
                             <div class="post__content">
                                 <h3 class="post__title">
                                     <a href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}" title="{{languageName($item->name)}}">
                                         {{languageName($item->name)}}
                                     </a>
                                 </h3>
                                 <div class="post__desc">
                                  {!!languageName($item->description)!!}
                                 </div>
                                 <a href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}" class="btn btn__submit" title="Xem thêm">
                                     Xem thêm
                                 </a>
                             </div>
                         </div>
                     @endforeach
                     </div>
                       @else
                     <h3>Nội dung đang được cập nhật..</h3>
                   @endif
                    
                    
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

