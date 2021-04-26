@extends('layouts.app')
@section('links')
<link rel="stylesheet" href="{{ asset('css/doctor/doctorProfile.css') }}">
<link rel="stylesheet" href="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.css" />
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
            @if (isset($doctor->avatar))
            <img src="{{asset('images/avatar/MaleDr.png')}}" id="imgAvatar" class="form-group shadow imgAvatar"
                alt="تصویر پروفایل">
            @else
            <img src="{{asset('images/1.png')}}/{{$doctor->avatar}}" id="imgAvatar" class="form-group shadow imgAvatar"
                alt="تصویر پروفایل">
            @endif
            <p class="name border-bottom  pt-2 d-inline" id="name">دکتر {{$doctor->name}}</p>
            <p class="speciality mt-3 mb-0 " id="speciality">{{$speciality->title}} </p>
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
            <div id="map" style=""></div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-12" style="position: relative;">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="titleCard ">نوبت اینترنتی و مراجعه حضوری</div>

        </div>
        <div class="appointment shadow-sm text-center">
            <p style="direction: rtl;color: #012c57;font-size: 18px;font-weight: bold;line-height: 30px;"></p>
            <div class="row col-12 mx-auto">
                <div class="col-6 text-secondary">
                    <svg height="" style="display: inline;width: 35px; height: 35px; fill: #00cb7a"
                        viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg" id="fi_3203166">
                        <g id="_30-appointment" data-name="30-appointment">
                            <g id="linear_color" data-name="linear color" class="">
                                <path
                                    d="m509.265 77.521a12 12 0 0 0 -12-12h-53.414a51.988 51.988 0 0 0 -101.173 0h-18.827a51.988 51.988 0 0 0 -101.173 0h-18.827a51.988 51.988 0 0 0 -101.173 0h-21.418a12.087 12.087 0 0 0 -11.66 9.171l-64 264a12 12 0 0 0 11.66 14.828h52v44a12 12 0 0 0 12 12h212.41a108 108 0 0 0 215.3-9.37c-.003-1.263.295-322.629.295-322.629zm-24 252.53a109 109 0 0 0 -16-16.158v-76.373a12 12 0 1 0 -24 0v61.493a107.1 107.1 0 0 0 -27.374-8.168l48.809-201.324h18.562zm-394.565-240.53h11.975a52.079 52.079 0 0 0 50.587 40 12 12 0 1 0 0-24 28.032 28.032 0 0 1 -25.293-16h94.706a52.079 52.079 0 0 0 50.587 40 12 12 0 1 0 0-24 28.032 28.032 0 0 1 -25.293-16h94.706a52.079 52.079 0 0 0 50.587 40 12 12 0 1 0 0-24 28.032 28.032 0 0 1 -25.293-16h74.031l-13.577 56h-351.295zm302.562-40a28.034 28.034 0 0 1 25.292 16h-50.581a28.031 28.031 0 0 1 25.292-16zm-120 0a28.034 28.034 0 0 1 25.292 16h-50.581a28.031 28.031 0 0 1 25.292-16zm-120 0a28.034 28.034 0 0 1 25.292 16h-50.581a28.031 28.031 0 0 1 25.292-16zm-81.961 120h351.3l-29.154 120.269a107.886 107.886 0 0 0 -76.283 39.73h-284.647zm21.956 184h209.121a107.134 107.134 0 0 0 -8.708 32h-200.41zm319.743 127.129v-11.129a12 12 0 1 0 -24 0v11.129a84.17 84.17 0 0 1 -71.129-71.129h11.129a12 12 0 0 0 0-24h-11.129a84.17 84.17 0 0 1 71.129-71.128v11.128a12 12 0 0 0 24 0v-11.128a84.17 84.17 0 0 1 71.129 71.128h-11.129a12 12 0 0 0 0 24h11.129a84.17 84.17 0 0 1 -71.129 71.129z">
                                </path>
                                <path d="m261.265 213.521h32a12 12 0 0 0 0-24h-32a12 12 0 0 0 0 24z"></path>
                                <path d="m181.265 213.521h32a12 12 0 0 0 0-24h-32a12 12 0 0 0 0 24z"></path>
                                <path d="m101.265 213.521h32a12 12 0 0 0 0-24h-32a12 12 0 0 0 0 24z"></path>
                                <path d="m341.265 213.521h32a12 12 0 0 0 0-24h-32a12 12 0 0 0 0 24z"></path>
                                <path d="m245.265 261.521h32a12 12 0 1 0 0-24h-32a12 12 0 1 0 0 24z"></path>
                                <path d="m165.265 261.521h32a12 12 0 0 0 0-24h-32a12 12 0 1 0 0 24z"></path>
                                <path d="m85.265 261.521h32a12 12 0 0 0 0-24h-32a12 12 0 1 0 0 24z"></path>
                                <path d="m325.265 261.521h32a12 12 0 0 0 0-24h-32a12 12 0 1 0 0 24z"></path>
                                <path d="m237.265 309.521h32a12 12 0 0 0 0-24h-32a12 12 0 0 0 0 24z"></path>
                                <path d="m157.265 309.521h32a12 12 0 0 0 0-24h-32a12 12 0 0 0 0 24z"></path>
                                <path
                                    d="m121.265 297.521a12 12 0 0 0 -12-12h-32a12 12 0 1 0 0 24h32a12 12 0 0 0 12-12z">
                                </path>
                                <path
                                    d="m424.515 357.036-25.884 25.884-24.265-12.132a12 12 0 0 0 -10.732 21.467l32 16a12 12 0 0 0 13.851-2.248l32-32a12 12 0 0 0 -16.97-16.971z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <p class="pr-2 mb-0" style="display: inline">دریافت نوبت</p>
                    <p class="pr-4 mt-0 mb-0">پرداخت در مطب</p>
                    <small class="pr-4 mb-0">حداکثر انتظار : 15 دقیقه</small>
                </div>
                <div class="col-6" style="position: relative;">
                    
                    @if (Auth::user())

                    @if (Auth::user()->id == request()->id)
                    {{-- nothing --}}
                    @else
                    <button data-toggle="modal" data-target="#appointmentModal" style="position: absolute; bottom: 40%"
                        class="btn btn-success">دریافت نوبت</button>
                    @endif

                    @else
                    <button data-toggle="modal" data-target="#appointmentModal" style="position: absolute; bottom: 40%"
                        class="btn btn-success">دریافت نوبت</button>
                    @endif



                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade text-right" id="appointmentModal" tabindex="-1" role="dialog"
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
                    <form action="{{route('reserve')}}" method="post" style="overflow: auto; height: 250px;">
                        @csrf
                        <div class="fa_user_doctor_time bg-info">
                            <input name="doctor_id" id="doctor_id" value="{{$doctor->id}}">
                            <input name="fa_doctor" id="fa_doctor" value="{{$doctor->name}}">
                            @if (Auth::user())
                            <input name="user_id" id="user_id" value="{{Auth::user()->id}}">
                            <input name="fa_user" id="fa_user" value="{{Auth::user()->name}}">
                            @endif
                        </div>
                        {{-- @forelse ($doctor->times as $item) --}}
                        @forelse ($time as $item)
                        <div class="date-time-hide">
                            <input name='fa_date' value="{{ $item->date }}">
                            <input name='fa_hour' value="{{ $item->hour }}">
                            <input name='reserved' value="true">
                        </div>
                        <button class="getAppointment btn  m-2" id="dsa[]" name="time_id" value="{{ $item->id }}"
                            type="submit">{{$item->date}} - ساعت : {{$item->hour}}</button>
                        @empty
                        <div class="alert alert-success">هیج نوبتی ثبت نشده است</div>
                        @endforelse
                    </form>
                    {{-- <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-primary">ادامه فرایند نوبت گیری</button>
                    </div> --}}
                </div>
            </div>
        </div>

        {{-- comment --}}
        <div class="all-comment col-12 col-lg-12 col-md-12" style="position: absolute; bottom: 0px">
            <label for="form-group" class="shadow-sm">نظرات کاربران</label>
            <div class="comment-body ml-auto">
                @forelse ($comments as $comment)
                <div class="form-group border-bottom rounded mb-2 col-12 text-right" style="width: 100%;">
                    <p class="userName mb-0" id="userName">{{$comment->user->name}}</p>
                    <p class="text-secondary">{{$comment->content}}</p>
                </div>
                @empty
                <p class="mt-4 text-right" style="max-width: max-content;">نظری داده نشده است</p>
                @endforelse
            </div>
        </div>
    </div>



    <!-- comment user -->
    <div class=" container " dir="rtl">
        <form method="POST" action="{{route('add-comment')}}"
            class="comment form pt-5 col-12 col-lg-6 col-md-12 needs-validation" novalidate>
            @csrf
            <div class="d-none">
                @if (Auth::user())
                <input name="user_id" id="user_id" class="d-none" value="{{Auth::user()->id}}">
                @endif
                <input name="doctor_id" id="doctor_id" value="{{$doctor->id}}">
            </div>

            @if (Auth::user())
            @if ( empty($userCheck) )
            @else
            <textarea name="content" id="content" cols="15" rows="5" class="form-control text-right shadow"
                placeholder="لطفا نظر خود را وارد کنید" required></textarea>
            <div class="invalid-tooltip mr-3">
                لطفا نظر خود را وارد کنید
            </div>
            <button type="submit" class="btn-info btn mr-0 d-block mt-2">ثبت</button>
            @endif

            @else
            <textarea name="content" id="content" cols="15" rows="5" class="form-control text-right shadow"
                placeholder="لطفا نظر خود را وارد کنید" required></textarea>
            <div class="invalid-tooltip mr-3">
                لطفا نظر خود را وارد کنید
            </div>
            <button type="submit" class="btn-info btn mr-0 d-block mt-2">ثبت</button>
            @endif

        </form>

    </div>
</section>

@endsection
@section('script')
<script src="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.js">
</script>
{{-- <script src="{{asset('js/showLocationDoctor.js')}}"></script> --}}
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
// ========================================================================================================
// map 
    let marker;    
    @if(empty($doctor->lat && $doctor->lng))
    let lat = 29.6314088582;
    let lng = 52.519905567;
    @else
    let lat = {{$doctor->lat}};
    let lng = {{$doctor->lng}};
    @endif
    
    let map = L.map('map').setView([lat, lng], 14);
    mapLink = '<a href="http://openstreetmap.org">OpenStreetMap</a>';
    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; ' + mapLink + 'Contributors', maxZoom: 18,
    }).addTo(map);
    
    @if(empty($doctor->lat && $doctor->lng))
    marker = {};
    @else
    marker = L.marker([lat, lng]).addTo(map);
    @endif
// ========================================================================================================
</script>
@endsection