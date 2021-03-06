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
            <label for="specialyList" class="text-right">جستجوی پزشکان</label>
            <div class="d-flex justify-content-between">
                {{-- @foreach ($title as $item) --}}
                <form action="{{ route('doctorList') }}" method="get" class="d-flex align-items-center">
                    
                    <input type="submit" class="btn btn-info" value="جستجو"> 
                    <div class="specialyList shadow-lg  ml-2 text-center" id="specialyList">
                        <select name="specialyList" class=""  id="" required dir="rtl">
                            <option value="" selected disabled>تخصص مورد نظر خود را انتخاب کنید</option>
                            @foreach ($title as $item)
                            <option value="{{$item->id}}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
                {{-- @endforeach --}}
            </div>
        </div>
    </section>
</section>


@endsection
@section('script')

@endsection
