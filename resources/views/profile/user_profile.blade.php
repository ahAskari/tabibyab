@extends('layouts.app')
@section('links')
    <link rel="stylesheet" href="{{asset('css/profile/user_profile.css')}}">
@endsection
@section('content')
<div class="container mt-5" dir="rtl">
    <form class="needs-validation mx-auto p-3 col-12 col-sm-12 col-md-9 col-lg-6 shadow-lg"
        style="margin: 0 auto important" action="" method="POST" novalidate>
        @csrf
        <div class="form text-right">
            {{-- <div class="col-12 mb-3">
                <label for="username">@lang('profile.name')</label>
                <div class="input-group">
                    <input type="text" class="form-control " id="name" value="{{$user->name}}" name="name"
                        placeholder="" aria-describedby="usernamePrepend" required>
                    <div class="invalid-tooltip">
                        لطفا نام خود را وارد کنید
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 mb-3">
                <label for="email">@lang('profile.email')</label>
                <input type="text" class="form-control" id="email" value="{{$user->email}}" name="email" placeholder=""
                    required>
                <div class="invalid-tooltip">
                    لطفا ایمیل خود را وارد کنید
                </div>
            </div> --}}

            {{-- appointment-list --}}
            <div class="appointment-list px-3">
                <label for="table">لیست نوبت ها</label>
                <table class="table table-sm  text-right rtl" id="table">
                    <thead>
                        <tr>
                            <th scope="col">نام پزشک</th>
                            <th scope="col">تاریخ</th>
                            <th scope="col">ساعت</th>
                        </tr>
                    </thead>
                    <?php
                        foreach ($appointment as $item) {
                            $timer = App\Models\Time::where('id', $item->time_id)->get();
                            $doctor = App\Models\User::where('id', $item->doctor_id)->first();
                            foreach ($timer as $timers) {
                                print ('<tr>');
                                print ('<th scope="row">'. $doctor->name .'</th>');
                                print ('<td>' .$timers->date. '</td>');
                                print ('<td>' .$timers->hour. '</td>');
                                print ('/<tr>');                        
                            }
                        }
                    ?>
                    {{-- @forelse($appointment as $item)
                    <tbody>
                        <tr>
                            <th scope="row">{{$item->fa_doctor}}</th>
                            <td>{{$item->fa_date}}</td>
                            <td>{{$item->fa_hour}}</td>
                        </tr>
                        
                    </tbody>
                    @empty
                    <div class="alert alert-danger">
                        هیچ نوبتی ثبت نشده
                    </div>
                    @endforelse --}}
                </table>
            </div>
        </div>
        {{-- <div class="col-12 mb-3 mt-5 px-3 text-right">
            <button class="btn btn-primary btn shadow" name="submit" id="submit" type="submit">ثبت تغیرات</button>
        </div> --}}
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