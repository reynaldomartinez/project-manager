@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        {{-- if projects home else desplay home/project-name --}}


        <div class="row justify-content-center mt-3">
            <div class="col-lg-9">

                <div class="name-project-add d-flex justify-content-between mb-2">
                    <a class="disabled">My Projects</a>
                    <a href="/project/create" class="btn btn-primary btn-sm">Add Project</a>
                </div>

                <div class="row">

                    @include('partials.project-cards')
                </div>
            </div>
            <div class="col-lg-3">
                @include('partials.update-side-bar')
            </div>
        </div>

    </div>


@endsection

