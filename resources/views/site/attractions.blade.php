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

<!-- Start destinations Area -->
<section class="destinations-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40 col-lg-8">
                <div class="title text-center">
                    <p>{{$page->lead}}</p>
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
    </div>
</section>
<!-- End destinations Area -->




@endsection
