<?php
$attractions = [1,2,3];
?>
@section('title', 'Ошибка 404')
@section('meta_description')
@extends('site.layout')


@section('content')
    <!-- start banner Area -->
    <section class="about-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">Ошибка 404</h1>
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
                        <p style="font-size: 2.2rem">Запрашиваемая страница не найдена</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End destinations Area -->


@endsection
