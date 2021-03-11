@extends('layouts.app')

@section('content')
<style>
    span {
        text-align: right;
    }
</style>
<div class="container" dir="rtl">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                {{-- {{ __('E-Mail Address') }} --}}
                                @lang('login.email-address')
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">
                                {{-- {{ __('Password') }} --}}
                                @lang('login.password')
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                      autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row " >
                            <div class="col-md-6 offset-md-4 ml-0" style="margin-right: 55px">
                                <div class="form-check">    
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    
                                    <label class="form-check-label pr-3" for="remember">
                                        {{-- {{ __('Remember Me') }} --}}
                                        @lang('login.rememberMe')
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 d-flex justify-content-center" style="padding-right: 139px">
                            <div class="col-md-8 offset-md-4 m-0 d-flex ">
                                <button type="submit" class="btn btn-primary">
                                    {{-- {{ __('Login') }} --}}
                                    @lang('login.login')
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{-- {{ __('Forgot Your Password?') }} --}}
                                    @lang('login.forgetPassword')
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection