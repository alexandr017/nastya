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
                    <a href="/attractions" class="primary-btn text-uppercase">Перейти</a>
                </div>
                <div class="col-lg-4 col-md-6 banner-right">
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start popular-destination Area -->
    <section class="popular-destination-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Популярные достопримечательности</h1>
                        <p>Топ самых популярных достопримечательностей в Гродно</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-destination relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="/template/img/d1.jpg" alt="">
                        </div>
                        <div class="desc">
                            <a href="#" class="price-btn">$150</a>
                            <h4>Mountain River</h4>
                            <p>Paraguay</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-destination relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="/template/img/d2.jpg" alt="">
                        </div>
                        <div class="desc">
                            <a href="#" class="price-btn">$250</a>
                            <h4>Dream City</h4>
                            <p>Paris</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-destination relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="/template/img/d3.jpg" alt="">
                        </div>
                        <div class="desc">
                            <a href="#" class="price-btn">$350</a>
                            <h4>Cloud Mountain</h4>
                            <p>Sri Lanka</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End popular-destination Area -->







    <!-- Start testimonial Area -->
    <section class="testimonial-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Testimonial from our Clients</h1>
                        <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-testimonial">

                    @foreach($reviews as $review)
                    <div class="single-testimonial item d-flex flex-row">
{{--                        <div class="thumb">--}}
{{--                            <img class="img-fluid" src="/template/img/elements/user1.png" alt="">--}}
{{--                        </div>--}}
                        <div class="desc">
                            <p>{{$review->review}}</p>
                            <h4>{{$review->name}}</h4>
                            <div class="star">
                                @for($i = 1; $i <= 5; $i++)
                                    <span class="fa fa-star @if($i <= $review->rating) checked @endif"></span>
                                @endfor
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonial Area -->

    <!-- Start home-about Area -->
    <section class="home-about-area">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6 col-md-12 home-about-left">
                    <h1>
                        Советская улица - <br>как отдельная достопримечательность
                    </h1>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
                    </p>
                    <a href="#" class="primary-btn text-uppercase">Подробнее</a>
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
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <img class="img-fluid" src="/template/img/b1.jpg" alt="">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <ul>
                                    <li>
                                        <a href="#">Travel</a>
                                    </li>
                                    <li>
                                        <a href="#">Life Style</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#"><h4 class="title">Low Cost Advertising</h4></a>
                            <p>
                                Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                            </p>
                            <h6 class="date">31st January,2018</h6>
                        </div>
                    </div>
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <img class="img-fluid" src="/template/img/b2.jpg" alt="">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <ul>
                                    <li>
                                        <a href="#">Travel</a>
                                    </li>
                                    <li>
                                        <a href="#">Life Style</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#"><h4 class="title">Creative Outdoor Ads</h4></a>
                            <p>
                                Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                            </p>
                            <h6 class="date">31st January,2018</h6>
                        </div>
                    </div>
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <img class="img-fluid" src="/template/img/b3.jpg" alt="">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <ul>
                                    <li>
                                        <a href="#">Travel</a>
                                    </li>
                                    <li>
                                        <a href="#">Life Style</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#"><h4 class="title">It's Classified How To Utilize Free</h4></a>
                            <p>
                                Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                            </p>
                            <h6 class="date">31st January,2018</h6>
                        </div>
                    </div>
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <img class="img-fluid" src="/template/img/b1.jpg" alt="">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <ul>
                                    <li>
                                        <a href="#">Travel</a>
                                    </li>
                                    <li>
                                        <a href="#">Life Style</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#"><h4 class="title">Low Cost Advertising</h4></a>
                            <p>
                                Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                            </p>
                            <h6 class="date">31st January,2018</h6>
                        </div>
                    </div>
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <img class="img-fluid" src="/template/img/b2.jpg" alt="">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <ul>
                                    <li>
                                        <a href="#">Travel</a>
                                    </li>
                                    <li>
                                        <a href="#">Life Style</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#"><h4 class="title">Creative Outdoor Ads</h4></a>
                            <p>
                                Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                            </p>
                            <h6 class="date">31st January,2018</h6>
                        </div>
                    </div>
                    <div class="single-recent-blog-post item">
                        <div class="thumb">
                            <img class="img-fluid" src="/template/img/b3.jpg" alt="">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <ul>
                                    <li>
                                        <a href="#">Travel</a>
                                    </li>
                                    <li>
                                        <a href="#">Life Style</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="#"><h4 class="title">It's Classified How To Utilize Free</h4></a>
                            <p>
                                Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                            </p>
                            <h6 class="date">31st January,2018</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End recent-blog Area -->


@endSection
