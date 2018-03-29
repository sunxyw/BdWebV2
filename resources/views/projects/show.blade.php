@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Project / Show #{{ $project->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('projects.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('projects.edit', $project->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Name</label>
<p>
	{{ $project->name }}
</p> <label>Summary</label>
<p>
	{{ $project->summary }}
</p> <label>Body</label>
<p>
	{{ $project->body }}
</p> <label>User_id</label>
<p>
	{{ $project->user_id }}
</p> <label>Category_id</label>
<p>
	{{ $project->category_id }}
</p> <label>Reply_count</label>
<p>
	{{ $project->reply_count }}
</p> <label>View_count</label>
<p>
	{{ $project->view_count }}
</p> <label>Order</label>
<p>
	{{ $project->order }}
</p> <label>Slug</label>
<p>
	{{ $project->slug }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
