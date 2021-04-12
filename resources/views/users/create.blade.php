@extends('layouts.app')
@section('content')
<style>
    div.invalid-tooltip {
        right: 0 !important;
        left: auto !important;
    }
    input,
    textarea#address,
    select {
    display: block !important;
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
</style>
<div class="container mt-5" dir="rtl">
    <form class="needs-validation mx-auto p-3 col-12 col-sm-12 col-md-9 col-lg-6 shadow-lg" style="margin: 0 auto important"
        action="" method="POST" novalidate>
        @csrf
        <div class="form text-right">
            <div class="col-12 mb-3">
                <label for="username">نام کاربر</label>
                <div class="input-group">
                    <input type="text" class="form-control " id="name" value="" name="name" placeholder=""
                        aria-describedby="usernamePrepend" required>
                    <div class="invalid-tooltip">
                        لطفا نام خود را وارد کنید
                    </div>
                    {{-- {{$errors->first('name')}} --}}
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 mb-3">
                <label for="email">@lang('profile.email')</label>
                <input type="text" class="form-control" id="email" value="" name="email" placeholder="" required>
                <div class="invalid-tooltip">
                    لطفا ایمیل خود را وارد کنید
                </div>
            </div>
            <div class="col-12  mb-3">
                <label for="password">پسورد</label>
                <input type="text" class="form-control shadow-sm" id="password" name="password" required>
                <div class="invalid-tooltip">
                    لطفا پسورد را وارد کنید
                </div>
                @error('password')
                <div class="alert alert-danger">{{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-12 mb-3 px-3 text-right">
            <button class="btn btn-primary btn shadow" name="submit" id="submit" type="submit">ثبت تغیرات</button>
        </div>
    </form>
    {{-- @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
</div> --}}
{{-- @endif --}}
</div>
@endsection

@section('script')
<script>
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