
@foreach($projects as $project)
        <div class="col-lg-4 col-md-4">
            <div class="card cards shadow">
                <a href="/project/{{$project->id}}" style="text-decoration: none;">
                    <div class="card-header project-header">
                        {{ $project->title }}
                    </div>
                </a>
                <a href="/project/{{$project->id}}" style="text-decoration: none;">
                    <div class="card-body" style="padding-bottom: 80px;">
                        {{ $project->description }}
                    </div>
                </a>
            </div>
        </div>
@endforeach
