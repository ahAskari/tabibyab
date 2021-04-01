@extends('layouts.app')
@section('links')
<link rel="stylesheet" href="{{ asset ('css/datepicker/datepicker.css')}}">
<link rel="stylesheet" href="{{ asset ('css/datepicker/persianDatepicker-default.css')}}" />
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> --}}
@endsection
@section('style')
<style>
    img.imgAvatar {
        width: 140px;
        border-radius: 50%;
        height: 140px !important;
    }

    input,
    textarea#address,
    select {
        display: block !important;
        width: 70% !important;
        border: none !important;
        border-bottom: 1px solid rgba(44, 66, 80, 0.24) !important;
        background-color: #f8fafc !important;
        border: none;
        overflow: auto;
        outline: none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        resize: none;
    }

    input:focus,
    textarea#address,
    select {
        border: none !important;
        outline: none !important;
        border-bottom: 1px solid rgba(44, 66, 80, 0.24) !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
    }

    input.date,
    select.hour {
        display: inline !important;
        width: 200px !important;
    }

    label.label-pdpDefault {
        display: block !important;
    }

    input.profile_img {
        display: none !important;
    }

    textarea.address {
        /* border-radius: 5px !important; */
    }

    a.getAppointment {
        background-color: #005aff26;
    }

    a.appointment-list-btn {
        background-color: #0059ff54;
    }

    div.appointment-list {
        width: 500px;
        margin-right: 3rem;
        overflow: auto;
        height: 200px;
    }

    div.work-list {
        direction: ltr;
        width: 260px;
        height: 150px;
        overflow: auto;
    }

    /* Hide scrollbar for Chrome, Safari and Opera */
    div.work-list::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    div.work-list {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    div.container {
        /* position: relative; */
    }

    div.alert {
        max-width: max-content;
        position: absolute;
        top: -25px
    }

    div.date-time {
        margin-left: 0 !important;
    }

    div.date-picker {
        margin-bottom: 90px;
    }

    div.invalid-tooltip {
        right: 15px !important;
        width: max-content;
    }
</style>
@endsection
@section('content')

<form action="{{route('doctor.update')}}" method="POST" style="" class="needs-validation" novalidate>
    @csrf
    <div class="container shadow-lg mt-5 p-0 text-right" dir="rtl">
        @if(session('success'))
        <div class="alert alert-success p-0 m-0">
            @lang('users.success')
        </div>
        @endif
        {{-- profile image --}}
        <div class="form-group text-center pt-3">
            <label for="profile_img">
                <input type="file" id="profile_img" name="profile_img" onchange="previewFile()"
                    class="form-control profile_img">
                @if (empty($profile_img))
                <img src="{{asset('images/avatar/MaleDr.png')}}" id="imgAvatar" class="form-group shadow imgAvatar"
                    alt="تصویر پروفایل">
                @else
                <img src="{{asset('images/')}}/{{$profile_img}}" id="imgAvatar" class="form-group shadow imgAvatar"
                    alt="تصویر پروفایل">
                @endif
            </label>
            <div class="invalid-feedback">
                لطفا تصویر خود را وارد کنید
            </div>
        </div>
        <div class="pt-4 px-5 row">
            <div class="personal-info col-lg-6 col-md-12 col-12">
                {{-- username --}}
                <div class="col-12  mb-3" dir="rtl">
                    <label for="name">@lang('profile.name')</label>
                    <input type="text" class="name form-control" id="name" name="name" value="{{$doctor->name}}"
                        placeholder="username" required>
                    <div class="invalid-tooltip">
                        لطفا نام را وارد کنید
                    </div>
                    {{-- value="{{$doctor->name}}" --}}
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                {{-- speciality --}}
                <div class="col-12  mb-3">
                    <label for="speciality">@lang('profile.speciality')</label>
                    @if (empty($speciality->title))
                    <select name="speciality_id" class="speciality_id form-control custom-select custom-select"
                        id="speciality_id" required dir="rtl">
                        <option value="" selected disabled> تخصص خود را انتخاب کنید</option>
                        @foreach ($speciality_list as $item)
                        <option value="{{$item->id}}">{{ $item->title }}</option>
                        @endforeach
                    </select>

                    @else
                    <select name="speciality_id" class="speciality_id form-control custom-select custom-select"
                        id="speciality_id" required dir="rtl">
                        <option value="{{$speciality->id}}" selected>{{$speciality->title}}</option>
                        @foreach ($speciality_list as $item)
                        <option value="{{$item->id}}">{{ $item->title }}</option>
                        @endforeach
                    </select>
                    @endif
                    <div class="invalid-tooltip">
                        لطفا تخصص خود را وارد کنید
                    </div>

                </div>
                {{-- tell no --}}
                <div class="col-12  mb-3">
                    <label for="tell_no">@lang('profile.tellnumber')</label>
                    <input type="tel" name="tell_no" id="tell_no" class="tell_no form-control"
                        value="{{$doctor->tell_no}}" minlength="10" maxlength="13" required>
                    <div class="invalid-tooltip">
                        لطفا تلفن خود را وارد کنید
                    </div>
                </div>
                {{-- address --}}
                <div class="col-12  mb-3">
                    <label for="address">@lang('profile.address')</label>
                    <textarea name="address" id="address" class="form-control" placeholder="" cols="30" rows="5"
                        required>{{$doctor->address}}</textarea>
                    <div class="invalid-tooltip">
                        لطفا آدرس خود را وارد کنید
                    </div>
                </div>
                {{-- submit --}}
                <div class="form-group mb-3 mt-5 text-right">
                    <button class="btn btn-primary btn shadow" name="submit" id="submit" type="submit">ثبت
                        تغیرات</button>
                </div>
            </div>
</form>
<form action="" method="post">
    {{-- date time --}}
    <div class="date-time col-lg-6 col-md-12 col-12">

        <div class="col-12  mb-3 date-picker">
            <label for="hour" class="label-pdpDefault">ساعت</label>
            <select id="hour" name="hour" class="hour form-control px-auto" required>
                <option disabled selected></option>
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
            <div class="invalid-tooltip">
                لطفا ساعت کاری خود را انتخاب کنید
            </div>
        </div>
        <div class="col-12  mb-3">
            <label for=pdpDefault"">تاریخ</label>
            <input type="text" value="" class="date form-control" placeholder="تاریخ" name="date" id="pdpDefault"
                required />
            <div class="invalid-tooltip">
                لطفا تاریخ حضور در مطب راانتخاب کنید
            </div>
        </div>

        <a href="" class="btn btn-sm btn-success">افزودن</a>
        <div class="form-group d-flex text-right" style="margin-bottom: 19rem">
            <div class="form-group work-list">
                @foreach ($time->times as $item)
                <a href="" class="getAppointment shadow btn btn-sm m-2" data-toggle="modal"
                    data-target="#appointmentModal">{{$item->date}} - ساعت :
                    {{$item->hour}}</a>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</form>

{{-- appointment-list --}}
<div>
    <div class="appointment-list">
        <label for="table">لیست نوبت ها</label>
        <table class="table table-sm  text-right rtl" id="table">
            <thead>
                <tr>
                    <th scope="col">نام بیمار</th>
                    <th scope="col">تاریخ</th>
                    <th scope="col">ساعت</th>
                </tr>
            </thead>
            @foreach($appointment as $item)
            <tbody>
                <tr>
                    <th scope="row">{{$item->fa_user}}</th>
                    <td>{{$item->fa_time}}</td>
                    <td>{{$item->fa_hour}}</td>
                </tr>

            </tbody>
            @endforeach
        </table>
    </div>
</div>

</div>


{{-- <input type="submit" value="ثبت" name="time" id="time" class="btn btn-success"> --}}
{{-- <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio2">صبح</label>
                    
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio3">عصر</label>
                    </div> --}}
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
    $(document).on("keypress", "#pdpDefault", function (e) {
    e.preventDefault();
    return false;
    });
    // document.getElementById('pdpDefault').keypress(function(e){
    // e.preventDefault();
    // return false;
    // });
    $(function(){
        // $.ajax({
        //     url: '',
        // });
    });

    // date picker
    $(function(){
        //usage
        $(".usage").persianDatepicker();
        //themes
        $("#pdpDefault").persianDatepicker({
            // alwaysShow: true,
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