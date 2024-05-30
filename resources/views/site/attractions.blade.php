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
                    @if(\Auth::id() != null)
                        @if(in_array($attraction->id, $favoritesAttractions))
                            <span class="remove-from-favorite" data-id="{{$attraction->id}}">222</span>
                        @else
                            <span class="add-to-favorite" data-id="{{$attraction->id}}">111</span>
                        @endif
                    @endif
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
    .add-to-favorite, .remove-from-favorite {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        z-index: 2;
    }
</style>

<script>
    //console.log(document.querySelectorAll('.add-to-favorite'));

    let items = document.querySelectorAll('.add-to-favorite');
    items.forEach(el => {

        el.addEventListener('click', function () {
            let id = this.getAttribute('data-id');

            fetch('/add-to-favorites/?id=' + id);

            el.classList.add('remove-from-favorite');
            el.classList.remove('add-to-favorite');
        });

    });

    // document.querySelectorAll('.add-to-favorite').forEach(el => {
    //
    //     console.log(el);
    //
    // });



</script>



@endsection
