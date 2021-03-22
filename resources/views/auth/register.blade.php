@extends('layouts.app')

@section('content')
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> --}}
<style>
    span {
        text-align: right;
    }
</style>
<div class="row justify-content-center mt-5 mx-auto" dir="rtl">
    <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" href="{{ route('register') }}">ثبت نام کاربران</a>
        <a class="nav-link" id="v-pills-profile-tab"  href="{{route('doctor_register')}}" 
            aria-selected="false">ثبت نام پزشکان</a>
    </div>
    <div class="tab-content col-6" id="v-pills-tabContent">
        {{-- user-register --}}
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="user-register">
                <div class="card" id="user-register" style="">
                    <div class="card-header d-flex">@lang('register.user-title')</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate
                            id="user-regiser">
                            @csrf
                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">@lang('register.name')</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" autocomplete="name" autofocus>
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
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email">
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
                                        name="password_confirm" autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4 " style="padding-left: 3.5rem">
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
    {{-- <div class="col-md-3 text-right">
        <div class="card">
            <ul class="list-group list-group-flush p-0">
                <li class="list-group-item">
                    <input type="radio" class="btn-check" name="options-outlined" id="user_register" autocomplete="off">
                    <label class="btn btn-outline-info" for="user_register">ثبت نام کاربران</label>
                </li>
                <li class="list-group-item">
                    <input type="radio" class="btn-check" name="options-outlined" id="doctor_register"
                        autocomplete="off">
                    <label class="btn btn-outline-danger" for="doctor_register">ثبت نام پزشکان</label>
                </li>
            </ul>
        </div>
    </div> --}}
    {{-- user-register --}}
    {{-- <div class="col-md-6" class="user-register">
        <div class="card" id="user-register" style="display: none">
            <div class="card-header d-flex">@lang('register.title')</div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" id="regiser">
    @csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">@lang('register.name')</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">@lang('register.email')</label>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">@lang('register.password')</label>
        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" autocomplete="new-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
            @lang('register.ConfirmPassword')
        </label>
        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirm"
                autocomplete="new-password">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4 " style="padding-left: 3.5rem">
            <button type="submit" class="btn btn-primary">
                @lang('register.register')
            </button>
        </div>
    </div>
    </form>
</div>
</div>
</div> --}}
{{-- doctor-register --}}
{{-- <div class="col-md-6">
        <div class="card" id="doctor-register" style="display: none">
            <div class="card-header d-flex">@lang('register.title')</div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" id="regiser">
@csrf
<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('register.name')</label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
            value="{{ old('name') }}" autocomplete="name" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">@lang('register.email')</label>
    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" autocomplete="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">@lang('register.password')</label>
    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" autocomplete="new-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
        @lang('register.ConfirmPassword')
    </label>
    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirm"
            autocomplete="new-password">
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4 " style="padding-left: 3.5rem">
        <button type="submit" class="btn btn-primary">
            @lang('register.register')
        </button>
    </div>
</div>
</form>
</div>
</div>
</div> --}}
</div>
@endsection
@section('script')
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"> --}}
</script>
<script>
    document.getElementById('user_register').onclick = function showUserRegister(){
        document.getElementById('user-register').style.display = 'block';
        document.getElementById('doctor-register').style.display = 'none';
    }
    document.getElementById('doctor_register').onclick = function showDoctorRegister(){
        document.getElementById('doctor-register').style.display = 'block';  
        document.getElementById('user-register').style.display = 'none';
    }
</script>
@endsection