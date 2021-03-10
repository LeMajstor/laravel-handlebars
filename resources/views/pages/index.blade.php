@extends('layouts.default')
@section('css')
    <!-- Custom CSS -->
@endsection
@section('content')
    
<!-- Main Content -->
<div id="contentData" data-route="{{ route('index.content') }}"></div>

@endsection

@section('js')
    <!-- index.js -->
    <script src="{{ asset('js/index.js') }}"></script>
@endsection