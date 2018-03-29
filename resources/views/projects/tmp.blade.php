<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> Project
                    <a class="btn btn-success pull-right" href="{{ route('projects.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                @if($projects->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th> <th>Summary</th> <th>Body</th> <th>User_id</th> <th>Category_id</th> <th>Reply_count</th> <th>View_count</th> <th>Order</th> <th>Slug</th>
                            <th class="text-right">OPTIONS</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td class="text-center"><strong>{{$project->id}}</strong></td>

                                <td>{{$project->name}}</td> <td>{{$project->summary}}</td> <td>{{$project->body}}</td> <td>{{$project->user_id}}</td> <td>{{$project->category_id}}</td> <td>{{$project->reply_count}}</td> <td>{{$project->view_count}}</td> <td>{{$project->order}}</td> <td>{{$project->slug}}</td>

                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ $project->link() }}">
                                        <i class="glyphicon glyphicon-eye-open"></i>
                                    </a>

                                    <a class="btn btn-xs btn-warning" href="{{ $project->link() }}">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </a>

                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $projects->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                @endif
            </div>
        </div>
    </div>
</div>