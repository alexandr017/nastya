@section('title', $page->title)
@section('meta_description', $page->meta_description)
@extends('site.layout')

@section('content')

    <!-- start banner Area -->
    <section class="about-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">{{$page->h1}}</h1>
                    <p class="text-white link-nav"><a href="/">Главная </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> {{$page->breadcrumb}}</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

{{--    <!-- Start top-category-widget Area -->--}}
{{--    <section class="top-category-widget-area pt-90 pb-90 ">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                @foreach($posts as $post)--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="single-cat-widget">--}}
{{--                        <div class="content relative">--}}
{{--                            <div class="overlay overlay-bg"></div>--}}
{{--                            <a href="/blog/{{$post->alias}}" target="_blank">--}}
{{--                                <div class="thumb">--}}
{{--                                    <img class="content-image img-fluid d-block mx-auto" src="{{$post->preview}}" alt="{{$post->h1}}">--}}
{{--                                </div>--}}
{{--                                <div class="content-details">--}}
{{--                                    <h4 class="content-title mx-auto">{{$post->h1}}</h4>--}}
{{--                                    <span></span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                    <br>--}}
{{--                    <br>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End top-category-widget Area -->--}}





    <!-- Start blog Area -->
    <section class="recent-blog-area section-gap">

        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-40 col-lg-8">
                    <div class="title text-center lead">
                        <p>{{$page->lead}}</p>
                    </div>
                </div>
            </div>

            <div class="row">


                    @foreach($posts as $post)
                    <div class="col-sm-12 col-md-4 blog-post">
                        <div class="single-recent-blog-post item">
                            <div class="thumb">
                                <a href="/blog/{{$post->alias}}"> <img class="img-fluid" src="{{$post->preview}}" alt="{{$post->h1}}"></a>
                            </div>
                            <div class="details">

                                <a href="/blog/{{$post->alias}}"><h4 class="title">{{$post->h1}}</h4></a>
                                <p>{{$post->meta_description}}</p>
                                <h6 class="date">{{date('d.m.Y', strtotime($post->date))}}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach



            </div>
        </div>
    </section>
    <!-- End recent-blog Area -->


    <style>
        .blog-post {
            margin-bottom: 40px;
        }
    </style>

@endsection
