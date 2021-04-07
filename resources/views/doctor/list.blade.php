@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/doctor/doctorList.css') }}">
<section class="container pt-2">
    @if(Route::is('doctorList'))
    @foreach ($speciality->user as $item)
    <div class="infoBox bg-light mx-auto mb-1 shadow-lg border-bottom px-3 py-3 col-lg-9 rounded" id="">
        <div class="d-flex justify-content-center align-items-start">
            <div class="infoBox_content text-right mr-5 align-items-center col-md-9 col-7">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="titleCard text-secondary col-8" style="">نوبت دهی مطب</div>
                    <p class="name border-bottom  pt-2 d-inline" id="name">{{ $item->name }}</p>
                </div>
                <p class="speciality text-secondary mt-3 pr-4 mb-0" id="speciality">
                    {{$speciality->title}}
                </p>
                {{-- <p class="text-secondary pr-4">فوق تخصص گوارش و کبد</p> --}}
                <div class="d-flex justify-content-end">
                    <p class="text-secondary address" id="address">{{$item->address}}
                    </p>
                    <img src="{{ asset('/icon/placeholder.png') }}" alt="location" class="locationIcon pt-1 ml-2" id="">
                </div>
                <div class="d-flex justify-content-start align-items-center">
                    <a href="{{route('doctorProfile',$item->id)}}" class="takeTurn btn btn-success btn-sm px-3"
                        id="">دریافت
                        نوبت</a>
                </div>
            </div>
            <div class="flip-card ">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        @if (isset($item->avatar))
                        <img src="{{asset('images/avatar/MaleDr.png')}}" id="imgAvatar"
                            class="form-group shadow imgAvatar" alt="تصویر پروفایل">
                        @else
                        <img src="{{asset('images/')}}/{{$item->avatar}}" id="imgAvatar"
                            class="form-group shadow imgAvatar" alt="تصویر پروفایل">
                        @endif
                    </div>
                    <div class="flip-card-back bg-info d-flex align-items-center justify-content-center">
                        <a href="{{route('doctorProfile',$item->id)}}" class="nameAvatar m-0 ">پروفایل</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach


    @else

    @foreach ($doctors as $doctor)
    <div class="infoBox bg-light mx-auto mb-1 shadow-lg border-bottom px-3 py-3 col-lg-9 rounded" id="">
        <div class="d-flex justify-content-center align-items-start">
            <div class="infoBox_content text-right mr-5 align-items-center col-md-9 col-7">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="titleCard text-secondary col-8" style="">نوبت دهی مطب</div>
                    <p class="name border-bottom  pt-2 d-inline" id="name">دکتر {{ $doctor->name }}</p>
                </div>
                <p class="speciality text-secondary mt-3 pr-4 mb-0" id="speciality">
                    {{$doctor->speciality->title}}

                </p>
                <div class="d-flex justify-content-end">
                    <p class="text-secondary address" id="address">{{$doctor->address}}
                    </p>
                    <img src="{{ asset('/icon/placeholder.png') }}" alt="location" class="locationIcon pt-1 ml-2" id="">
                </div>
                <div class="d-flex justify-content-start align-items-center">
                    <a href="{{route('doctorProfile',$doctor->id)}}" class="takeTurn btn-sm btn btn-success px-3"
                        id="">دریافت
                        نوبت</a>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        @if (isset($doctor->avatar))
                        <img src="{{asset('images/avatar/MaleDr.png')}}" id="imgAvatar"
                            class="form-group shadow imgAvatar" alt="تصویر پروفایل">
                        @else
                        {{-- {{asset('images/')}}/{{$doctor->avatar}} --}}
                        <img src="{{$doctor->avatar}}" id="imgAvatar" class="form-group shadow imgAvatar"
                            alt="تصویر پروفایل">
                        @endif
                    </div>
                    <div class="flip-card-back bg-info d-flex align-items-center justify-content-center">
                        <a href="{{route('doctorProfile',$doctor->id)}}" class="nameAvatar m-0 ">پروفایل</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        {{-- {{$time->date}} --}}
    </div>
    @endforeach

    {{-- @foreach ($times as $time)
    {{$time->date }}
    {{$time->hour }}

    @endforeach --}}
    <div class="row mx-auto justify-center">
        {{ $doctors->links() }}
    </div>
    @endif


    <div>
    </div>
</section>
@endsection