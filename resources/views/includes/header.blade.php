<header id="header">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="/"><img src="img/logo.png" alt="" /></a>
                @if(\Auth::id() != null)
                    Привет, {{\Auth::user()->name}}
                @endif

            </div>
            <form class="search-form" method="GET" action="/search">
                <input type="search" placeholder="Улица Советская" name="atraction">
                <button type="submit">Найти</button>
            </form>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/attractions">Достопримечательности</a></li>
                    <li><a href="/blog">Блог</a></li>
                    @if (\Auth::id() != null)
                        <li><a href="/favorites">Избранное</a></li>
                    @endif
                    @if(\Auth::id() == null)
                    <li><a href="/login">Вход</a></li>
                    @else
                    <li><a href="/logout">Выход</a></li>
                    @endif
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->
