@section('title', $attraction->title)
@section('meta_description', $attraction->meta_description)
@extends('site.layout')


@section('content')
<!-- start banner Area -->
<section class="about-banner relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">{{$attraction->h1}}</h1>
                <p class="text-white link-nav">
                    <a href="/">Главная </a>  <span class="lnr lnr-arrow-right"></span>
                    <a href="/attractions">Список достопримечательностей </a>  <span class="lnr lnr-arrow-right"></span>
                    <span>{{$attraction->breadcrumb}}</span>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start insurence-one Area -->
<section class="insurence-one-area section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 insurence-left">
                <img class="img-fluid img-one" src="{{$attraction->preview}}" alt="{{$attraction->h1}}">
            </div>
            <div class="col-lg-6 insurence-right">
                <h1>{{$attraction->h1}}</h1>
{{--                category_id--}}
{{--                distance_from_center--}}
{{--                is_free_entry--}}
{{--                is_availability_of_excursions--}}
{{--                images--}}

                <div class="content-wrap">
                    {!! $attraction->content !!}
                </div>
{{--                <div class="list-wrap">--}}
{{--                    <ul>--}}
{{--                        <li>Strategic approach towards redesigning brand.</li>--}}
{{--                        <li>logo design strategy ensures a perfectly crafted--}}
{{--                            logo for your business.</li>--}}
{{--                        <li>Branding that stands out in the crowd.</li>--}}
{{--                        <li>Modern and evergreen logo for your business.</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</section>
<!-- End insurence-one Area -->
@endsection
