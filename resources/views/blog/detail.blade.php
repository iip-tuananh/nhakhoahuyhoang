@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
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
                        <a href="{{ url()->current() }}" title="{{languageName($blog_detail->title)}}">{{languageName($blog_detail->title)}}</a>
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
                        {{languageName($blog_detail->title)}}
                    </h1>
                    <div class="detail__introduce-box">
                        <div class="date-time">
                            <img src="{{ url('frontend/images/icons/icon__calendar-1.png') }}" alt="icon__calendar-1.png" />
                            <time class="time">{{date_format($blog_detail->created_at,'d/m/Y')}}</time>
                        </div>
                        <div class="content">
                            {!!languageName($blog_detail->content)!!}
                        </div>
                        <div class="fb-comments" data-href="{{ url()->current() }}" data-numposts="5" data-width="auto"></div>
                    </div>
                </div>

                <div class="sidebar__group">
                    <div class="sidebar__list">
                        <div class="sidebar--item">
                            <h3 class="sidebar-title">Tin tức mới nhất</h3>
                            <div class="sidebar-content">
                                @foreach ($bloglq as $item)
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
</main>
@endsection