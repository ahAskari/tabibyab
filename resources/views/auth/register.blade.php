@extends('layouts.app')

@section('content')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> --}}
<style>
    
    span {
        text-align: right;
    }
</style>
<div class="container" dir="rtl">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex">@lang('register.user-title')</div>

                <div class="card-body text-right">
                    <form method="POST" action="{{ route('register') }}" id="regiser">
                        @csrf

                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">@lang('register.name')</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">@lang('register.email')</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">@lang('register.password')</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                                {{-- {{ __('Confirm Password') }} --}}
                                @lang('register.ConfirmPassword')
                            </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>
                        <div class="custom-control custom-switch  text-right m-0">
                            {{-- <input type="checkbox" name="is_doctor" id="is_doctor" value="true"
                                class="custom-control-input">
                            <label class="custom-control-label" for="is_doctor">پزشک هستم</label> --}}

                            {{-- <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-info" for="success-outlined">پزشک هستم</label>
                            
                            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-info" for="danger-outlined">کاربر هستم</label> --}}

                            @error('options-outlined')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group mb-0">
                            <div class="col-md-6 offset-md-4 text-left" style="padding-left: 2.8rem">
                                <button type="submit" class="btn btn-primary">
                                    @lang('register.register')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
{{-- <script>
    $(document).ready(function () {
     
        $('#register').validate({
             
                messages: {
                name: "نام را وارد کنید",
                email: "ایمیل را درست وارد کنید",
                password: {
                required : "پسورد را وارد کنید",
                minlength: "پسورد بالای 8 کاراکتر باشد"
                                                        },
                },
    });
                
            });
</script> --}}
@endsection