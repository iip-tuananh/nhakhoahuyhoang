@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$img = json_decode($product->images);
@endphp
{{url(''.$img[0])}}
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/cmRelated.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/detail-global.css') }}" />
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
                        <a href="" title="{{isset($product->typeCate) ? languageName($product->typeCate->name) : languageName($product->cate->name)}}">{{isset($product->typeCate) ? languageName($product->typeCate->name) : languageName($product->cate->name)}}</a>
                    </li>
                    <li>
                        <a href="{{ url()->current() }}" title="{{languageName($product->name)}}">{{languageName($product->name)}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="detail__braces">
        <div class="container">
            <div class="module module__detail-news">
                <div class="detail__group">
                    <h1 class="detail__header">
                        {{languageName($product->name)}}
                    </h1>
                    <div class="detail__introduce-box">
                        <div class="date-time">
                            <img src="{{ url('frontend/images/icons/icon__calendar-1.png') }}" alt="icon__calendar-1.png" />
                            <time class="time">{{ $product->created_at->format('d/m/Y') }}</time>
                        </div>
                        <div class="content">
                            {!!languageName($product->content)!!}
                        </div>
                        <div class="fb-comments" data-href="{{ url()->current() }}" data-numposts="5" data-width="auto"></div>
                    </div>
                </div>

                <div class="sidebar__group">
                    <div class="sidebar__list">
                        <div class="sidebar--item">
                            <h3 class="sidebar-title">Dịch vụ gợi ý</h3>
                            <div class="sidebar-content">
                                @foreach ($goiy as $item)
                                <div class="sidebar__content-item" title="{{ languageName($item->name) }}">
                                    <a href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}">
                                        {{ languageName($item->name) }}
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__list">
                        <div class="sidebar--item">
                            <h3 class="sidebar-title">Tin tức cập nhật</h3>
                            <div class="sidebar-content">
                                @foreach ($news as $item)
                                <div class="sidebar__content-item" title="{{ languageName($item->title) }}">
                                    <a href="{{route('detailBlog',['slug'=>$item->slug])}}">
                                        {{ languageName($item->title) }}
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="post-related">
        <div class="container">
            <div class="module__header">
                <h2 class="title__global">Dịch vụ liên quan</h2>
            </div>
            <div class="module__content">
                <div class="related">
                    @foreach ($productlq as $item)
                    @php
                        $imgs = json_decode($item->images);
                    @endphp
                    <div class="related__item">
                        <a href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}" class="frame related__avatar">
                            <img src="{{ $imgs[0] }}" alt="{{ languageName($item->name) }}" />
                        </a>
                        <h3 class="relate__title">
                            <a href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}" title="{{ languageName($item->name) }}">
                                {{ languageName($item->name) }}
                            </a>
                        </h3>
                        <div class="relate__desc">
                            {!! languageName($item->description) !!}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

