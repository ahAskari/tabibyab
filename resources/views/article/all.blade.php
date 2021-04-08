@extends('layouts.app')
@section('style')
<link href="{{ asset('css/article/article-list.css') }}" rel="stylesheet">
@endsection
@section('content')

<div class="container" dir="rtl">

    {{-- suggested-content --}}
    <section class="suggested-content mb-5" dir="rtl">
        <div class="card-group mt-5">
            @foreach ($article_header as $article)
            <div class="card rounded">
                <a href="{{route('article', $article->id)}}"><img class="card-img-top"
                        src="{{ asset('images/article/')}}/{{ $article->photo }}" alt="Card image cap"></a>

                <div class="card-body ">
                    <a href="{{route('article', $article->id)}}" class="card-title">{{$article->title}}</a>
                    <p class="card-text">{{$article->content}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">طبیب یاب</small>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    {{-- article-list --}}
    <section class="article-list ">
        @foreach ($articles as $article)
        <div class="article-item row col-12 ml-auto py-4 rounded">
            <div class="article-img col-3 ">
                <a href="{{route('article', $article->id)}}">
                    <img src="{{ asset('images/article/')}}/{{ $article->photo }}" class="rounded" alt="articleImg">
                </a>
            </div>
            <div class="article-content pt-4 col-8 ml-auto ">
                <!-- <p class=""></p> -->
                <a href="{{route('article', $article->id)}}" class="title">{{$article->title}}</a>
                <p class="content mt-4 ">{{$article->content}}</p>
                <a href="{{route('article', $article->id)}}" class="read-more">بیشتر بخوانید</a>
            </div>
        </div>
        @endforeach
    </section>

    {{-- <div class="row mx-auto justify-center">
        {{ $articles->links() }}
    </div> --}}
</div>
@endsection