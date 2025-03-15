@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
Tin tức nổi bật và mới nhất
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
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
                        <a href="" title="{{$title_page}}">{{$title_page}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="page-news">
        <div class="container">
            <div class="module__header">
                <h1 class="title__global">{{$title_page}}</h1>
            </div>
            <div class="module__content">
                <div class="promotion">
                    @if (count($blog) > 0)
                    <div class="promotion__group">
                        @foreach ($blog as $item)
                        <div class="post__global">
                            <a href="{{route('detailBlog',['slug'=>$item->slug])}}" class="frame" title="{{languageName($item->title)}}">
                                <img src="{{$item->image }}" alt="{{languageName($item->title)}}" />
                            </a>
                            <div class="post__content">
                                <h3 class="post__title">
                                    <a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">
                                        {{languageName($item->title)}}
                                    </a>
                                </h3>
                                <time class="post__time">
                                    <span class="icon">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>
                                    <span class="text"> {{date_format($item->created_at,'d/m/Y')}} </span>
                                </time>
                                <div class="post__desc">
                                    {{languageName($item->description)}}
                                </div>
                                <a href="{{route('detailBlog',['slug'=>$item->slug])}}" class="btn btn__submit" title="Xem thêm">
                                    Xem thêm
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                        @else
                    <h3>Nội dung đang được cập nhật...</h3>
                    @endif
                    
                    
                </div>
            </div>
        </div>
    </section>
</main>
@endsection