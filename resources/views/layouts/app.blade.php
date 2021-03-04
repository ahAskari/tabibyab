<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="py-4">
                @yield('content')
            </main>

            <!-- footer -->
            <footer class="footer text-right ">
                <div class="footer-header d-flex align-items-center text-center container border-bottom text-light">
                    <div class="col-6 text-right pr-5">
                        0917000000000 :پشتیبانی
                    </div>
                    <div class="col-6 text-left pl-5">
                        <p>رسیدگی به مشکلات و پشتیبانی </p>
                        <p class="pl-3">پاسخگویی در روزهای کاری 9 صبح تا 9 شب</p>
                    </div>
                </div>
                <div class="footer__container">

                    <div class="footer__content">
                        <h3>در کنار شما</h3>
                        <p>راهنمای نوبت‌گیری</p>
                        <p>ورود و عضویت</p>
                        <p>دانلود اپ</p>
                    </div>
                    <div class="footer__content">
                        <h3>برای بیماران</h3>
                        <p>پرسش های متداول</p>

                        <p>راهنمایی دریافت نوبت</p>
                        <p>پرسش پاسخ پزشکی</p>
                    </div>
                    <div class="footer__content">
                        <h3>دکتر</h3>
                        <p>مجله سلامت</p>
                        <p>شرایط استفاده</p>
                        <p>حریم خصوصی</p>
                        <p> ارسال بازخورد</p>
                    </div>
                </div>
            </footer>
        </div>
        @yield('script')
    </body>

</html>