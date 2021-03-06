@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/doctor/doctorProfile.css') }}">
<section class="profile row d-flex justify-content-between  py-5 my-2 mx-0 ">
    <div class="col-lg-6 col-md-12 col-12 shadow-sm " style="">
        <div class="d-flex justify-content-between align-items-center">
            <div class="titleCard  ">نوبت دهی مطب</div>
        </div>
        <div class="form-group">
            <!-- <label for="appointment-datetime-local-input" class=""></label> -->
            <div class="dateTimePicker">
                <input class="form-control" type="datetime-local" value="2020-08-19T13:45:00" class="dateTime"
                    id="datetime-local-input">
            </div>
        </div>
        <!-- Button trigger modal -->
        <a href="#" class="getAppointment btn btn-success" data-toggle="modal" data-target="#appointmentModal">دریافت
            نوبت</a>
        <!-- Modal -->
        <div class="modal fade " id="appointmentModal" tabindex="-1" role="dialog"
            aria-labelledby="appointmentModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content bg-light">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-right">
                        <h5 class="modal-title" id="appointmentModalLabel">لطفا مطالعه کنید</h5>
                        <p>با توجه به شایع بودن ویروس کرونا حتما با رعایت قوانین بهداشتی و بهمراه داشتن ماسک و
                            دستکش، بدون
                            همراه و راس ساعت به مطب
                            مراجعه کنید.</p>
                        <p>در صورت داشتن هرگونه علایم بیماری از جمله تب، سرفه، گلودرد لطفا از حضور در مطب
                            خودداری کنید.</p>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="button" class="btn btn-primary">ادامه فرایند نوبت گیری</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-12  " style="margin-right: 0 !important;">
        <div class="border-bottom  mb-2 text-center ">
            <img src="{{asset('images/')}}/{{$doctor->profile_img}}" class="imgAvatar" alt="">
            <p class="name border-bottom  pt-2 d-inline" id="name">{{$doctor->name}}</p>
            <p class="specialty text-secondary mt-3 pr-4 mb-0" id="specialty">{{$speciality->title}} </p>
            <p class="text-secondary pr-4">فوق تخصص گوارش و کبد</p>
        </div>
        <div class="information text-right">
            <p class="information_title">درباره پزشک</p>
            <div class="d-flex justify-content-end">
                <p class="text-secondary text-right shadow-sm address" id="address">{{$doctor->address}}
                </p>
                <img src="{{asset('icon/placeholder.png')}}" alt="location" class="locationIcon pt-1 ml-2" id="">
            </div>
            <p><span>تلفن: </span>۰۲۶-۳۴۹۹۰۲۰۹</p>
            <div id="map" class="map shadow"></div>
        </div>
    </div>
</section>
<!-- comment user -->
<div class=" container">
    <form class="form  pt-5 col-12 col-lg-12 col-md-12 ml-auto">
        <div class="input-group text-right">
            <!-- <label for="inputComment" class="shadow label-input">نظر بیماران</label> -->
            <label for="inputComment" class="shadow-sm">نظر بیماران</label>
            <input type="text" class="form-control border-bottom input text-right" name="inputComment" id="inputComment"
                placeholder="لطفا نظر خود را وارد کنید">
            <button type="submit" class="addComment d-none btn-success btn-input ">
                <i class="fas fa-plus-circle"></i>
            </button>
        </div>
    </form>
    <div class="list-container col-12 col-lg-12 col-md-12">
        <ul class="todo-list col-6 ">
            <div class="shadow ml-auto ">
                <div class="form-group border-bottom rounded mb-2 col-12 text-right" style="width: 100%;">
                    <p class="userName   py-2 " id="userName">حسین</p>
                    <p class="text-secondary">دارای سطخ علمی بالا برخورد بسیار مناسب تجربه کافی در اندوسکوپی
                        زمان انتطار کم</p>
                </div>
                <div class="form-group border-bottom col-12 rounded text-right" style="width: 100%;">
                    <p class="userName   py-2 " id="userName">زهرا</p>
                    <p class="text-secondary">پزشک فوق العاده ای هستن ایشون</p>

                </div>
                <div class="form-group border-bottom col-12 text-right" style="width: 100%;">
                    <p class="userName   py-2 " id="userName">رضا</p>
                    <p class="text-secondary">عالی</p>

                </div>
            </div>
        </ul>

    </div>
</div>
@endsection