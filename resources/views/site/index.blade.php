@section('title', $page->title)
@section('meta_description', $page->meta_description)
@extends('site.layout')

@section('content')

    <!-- start banner Area -->
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 banner-left">
                    <h1 class="text-white">{{$page->h1}}</h1>
                    <p class="text-white">
                        {{$page->lead}}
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 banner-right">
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start popular-destination Area -->
    <section class="destinations-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-40 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Вам будет интересно</h1>
{{--                        <p>{{$page->lead}}</p>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($attractions as $attraction)
                    <div class="col-lg-4">
                        <div class="single-destinations">
                            <div class="thumb">
                                <img src="{{$attraction->preview}}" alt="{{$attraction->h1}}" loading="lazy">
                            </div>
                            <div class="details">
                                <h4 class="d-flex justify-content-between">
                                    <span>{{$attraction->h1}}</span>
                                </h4>
                                <ul class="package-list">
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Расстояние от центра Гродно</span>
                                        <span>{{$attraction->distance_from_center}} км.</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Бесплатный вход</span>
                                        <span>@if($attraction->is_free_entry) Да @else Нет @endif</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Наличие экскурсии</span>
                                        <span>@if($attraction->is_availability_of_excursions) Да @else Нет @endif</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Музей</span>
                                        <a href="/attractions/{{$attraction->alias}}" class="price-btn">Подробнее</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
            <a href="/attractions">Посмотреть все</a>
        </div>
    </section>
    <!-- End popular-destination Area -->







{{--    <!-- Start testimonial Area -->--}}
{{--    <section class="testimonial-area section-gap">--}}
{{--        <div class="container">--}}
{{--            <div class="row d-flex justify-content-center">--}}
{{--                <div class="menu-content pb-70 col-lg-8">--}}
{{--                    <div class="title text-center">--}}
{{--                        <h1 class="mb-10">Testimonial from our Clients</h1>--}}
{{--                        <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="active-testimonial">--}}

{{--                    @foreach($reviews as $review)--}}
{{--                    <div class="single-testimonial item d-flex flex-row">--}}
{{--                        <div class="thumb">--}}
{{--                            <img class="img-fluid" src="/template/img/elements/user1.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="desc">--}}
{{--                            <p>{{$review->review}}</p>--}}
{{--                            <h4>{{$review->name}}</h4>--}}
{{--                            <div class="star">--}}
{{--                                @for($i = 1; $i <= 5; $i++)--}}
{{--                                    <span class="fa fa-star @if($i <= $review->rating) checked @endif"></span>--}}
{{--                                @endfor--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- End testimonial Area -->--}}

    <!-- Start home-about Area -->
    <section class="home-about-area">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6 col-md-12 home-about-left">
                    <h1>Советская улица: <br>историческая артерия Гродно</h1>
                    <p>Советская улица — одна из старейших и самых известных улиц Гродно, областного центра на западе Беларуси. Она появилась здесь еще во времена Советского Союза, в честь которого и была названа.</p>
                    <a href="/attractions/sovetskaia-ulica" class="primary-btn text-uppercase">Подробнее</a>
                </div>
                <div class="col-lg-6 col-md-12 home-about-right no-padding">
                    <img class="img-fluid" src="/template/images/right-banner.jpg" alt="улица Советская">
                </div>
            </div>
        </div>
    </section>
    <!-- End home-about Area -->


    <!-- Start blog Area -->
    <section class="recent-blog-area section-gap">
{{--        @foreach($posts as $post)--}}
{{--            {{$post->h1}}<br>--}}
{{--        @endforeach--}}

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-9">
                    <div class="title text-center">
                        <h1 class="mb-10">Последние записи блога</h1>
                        <p>Самая свежая и актуальная информация для гостей города и области. Помощь для туристов, студентов и много другой полезной информации.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-recent-blog-carusel">

                    @foreach($posts as $post)
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <a href="/blog/{{$post->alias}}"> <img class="img-fluid" src="{{$post->preview}}" alt=""></a>
                        </div>
                        <div class="details">

                            <a href="/blog/{{$post->alias}}"><h4 class="title">{{$post->h1}}</h4></a>
                            <p>{{$post->meta_description}}</p>
                            <h6 class="date">{{date('d.m.Y', strtotime($post->date))}}</h6>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <!-- End recent-blog Area -->


@endSection
