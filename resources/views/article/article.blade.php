@extends('layouts.app')
@section('style')
{{-- <link href="{{ asset('css/article/article-list.css') }}" rel="stylesheet"> --}}
@endsection
@section('content')
<div class="container text-right" dir="rtl" >
    <div>
       <p class="title">{{$article->title}}</p> 
       <div>
           {{$article->content}}
       </div>
    </div>
</div>
@endsection
@section('script')
<script>
</script>
@endsection