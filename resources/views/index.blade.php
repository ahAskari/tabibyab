@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<div class="text-right">
    <!-- header  -->
    <section dir="ltr" class="header shadow pt-5" style="background-image: url('images/index/background-header/doctor.jpg');">
        <div class="searchDoctor shadow-lg col-12 ">
            <label for="specialyList" class="text-center text-info shadow-lg ml-0" style=" font-size: 20px">جستجوی
                تخصص</label>
            <div class="d-flex justify-content-between">
                <form action="{{ route('doctorList') }}" method="get" class="d-flex align-items-center">
                    <input type="submit" class="btn btn-info text-light" value="جستجو">
                    <div class="specialyList shadow-lg  ml-2 text-center" id="specialyList">
                        <select name="specialyList" class="custom-select custom-select" id="" required dir="rtl">
                            <option value="" selected disabled>تخصص مورد نظر خود را انتخاب کنید</option>
                            @foreach ($title as $item)
                            <option value="{{$item->id}}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </section>
    {{-- ========================================================================== --}}
    <div class="container ">
        <div class="row content-title" dir="rtl">
            <div class="col-lg-4 col-12">
                <h3>طبیب یاب: نوبت دهی اینترنتی و مشاوره آنلاین پزشکان ایران</h3>
                <p class="">
                    تمام کارهای درمانی و مرتبط با سلامت خود را با طبیب یاب میتوانید انجام بدهید.از جمله قابلیت ها و
                    امکانات طبیب یاب برای
                    بیماران میتوان به دریافت نوبت آنلاین - دریافت مشاوره و پرسش از پزشک منتخب - یافتن پزشک
                    از روی نقشه -
                    جستجوی پزشک براساس بیماری یا عارضه و کلی امکانات متنوع دیگر …
                    طبیب یاب آسان‌ترین راه نوبت‌گیری از پزشک است.
                </p>
                <a href="{{route('allDoctor')}}" class="btn btn-sm btn-success">مشاهده لیست پزشکان</a>
            </div>
            <div class="col-lg-8 col-12 content-title-img">
                <img id="img-back" class="shadow-lg" src="{{asset('/images/index/introduce-overlapped-back.webp')}}"
                    alt="">
                <img id="img-middle" src="{{asset('/images/index/introduce-overlapped-middle.webp')}}" alt="">
                <img id="img-front" class="shadow-lg" src="{{asset('/images/index/introduce-overlapped-front.webp')}}"
                    alt="">
            </div>
        </div>

        {{-- ========================================================================== --}}
        <div class="article-title">
            <div class="row" dir="rtl">
                <div class="col-lg-8 col-12 content-title-img">
                    <img src="{{asset('images/index/home-section5.webp')}}" alt="">
                </div>
                <div class="col-lg-4 col-12 mt-5">
                    <h3>مجله سلامت</h3>
                    <p class="">
                        در بخش مجله سلامت طبیب یاب آخرین مطالب و تحقیقات پزشکی را منتشر می‌کنیم

                    </p>
                    <a href="{{route('showArticles')}}" class="btn btn-sm btn-success">مجله سلامت</a>
                </div>
                
            </div>
        </div>

    </div>
</div>
@endsection
@section('script')

@endsection