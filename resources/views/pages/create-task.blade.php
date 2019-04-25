{{--<!-- Button trigger modal -->--}}
{{--<button type="button" class="btn btn-danger btn-sm " data-toggle="modal" data-target="#exampleModal">--}}
    {{--Add Task--}}
{{--</button>--}}

{{--<!-- Modal -->--}}
    {{--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
        {{--<div class="modal-dialog" role="document">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<h5 class="modal-title" id="exampleModalLabel">Add a new Task</h5>--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                        {{--<span aria-hidden="true">&times;</span>--}}
                    {{--</button>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<form action="project/task" method="post">--}}

                        {{--<input type="text" name="task" placeholder="Task" class="form-control">--}}
                        {{--<button type="button" class="btn btn-primary">Submit</button>--}}

                    {{--</form>--}}
                        {{--<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

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