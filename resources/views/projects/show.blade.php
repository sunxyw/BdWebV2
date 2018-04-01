@extends('layouts.app')

@section('title', $project->name)

@section('content')
    <div class="page-header page-header-small">
        <div class="page-header-image" data-parallax="true"
             style="background-image: url('{{ $project->img }}');"
             id="banner">
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <div id="productCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-raised" src="{{ $project->img }}" id="img"
                                     style="max-height: 450px">
                            </div>
                        </div>
                    </div>

                    <br>

                </div>
                <div class="col-md-6 ml-auto mr-auto">
                    <h2 class="title">{{ $project->name }}</h2>
                    <h5 class="category">{{ $project->user->name }} 
                        <small class="pull-right">点击量: {{ $project->view_count }}</small>
                    </h5>

                    <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                        <div class="card">
                            <div class="card-header text-primary" role="tab" id="headingOne">
                                详细资料
                            </div>
                            <div class="card-body">
                                <p>{{ $project->summary }}</p>
                                <p class="text-muted pull-right">
                                    发布于: {{ $project->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            @can('update', $project)
                                <a class="btn btn-warning mr-3" href="{{ route('projects.edit', $project->id) }}">
                                    编辑 <i class="fa fa-edit"></i>
                                </a>
                            @endcan
                            @can('destroy', $project)
                                <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger mr-3" type="submit">
                                        删除 <i class="fa fa-remove"></i>
                                    </button>
                                </form>
                            @endcan
                            <button class="btn btn-primary mr-3">下载 <i class="fa fa-download"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('layouts._footer')

@endsection