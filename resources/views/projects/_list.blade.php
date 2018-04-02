@if (count($projects))
    @foreach ($projects as $project)

        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-image">
                    <a href="{{ $project->link() }}">
                        <img src="{{ $project->img }}"
                             alt="{{ $project->name }}">
                    </a>
                </div>
                <div class="card-body">
                    @if($project->banned)
                        <a href="{{ $project->link() }}" class="text-danger">
                            <h4 class="card-title">{{ $project->banned }}</h4>
                        </a>
                        <p class="card-description">
                            作品审查中
                        </p>
                    @else
                        <a href="{{ $project->link() }}">
                            <h4 class="card-title">{{ $project->name }}</h4>
                        </a>
                        <p class="card-description">
                            {{ $project->summary }}
                        </p>
                    @endif
                    <div class="card-footer">
                        <span>{{ $project->user->name }}</span>
                    </div>
                </div>
            </div> <!-- end card -->
        </div>

        @break($loop->iteration == 12)

    @endforeach
@else
    暂无数据
@endif