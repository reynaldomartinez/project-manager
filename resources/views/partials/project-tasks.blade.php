<div class="name-project-add d-flex justify-content-between">
    <div class="bread-crumb">
        <a href="/home">My Projects</a> /
        <a>{{$projects->title}}</a>
    </div>
    <div class="addTask-invite">
        {{--@include('pages.create-task')--}}
        <a href="/project/task/create" class="btn btn-primary btn-sm">Add Task</a>
        <a href="" class="btn btn-primary btn-sm">Invite to Project</a>
        {{--@foreach($project->tasks as $task)--}}
            {{--<p>{{$task->body}}</p>--}}
        {{--@endforeach--}}
    </div>
</div>

<div class="row">
    <div class="list-group" style="width: 100%;">
        {{--@foreach($tasks as $task)--}}{{--{{$task->task}}--}}
        <form action="/projects/{{$projects->id}}/tasks" method="post">
            @csrf
            <input type="text" name="task" placeholder="Enter a Task" class="p-3 bg-transparent" onsubmit="form.submit()" style="width: 100%;">
        </form>

        <ul>
            @foreach($projects->tasks as $task)
                <li>{{$task->task}}</li>
            @endforeach
        </ul>
        {{--@endforeach--}}
    </div>
</div>