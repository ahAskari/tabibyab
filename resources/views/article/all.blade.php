@extends('layouts.app')
@section('style')
<link href="{{ asset('css/article/article-list.css') }}" rel="stylesheet">
@endsection
@section('content')

<div class="container">

    {{-- suggested-content --}}
    <section class="suggested-content mb-5" dir="rtl">
        <div class="title mb-4">
            <p>مطالب پیشنهادی</p>
        </div>
        <div class="card-group">
            @foreach ($article_header as $article)
            <div class="card rounded">
                <img class="card-img-top" src="{{asset('/images/article/1.jpg')}}" alt="Card image cap">
                <div class="card-body ">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{{$article->content}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    {{-- article-list --}}
    <section class="article-list">
        @foreach ($articles as $article)
        <div class="article-item d-flex col-9 p-4 rounded">
            <div class="article-content pt-4">
                <!-- <p class=""></p> -->
                <a href="#" class="title">{{$article->title}}</a>
                <p class="content mt-4">{{$article->content}}</p>
                <a href="#" class="read-more">بیشتر بخوانید</a>
            </div>
            <div class="article-img pl-4">
                <img src="{{ asset('images/article/articleImg1.jpeg') }}" alt="articleImg">
            </div>
        </div>
        @endforeach
    </section>
</div>
@endsection
@section('script')
<script>
</script>
@endsection