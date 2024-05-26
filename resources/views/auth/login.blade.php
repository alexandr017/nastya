@section('title', 'Регистрация')
@section('meta_description', 'Регистрация')
@extends('site.layout')


@section('content')
    <!-- start banner Area -->
    <section class="about-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">Вход</h1>
                    <p class="text-white link-nav"><a href="/">Главная </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Вход</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->


    <!-- Session Status -->
    @if (session('status'))
        <div class="mb-4 text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <!-- Start destinations Area -->
    <section class="destinations-area section-gap">
        <div class="container">


        <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" required>
            @error('email')
            <div class="mt-2 text-red-600 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password" class="block text-sm font-medium text-gray-600">Пароль</label>
            <input id="password" type="password" name="password" class="form-control" required>
            @error('password')
            <div class="mt-2 text-red-600 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <input id="remember_me" type="checkbox" name="remember">
            <label for="remember_me" class="text-sm text-gray-600" style="margin: 0 0 0 10px;">Запомнить меня</label>
        </div>

        <div class="flex items-center justify-between mt-2">
            Нет аккаунта? <a href="/register" style="margin: 0 0 5px 5px;">Зарегистрироваться</a>
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>




    <div class="row d-flex justify-content-center">
        <div class="menu-content pb-40 col-lg-8">
            <div class="title text-center">

            </div>
        </div>
    </div>
    <div class="row"></div>
    </div>
    </section>
    <!-- End destinations Area -->


@endsection
