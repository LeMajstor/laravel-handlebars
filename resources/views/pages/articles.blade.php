@extends('layouts.default')
@section('css')
<!-- Custom CSS -->
@endsection
@section('content')
    
<!-- Main Content -->
<div id="contentData" data-route="{{ route('article.content') }}"></div>

@endsection

@section('js')
    <!-- index.js -->
    <script src="{{ asset('js/articles.js') }}"></script>
@endsection