@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <section class="">
        <!-- navbar -->
        <nav class="navbar shadow-lg navbar-expand-lg navbar-light" dir="rtl">
            <a class="navbar-brand text-info" href="index.html">طبیب یاب</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse  " id="navbarTogglerDemo02" dir="rtl">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctorList.html">لیست پرشکان</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">مجله سلامت</a>
                    </li>
                </ul>
                <a href="#" class="login" id="login">ورود کاربران</a>
            </div>
        </nav>
    
        <!-- header  -->
<section class="header pt-5" style="background-image: url('images/index/background-header/doctor.jpg');">
            <div class="searchDoctor shadow-lg col-12">
                <label for="customSelectDoctor" class="text-right">جستجوی پزشکان</label>
                <div class="d-flex justify-content-between">
    
                    <a href="doctorList.html" class="btn btn-info">جستجو</a>
    
                    <div class="customSelectDoctor shadow-lg  ml-2 text-center" id="customSelectDoctor">
                        <select class="">
                            <option value="0">تخصص مورد نظر خود را انتخاب کنید</option>
                            <option value="1">گوارش و کبد</option>
                            <option value="2">مغز و اعصاب (نورولوژی)</option>
                            <option value="3">جراحی مغز و اعصاب</option>
                            <option value="4">اعصاب و روان (روانپزشک)</option>
                            <option value="5">ریه</option>
                            <option value="6">داخلی</option>
                            <option value="7">ارتوپدی</option>
                        </select>
                    </div>
    
                </div>
            </div>
        </section>
    </section>
    
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
@endsection
@section('script')
    
@endsection