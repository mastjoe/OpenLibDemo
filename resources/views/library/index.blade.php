@extends('layouts.app')

@section('title', 'Library')

@section('content')
    <div class="container-fluid">
        @if (count($categories))
            <div class="row">
                
            </div>
        @else
            <div class="text-center text-muted my-5">
                <h4 class="display-4">
                    No resource category found
                </h4>
            </div>
        @endif
    </div>
@endsection