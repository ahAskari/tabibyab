@extends('layouts.app')
@section('content')
<section class="container">
    @foreach ($doctor_info as $item)
    <div class="infoBox bg-light mx-auto mb-1 shadow-lg border-bottom px-3 py-3" id="">
        <div class="d-flex justify-content-center align-items-start">

            <div class="infoBox_content text-right mr-5 align-items-center col-md-9 col-7">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="titleCard text-secondary col-8" style="">نوبت دهی مطب</div>
                    <p class="name border-bottom  pt-2 d-inline" id="name">{{ $item->name }}</p>
                </div>

                <p class="specialty text-secondary mt-3 pr-4 mb-0" id="specialty"> متخصص داخلی</p>
                <p class="text-secondary pr-4">فوق تخصص گوارش و کبد</p>
                <div class="d-flex justify-content-end">

                    <p class="text-secondary address" id="address">{{$item->address}}
                    </p>
                    {{-- {{ asset('storage/images/'.$item->profile_img) }} --}}
                    <img src="{{ asset('/images') }}/{{$item->profile_img}}" alt="location"
                        class="locationIcon pt-1 ml-2" id="">
                </div>

                <div class="d-flex justify-content-start align-items-center">
                    <a href="doctorProfile.html" class="takeTurn btn btn-info px-5" id="">دریافت نوبت</a>
                </div>

            </div>

            <div class="flip-card ">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <p>aa{{$item->image}}</p>
                        <img src="{{ asset('storage/images/'.$item->profile_img)}}" alt="Avatar" class="imgAvatar">
                    </div>
                    <div class="flip-card-back bg-info d-flex align-items-center justify-content-center">
                        <a href="index.html" class="nameAvatar m-0 ">پروفایل</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endforeach

    <form action="{{route('all')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="col-6">
            <input type="text" name="user_name" id="user_name" class="form-control">
            <input type="file" name="user_image" id="user_image">
            <input type="submit" value="save" name="store_image" class="btn btn-primary">
        </div>
    </form>
</section>
@endsection