@extends('layouts.app-ext')

@section('title', 'Welcome')

@push('stylesheet')
    <style>
        body {
            background-color: #fff;
        }
    </style>
@endpush
@section('content')
    <div class="container">
       <div class="text-center">
           <img src="{{ asset('/images/banner.jpg') }}" class="img-fluid">
       </div>
       <div class="my-3 text-center">
           <h4 class="display-4">Open Library System</h4>
           <a class="btn btn-lg btn-primary mt-2" href="">
               Browse Library
           </a>
       </div>
    </div>
@endsection