@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center" dir="rtl">
        <div class="col-md-4 mt-5 text-right">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="">
                            {{-- {{route('users.index')}} --}}
                            @lang('users.show users')</a></li>
                    <li class="list-group-item"><a href="">
                            {{-- {{route('roles.index')}} --}}
                            @lang('users.show roles')</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8 mt-5">
            @yield('panel')
        </div>
    </div>
</div>
@endsection