@extends('layouts.default')
@section('css')
    <!-- Custom CSS -->
@endsection
@section('content')
    
<!-- Main Content -->
<div id="contentData" data-route="{{ route('citation.content') }}"></div>


@endsection

@section('js')
    <!-- citations.js -->
    <script src="{{ asset('js/citations.js') }}"></script>
@endsection