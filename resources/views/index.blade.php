@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<section class="">
    <!-- header  -->
    <section dir="ltr" class="header pt-5" style="background-image: url('images/index/background-header/doctor.jpg');">
        <div class="searchDoctor shadow-lg col-12 ">
            <label for="specialyList" class="text-center text-info shadow-lg ml-0" style=" font-size: 20px">جستجوی تخصص</label>
            <div class="d-flex justify-content-between">
                <form action="{{ route('doctorList') }}" method="get" class="d-flex align-items-center">
                    <input type="submit" class="btn btn-info" value="جستجو"> 
                    <div class="specialyList shadow-lg  ml-2 text-center" id="specialyList">
                        <select name="specialyList" class="custom-select custom-select"  id="" required dir="rtl">
                            <option value="" selected disabled>تخصص مورد نظر خود را انتخاب کنید</option>
                            @foreach ($title as $item)
                            <option value="{{$item->id}}">{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>


@endsection
@section('script')

@endsection
