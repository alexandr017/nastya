<?php
$attractions = [1,2,3,4,5,6,7,8,9];
?>
@section('title', $page->title)
@section('meta_description', $page->meta_description)
@extends('layout')


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
                        <img src="/template/img/hotels/d1.jpg" alt="">
                    </div>
                    <div class="details">
                        <h4 class="d-flex justify-content-between">
                            <span>Hilton Star Hotel</span>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </h4>
                        <ul class="package-list">
                            <li class="d-flex justify-content-between align-items-center">
                                <span>Swimming pool</span>
                                <span>Yes</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span>Gymnesium</span>
                                <span>No</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span>Wi-fi</span>
                                <span>Yes</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span>Room Service</span>
                                <span>No</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span>Air Condition</span>
                                <span>Yes</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span>Restaurant</span>
                                <span>Yes</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span>Price per night</span>
                                <a href="/attractions/ergreg" class="price-btn">Подробнее</a>
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


<!-- Start home-about Area -->
<section class="home-about-area">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-end">
            <div class="col-lg-6 col-md-12 home-about-left">
                <h1>
                    Did not find your Package? <br>
                    Feel free to ask us. <br>
                    We‘ll make it for you
                </h1>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
                </p>
                <a href="#" class="primary-btn text-uppercase">request custom price</a>
            </div>
            <div class="col-lg-6 col-md-12 home-about-right no-padding">
                <img class="img-fluid" src="img/hotels/about-img.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->

@endsection
