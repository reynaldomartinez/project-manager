
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="create-top-section">
            <h2 style="margin: 0;">Create a Task</h2>
            <a href="{{URL::previous()}}" class="btn btn-danger btn-sm" >Go Back</a>
        </div>

        <div class="card create-card d-flex justify-content-center align-content-center mt-5 p-5">
            <form action="/project/task" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="task" placeholder="Task" class="form-control">
                </div>

                <button class="btn btn-primary">Create Task</button>
            </form>
        </div>
    </div>
@endsection