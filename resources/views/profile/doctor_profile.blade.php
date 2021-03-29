@extends('layouts.app')
@section('links')
<link rel="stylesheet" href="{{ asset ('css/datepicker/datepicker.css')}}">
<link rel="stylesheet" href="{{ asset ('css/datepicker/persianDatepicker-default.css')}}" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
@endsection
@section('style')
<style>
    img.imgAvatar {
        width: 140px;
        border-radius: 50%;
        height: 140px !important;
    }

    input.profile_img {
        display: none;
    }

    input {
        border-radius: 5px !important;
    }

    a.getAppointment {
        background-color: #9d9bff93;
    }
</style>
@endsection
@section('content')

<div class="container mt-5 text-right" dir="rtl">
    <form action="{{route('doctor.update')}}" method="POST" style="margin: 0 auto important" class="needs-validation"
        novalidate>
        @csrf
        @if(session('success'))
        <div class="alert alert-success ">
            @lang('users.success')
        </div>
        @endif
        {{-- col-12 col-sm-12 col-md-9 col-lg-6 --}}
        <div class=" d-flex justify-content-between p-3  shadow-lg">
            <div class="">
                {{-- profile image --}}
                <div class="form-group text-center">
                    <label for="profile_img">
                        <input type="file" id="profile_img" name="profile_img" onchange="previewFile()"
                            class="form-group profile_img">
                        @if (empty($profile_img))
                        <img src="{{asset('images/avatar/MaleDr.png')}}" id="imgAvatar"
                            class="form-group shadow imgAvatar" alt="تصویر پروفایل">
                        @else
                        <img src="{{asset('images/')}}/{{$profile_img}}" id="imgAvatar"
                            class="form-group shadow imgAvatar" alt="تصویر پروفایل">
                        @endif
                    </label>
                    <div class="invalid-tooltip">
                        لطفا آدرس خود را وارد کنید
                    </div>
                </div>

                {{-- username --}}
                <div class="form-group">
                    <label for="username">@lang('profile.name')</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="usernamePrepend">@</span>
                        </div>
                        <input type="text" class="form-control " id="name" value="{{$doctor->name}}" name="name"
                            placeholder="" aria-describedby="usernamePrepend" required>
                        <div class="invalid-tooltip">
                            لطفا نام خود را وارد کنید
                        </div>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- email --}}
                {{-- <div class="form-group">
                    <label for="email">@lang('profile.email')</label>
                    <input type="email" class="form-control" id="email" value="{{$doctor->email}}" name="email"
                placeholder="" required>
                <div class="invalid-tooltip">
                    لطفا ایمیل خود را وارد کنید
                </div>
            </div> --}}

            {{-- speciality --}}
            <div class="form-group">
                <label for="speciality">@lang('profile.speciality')</label>
                {{-- <input type="text" name="speciality" id="speciality" class="form-control"
                        value="{{$speciality->title}}" required> --}}

                {{-- <select name="speciality_id" class="speciality_id custom-select custom-select" id="speciality_id"
                    required dir="rtl">
                    @if (empty($speciality->title))
                    <option value="" selected disabled> تخصص خود را انتخاب کنید</option>
                    @else
                    <option value="{{$speciality->id}}" selected disabled>{{$speciality->title}}</option>
                @endif
                @foreach ($speciality_list as $item)
                <option value="{{$item->id}}">{{ $item->title }}</option>
                @endforeach
                </select> --}}

                @if (empty($speciality->title))
                <select name="speciality_id" class="speciality_id custom-select custom-select" id="speciality_id"
                    required dir="rtl">
                    <option value="" selected disabled> تخصص خود را انتخاب کنید</option>
                    @foreach ($speciality_list as $item)
                    <option value="{{$item->id}}">{{ $item->title }}</option>
                    @endforeach
                </select>
                @else
                <select name="speciality_id" class="speciality_id custom-select custom-select" id="speciality_id"
                    required dir="rtl">
                    <option value="{{$speciality->id}}" selected>{{$speciality->title}}</option>
                    @foreach ($speciality_list as $item)
                    <option value="{{$item->id}}">{{ $item->title }}</option>
                    @endforeach
                </select>
                @endif

                <div class="invalid-tooltip">
                    لطفا آدرس خود را وارد کنید
                </div>
            </div>
            {{-- tell no --}}
            <div class="form-group">
                <label for="tell_no">@lang('profile.tellnumber')</label>
                <input type="tel" name="tell_no" id="tell_no" class="tell_no shadow-sm form-control"
                    value="{{$doctor->tell_no}}" placeholder="989370471234" minlength="10" maxlength="13" required>
                <div class="invalid-tooltip">
                    لطفا آدرس خود را وارد کنید
                </div>
            </div>
            {{-- address --}}
            <div class="form-group">
                <label for="address">@lang('profile.address')</label>
                <textarea name="address" id="address" class="form-control" placeholder="آدرس مطب" cols="30" rows="10"
                    required>{{$doctor->address}}</textarea>
                <div class="invalid-tooltip">
                    لطفا آدرس خود را وارد کنید
                </div>
            </div>
            <div class="form-group mb-3 text-right">
                <button class="btn btn-primary btn shadow" name="submit" id="submit" type="submit">ثبت
                    تغیرات</button>
            </div>
        </div>

        {{-- </form> --}}


        {{-- date time --}}
        <div class="">

            {{-- <form action="" method="post"> --}}


            <div class="form-group text-right" style="margin-bottom: 19rem">
                <select id="hour" name="hour" class="hour form-control shadow-sm px-auto">
                    <option selected="selected" disabled="disabled">ساعت حضور پزشک</option>
                    <option value="۸:۰۰">۸:۰۰</option>
                    <option value="۹:۰۰">۹:۰۰</option>
                    <option value="۱۰:۰۰">۱۰:۰۰</option>
                    <option value="۱۱:۰۰">۱۱:۰۰</option>
                    <option value="۱۲:۰۰">۱۲:۰۰</option>
                    <option value="۱۳:۰۰">۱۳:۰۰</option>
                    <option value="۱۴:۰۰">۱۴:۰۰</option>
                    <option value="۱۴:۰۰">۱۴:۰۰</option>
                    <option value="۱۶:۰۰">۱۶:۰۰</option>
                    <option value="۱۷:۰۰">۱۷:۰۰</option>
                    <option value="۱۸:۰۰">۱۸:۰۰</option>
                    <option value="۱۹:۰۰">۱۹:۰۰</option>
                    <option value="۲۰:۰۰">۲۰:۰۰</option>
                    <option value="۲۱:۰۰">۲۱:۰۰</option>
                    <option value="۲۲:۰۰">۲۲:۰۰</option>
                </select>
                <label for="email">روز و ساعت حضور در مطب</label>
                <input type="text" value="" class="date form-control" placeholder="تاریخ حضور پزشک" name="date"
                    id="pdpDefault" />
            </div>
            <input type="submit" value="ثبت" name="time" id="time" class="btn btn-success">
            {{-- <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio2">صبح</label>
                    
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio3">عصر</label>
                    </div> --}}
    </form>

    <div class="form-group">
        @foreach ($time->times as $item)
        <a href="" class="getAppointment btn btn-sm m-2" data-toggle="modal"
            data-target="#appointmentModal">{{$item->date}} - ساعت :
            {{$item->hour}}</a>
        @endforeach
    </div>
</div>

</div>


</div>
@endsection
{{-- ========================================================================== --}}
@section('script')
<script src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="{{ asset ('js/datepicker/datepicker.all.js')}}" defer></script>
<script src="{{ asset ('js/datepicker/datepicker.en.js')}}" defer></script>
<script src="{{ asset ('js/datepicker/persianDatepicker.js')}}" defer></script>

<script>
    // date picker
    $(function () {
        //usage
        $(".usage").persianDatepicker();
        //themes
        $("#pdpDefault").persianDatepicker({
            alwaysShow: true,
            cellWidth: 43,
            cellHeight: 30, 
            fontSize: 18,
            startDate: "today",
            endDate:"1402/5/5",
            formatDate: "ND/DD/NM",
            });
    });

    // profile image
    function previewFile() {
        var preview = document.getElementById('imgAvatar');
        var file = document.getElementById('profile_img').files[0];
        var reader = new FileReader();
        reader.addEventListener("load", function () {
        preview.src = reader.result;
        }, false);
        if (file) {
        reader.readAsDataURL(file);
        };    
    }   
    // tell no
    $("#tell_no").keypress(function (e) {
    if (String.fromCharCode(e.which).match(/[^+0-9_]/)) {
    e.preventDefault();
    }
    });

    //  validation
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