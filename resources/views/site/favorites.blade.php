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
                            <span class="favorite-button remove-from-favorite" data-id="{{$attraction->id}}">
                                <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 107.39"><defs><style>.cls-1{fill:#FFF;fill-rule:evenodd;}</style></defs><title>red-heart</title><path class="cls-1" d="M60.83,17.18c8-8.35,13.62-15.57,26-17C110-2.46,131.27,21.26,119.57,44.61c-3.33,6.65-10.11,14.56-17.61,22.32-8.23,8.52-17.34,16.87-23.72,23.2l-17.4,17.26L46.46,93.55C29.16,76.89,1,55.92,0,29.94-.63,11.74,13.73.08,30.25.29c14.76.2,21,7.54,30.58,16.89Z"/></svg>
                            </span>
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
                                        <span>{{$attraction->category_name}}</span>
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

    <style>
        .remove-from-favorite {
            position: absolute;
            top: 40px;
            right: 20px;
            cursor: pointer;
            z-index: 2;
        }


        /*.add-to-favorite svg, .remove-from-favorite svg {*/
        /*    !*fill: #fff;*!*/
        /*}*/

        .remove-from-favorite svg path {
            fill: #ed1b24;
        }
    </style>

    <script>
        let items0 = document.querySelectorAll('.favorite-button');
        items0.forEach(el => {
            el.addEventListener('click', function () {
                let id = this.getAttribute('data-id');

                fetch('/remove-from-favorites/?id=' + id);
                el.closest('.col-lg-4').remove();
            });
        });
    </script>

@endsection
