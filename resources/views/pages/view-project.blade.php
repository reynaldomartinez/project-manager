@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        {{--<h1>{{$projects->title }}</h1>--}}

        <div class="row">
            <div class="col-lg-9">
                @include('partials.project-tasks')
            </div>

            <div class="col-lg-3">
                @include('partials.update-side-bar')
            </div>
        </div>
    </div>
@endsection