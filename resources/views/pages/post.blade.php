@extends('layouts.default')
@section('css')
<!-- Custom CSS -->
@endsection
@section('content')
    
<!-- Main Content -->
<div id="contentData" data-route="{{ route('post.content', ['id' => request()->route()->id]) }}"></div>

@endsection

@section('js')
    <!-- index.js -->
    <script src="{{ asset('js/post.js') }}"></script>
@endsection