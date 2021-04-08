@extends('layouts.app')
@section('style')
<style>
    .article-img img{
        display: block;
        height: 320px;
        margin: 2rem auto;
    }
</style>
@endsection
@section('content')
<div class="container p-5 text-right" dir="rtl" >
       <h3 class="title">{{$article->title}}</h3> 
       <div class="article-img">
           <img src="{{ asset('images/article/')}}/{{ $article->photo }}" class="rounded shadow-lg" alt="articleImg">
       </div>
       <div>
           {{$article->content}}
       </div>
</div>
@endsection
@section('script')
<script>
</script>
@endsection