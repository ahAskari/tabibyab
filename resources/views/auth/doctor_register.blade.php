@extends('layouts.app')

@section('content')
<style>
    span {
        text-align: right;
    }
</style>
<div class="row justify-content-center mt-5 mx-auto" dir="rtl">
    <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link" id="v-pills-home-tab" href="{{ route('register') }}">ثبت نام کاربران</a>
        <a class="nav-link active" id="v-pills-profile-tab" href="" aria-selected="false">ثبت نام
            پزشکان</a>
    </div>
    <div class="tab-content col-6" id="v-pills-tabContent">
        {{-- user-register --}}
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="user-register">
                <div class="card" id="user-register" style="">
                    <div class="card-header d-flex">@lang('register.doctor-title')</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate
                            id="regiser">
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
</div>
@endsection
@section('script')
@endsection