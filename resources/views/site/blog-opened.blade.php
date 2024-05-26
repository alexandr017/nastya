{{--@section('title', $page->title)--}}
{{--@section('meta_description', $page->meta_description)--}}
@extends('site.layout')


@section('content')
    <!-- start banner Area -->
    <section class="about-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">{{$post->h1}}</h1>
                    <p class="text-white link-nav">
                        <a href="/">Главная </a>  <span class="lnr lnr-arrow-right"></span>
                        <a href="/blog">Блог</a>  <span class="lnr lnr-arrow-right"></span>
                        <a href="#">{{$post->h1}}</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->


    <section class="post-content-area single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="{{$post->preview}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3 meta-details">
                            <div class="user-details row">
                                <p class="date col-lg-12 col-md-12 col-6"><a href="#">{{date('d.m.Y', strtotime($post->date))}}</a> <span class="lnr lnr-calendar-full"></span></p>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <h3 class="mt-20 mb-20">{{$post->h1}}</h3>
                           <div class="content">{!! $post->content !!}</div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 sidebar-widgets">
                </div>
            </div>
        </div>
    </section>


@endsection
