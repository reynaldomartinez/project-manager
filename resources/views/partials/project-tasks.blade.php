<div class="name-project-add d-flex justify-content-between">
    <div class="bread-crumb">
        <a href="/home">My Projects</a> /
        <a>{{$projects->title}}</a>
    </div>
    <div class="addTask-invite">
        {{--@include('pages.create-task')--}}
        <a href="/project/task/create" class="btn btn-primary btn-sm">Add Task</a>
        <a href="" class="btn btn-primary btn-sm">Invite to Project</a>
    </div>
</div>

<div class="row">
    <div class="list-group" style="width: 100%;">
        {{--@foreach($tasks as $task)--}}{{--{{$task->task}}--}}
            <a href="#" class="list-group-item list-group-item-action">fs</a>
        {{--@endforeach--}}
    </div>
</div>