@extends('layouts.app')
@section('links')
<link rel="stylesheet" href="{{ asset('css/doctor/doctorProfile.css') }}">
@endsection
@section('content')
<section class="profile row d-flex justify-content-between shadow py-5 my-2 mx-0" dir="rtl">
    <div class="col-lg-6 col-md-12 col-12" style="margin-right: 0 !important; ">
        @if(session('success'))
        <div class="alert alert-success text-right">
            @lang('users.success')
        </div>
        @endif
        <div class="border-bottom  mb-2 text-center ">
            @if (empty($doctor->profile_img))
            <img src="{{asset('images/avatar/MaleDr.png')}}" id="imgAvatar" class="form-group shadow imgAvatar"
                alt="تصویر پروفایل">
            @else
            <img src="{{asset('images/')}}/{{$doctor->profile_img}}" id="imgAvatar" class="form-group shadow imgAvatar"
                alt="تصویر پروفایل">
            @endif
            <p class="name border-bottom  pt-2 d-inline" id="name">{{$doctor->name}}</p>
            <p class="speciality mt-3 pr-4 mb-0 " id="speciality">{{$speciality->title}} </p>
            {{-- <p class="text-secondary pr-4">فوق تخصص گوارش و کبد</p> --}}
        </div>
        <div class="information text-right">
            <p class="information_title">درباره پزشک</p>
            <div class="d-flex ">
                <img src="{{asset('icon/placeholder.png')}}" alt="location" class="locationIcon pt-1 ml-2" id="">
                <p class="text-secondary shadow-sm address" id="address">{{$doctor->address}}
                </p>
            </div>
            <p><span>تلفن: </span>{{$doctor->tell_no}}</p>
            <div id="map" class="map shadow"></div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-12 p-0" style="">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="titleCard ">نوبت دهی مطب</div>
        </div>
        <div class="form-group text-center shadow">
            {{-- <label for="appointment-datetime-local-input" class=""></label>
            <div class="dateTimePicker">
                <input class="form-control" type="datetime-local" value="2020-08-19T13:45:00" class="dateTime"
                    id="datetime-local-input">
            </div> --}}

            <!-- Button trigger modal -->

            <form action="{{route('reserve')}}" method="post">
                @csrf
                <div class="fa_user_doctor_time bg-info">
                    <input name="doctor_id" id="doctor_id" value="{{$doctor->id}}">
                    <input name="fa_doctor" id="fa_doctor" value="{{$doctor->name}}">
                    @if (Auth::user())
                    <input name="user_id" id="user_id" value="{{Auth::user()->id}}">
                    <input name="fa_user" id="fa_user" value="{{Auth::user()->name}}">
                    @endif
                </div>
                @forelse ($time->times as $item)
                {{-- data-toggle="modal" data-target="#appointmentModal" --}}
                {{-- <input type="radio" name="time_id" id="time_id" value="{{ $item->id }}" > --}}
                <div class="date-time-hide">
                    <input type="text" name="fa_time" value="{{ $item->id }}">
                    <input type="text" name="fa_time" value="{{ $item->date }}">
                    <input type="text" name="fa_hour" value="{{ $item->hour }}">
                    <input name="reserved" value="true">
                </div>
                <button class="getAppointment btn  m-2" name="time_id" id="" value="{{ $item->id }}"
                    type="submit">{{$item->date}} - ساعت : {{$item->hour}}</button>
                @empty
                <div class="alert alert-success">هیج نوبتی ثبت نشده است</div>
                @endforelse
        </div>
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
                        <button type="submit" class="btn btn-primary">ادامه فرایند نوبت گیری</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</section>


<!-- comment user -->
<div class=" container " dir="rtl">
    <form method="POST" action="{{route('add-comment')}}"
        class="comment form pt-5 col-12 col-lg-6 col-md-12 needs-validation" novalidate>
        @csrf
        <label for="content" class="shadow-sm">نظرات کاربران</label>
        <!-- <label for="inputComment" class="shadow label-input">نظر بیماران</label> -->
        <div class="d-none">
            @if (Auth::user())
            <input name="user_id" id="user_id" class="d-none" value="{{Auth::user()->id}}">
            @endif
            <input name="doctor_id" id="doctor_id" value="{{$doctor->id}}">
        </div>
        <textarea name="content" id="content" cols="15" rows="5" class="form-control text-right shadow"
            placeholder="لطفا نظر خود را وارد کنید" required></textarea>
        <div class="invalid-tooltip mr-3">
            لطفا نظر خود را وارد کنید
        </div>
        @if (Auth::user()->id == request()->id or empty($userCheck) )
        @else
        <button type="submit" class="btn-success btn">ثبت</button>
        @endif
    </form>
    <div class="list-container col-12 col-lg-12 col-md-12">
        <ul class="todo-list col-6 ">
            <div class="shadow ml-auto">
                @foreach ($comments as $comment)
                <div class="form-group border-bottom rounded mb-2 col-12 text-right" style="width: 100%;">
                    <p class="userName py-2 " id="userName">{{$comment->user->name}}</p>
                    <p class="text-secondary">{{$comment->content}}</p>
                </div>
                @endforeach
                {{-- <div class="form-group border-bottom col-12 rounded text-right" style="width: 100%;">
                    <p class="userName   py-2 " id="userName">زهرا</p>
                    <p class="text-secondary">پزشک فوق العاده ای هستن ایشون</p>

                </div>
                <div class="form-group border-bottom col-12 text-right" style="width: 100%;">
                    <p class="userName   py-2 " id="userName">رضا</p>
                    <p class="text-secondary">عالی</p>

                </div> --}}
            </div>
        </ul>

    </div>
</div>

@endsection
@section('script')
<script>
    // validation
    (function() {
    'use strict';
    window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
    if (form.checkValidity() === false) {
    event.preventDefault();
    event.stopPropagation();
    }
    form.classList.add('was-validated');
    }, false);
    });
    }, false);
    })();
</script>
@endsection