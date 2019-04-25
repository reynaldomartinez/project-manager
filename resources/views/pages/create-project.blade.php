@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="create-top-section">
            <h2 style="margin: 0;">Create a Project</h2>
            <a href="{{URL::previous()}}" class="btn btn-danger btn-sm" >Go Back</a>
        </div>

        <div class="card create-card d-flex justify-content-center align-content-center mt-5 p-5">
            <form action="/project" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="title" placeholder="Project Name" class="form-control" value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Project Description" class="form-control" style="resize: none;"></textarea>
                </div>

                <button class="btn btn-primary">Create Project</button>
            </form>
        </div>
    </div>
@endsection