@extends('layouts.app')
@section('content')
<link href="{{ asset('css/article/article-list.css') }}" rel="stylesheet">
<div class="container">
    {{-- suggested-content --}}
    <section class="suggested-content mb-5">
        <div class="title mb-4">
            <p>مطالب پیشنهادی</p>
        </div>
        <div class="card-group">
            <div class="card rounded">
                <img class="card-img-top" src="{{asset('/images/article/1.jpg')}}" alt="Card image cap">
                <div class="card-body ">
                    <h5 class="card-title shadow-lg">بیسبیس</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{asset('/images/article/3.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional
                        content.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{asset('/images/article/1.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title shadow-sm">از دست دادن حس بویایی: کرونا یا کربویی؟</h4>
                </div>
                <div class="card-footer">
                    <small class="text-muted">بیشتر بخوانید</small>
                </div>
            </div>
        </div>
    </section>
    {{-- article-list --}}
    <section class="article-list">
        <div class="article-item d-flex col p-4 rounded">
            
            <div class="article-content pt-4">
                <!-- <p class=""></p> -->
                <a href="#" class="title">داروی ناپروکسن چیست؟ کاربرد و عوارض مصرف ناپروکسن</a>
                <p class="content mt-4">ناپروکسن چیست؟ نام رایج دارو: ناپروکسن - Naproxen نام تجاری دارو: ای‌سی
                    آلو Aleve
                    آناپروکس Anaprox ناپروسین Naprosyn
                    ناپروکسن برای از بین بردن دردهای خفیف…</p>
                <a href="#" class="read-more">بیشتر بخوانید</a>
            </div>
            <div class="article-img pl-4">
                <img src="{{ asset('images/article/articleImg1.jpeg') }}" alt="articleImg">
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
<script>
</script>
@endsection