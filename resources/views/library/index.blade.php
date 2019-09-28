@extends('layouts.app')

@section('title', 'Library')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                @if (count($categories))
                    @include('library.search-form')
                    <div class="row">
                        @foreach ($categories as $category)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5>0</h5>
                                        <h6><small>Resources</small></h6>
                                        <h3 class="font-weight-bold">{{ $category->name }}</h3>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a class="btn btn-primary px-5" href="">
                                            view
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center text-muted my-5">
                        <h4 class="display-4">
                            No resource category found
                        </h4>
                    </div>
                @endif
            </div>
            <div class="col-md-3">

            </div>
        </div>
        
    </div>
@endsection