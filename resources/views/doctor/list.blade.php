@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/doctor/doctorList.css') }}">
<section class="container">
    @foreach ($speciality->doctor as $item)
    <div class="infoBox bg-light mx-auto mb-1 shadow-lg border-bottom px-3 py-3" id="">
        <div class="d-flex justify-content-center align-items-start">
            <div class="infoBox_content text-right mr-5 align-items-center col-md-9 col-7">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="titleCard text-secondary col-8" style="">نوبت دهی مطب</div>
                    <p class="name border-bottom  pt-2 d-inline" id="name">{{ $item->name }}</p>
                </div>
                <p class="specialty text-secondary mt-3 pr-4 mb-0" id="specialty">{{$speciality->title}}</p>
                {{-- <p class="text-secondary pr-4">فوق تخصص گوارش و کبد</p> --}}
                <div class="d-flex justify-content-end">
                    <p class="text-secondary address" id="address">{{$item->address}}
                    </p>
                    <img src="{{ asset('/icon/placeholder.png') }}" alt="location" class="locationIcon pt-1 ml-2" id="">
                </div>
                <div class="d-flex justify-content-start align-items-center">
                    <a href="{{route('doctorProfile',$item->id)}}" class="takeTurn btn btn-success px-3" id="">دریافت
                        نوبت</a>
                </div>
            </div>
            <div class="flip-card ">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('/images') }}/{{$item->profile_img}}" alt="Avatar" class="imgAvatar col">
                    </div>
                    <div class="flip-card-back bg-info d-flex align-items-center justify-content-center">
                        <a href="{{route('doctorProfile',$item->id)}}" class="nameAvatar m-0 ">پروفایل</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach


    {{-- ============================================================================================= --}}
    {{-- <div class="contaner">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li> {{$error}} </li>
    @endforeach
    </ul>
    </div>
    @endif

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    <form action="{{url('store_image/insert_image')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="col-6">
            <input type="text" name="name" id="name" class="form-control">
            <input type="file" name="profile_img" id="user_image">
            <input type="submit" value="save" name="store_image" class="btn btn-primary">
        </div>
    </form>
    </div>

    <div class="container">
        <table class="table table-bordered table-striped">
            <tr>
                <th width="30%">Image</th>
                <th width="70%">Name</th>
            </tr>
            @foreach ($doctors as $row)
            <tr>
                <td>
                    <img src="store_image/fetch_image{{$row->id}}" alt="" class="img-thumbnail" width="75%">
                </td>
                <td>{{$row->name}}</td>
            </tr>
            @endforeach
        </table>
    </div> --}}
    {{-- ============================================================================================= --}}
</section>
@endsection