@extends('layouts.app')

@section('title', '作品列表')

@section('content')
    <div class="wrapper">
        <div class="page-header page-header-small">
            <div class="page-header-image" data-parallax="true"
                 style="background-image: url('http://web-cdn-1252712503.file.myqcloud.com/img/projects/1.png?name=玄霄阁');">
            </div>
        </div>
        <div class="main">
            <div class="section">
                <div class="container">
                    <h2 class="section-title">作品列表</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="collapse-panel">
                                <div class="card-body">
                                    <form method="GET" action="{{ route('projects.index') }}">
                                        <div class="card card-refine card-plain">
                                            <h4 class="card-title">
                                                条件筛选
                                                <button type="reset" class="btn btn-default btn-icon btn-neutral pull-right"
                                                        rel="tooltip" data-original-title="重置">
                                                    <i class="arrows-1_refresh-69 now-ui-icons"></i>
                                                </button>
                                            </h4>
                                            <div class="card-header" role="tab">
                                                <h6 class="mb-0">
                                                    <a data-toggle="collapse" href="#size"
                                                       aria-expanded="true">
                                                        规模
                                                        <i class="now-ui-icons arrows-1_minimal-down pull-right"></i>
                                                    </a>
                                                </h6>
                                            </div>

                                            <div id="size" class="collapse show" role="tabpanel">
                                                <div class="card-body">
                                                    <div class="radio">
                                                        <input type="radio" name="size" id="size1" value="1">
                                                        <label for="size1">
                                                            大型群体建筑
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" name="size" id="size2" value="2">
                                                        <label for="size2">
                                                            小型群体建筑
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" name="size" id="size3" value="3">
                                                        <label for="size3">
                                                            大型单体建筑
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" name="size" id="size4" value="4">
                                                        <label for="size4">
                                                            小型群体建筑
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-refine card-plain">
                                                <div class="card-header" role="tab">
                                                    <h6 class="mb-0">
                                                        <a data-toggle="collapse" href="#author"
                                                           aria-expanded="true">
                                                            作者
                                                            <i class="now-ui-icons arrows-1_minimal-down pull-right"></i>
                                                        </a>
                                                    </h6>
                                                </div>

                                                <div id="author" class="collapse" role="tabpanel">
                                                    <div class="card-body">
                                                        抱歉，功能尚未开放
                                                        {{--@foreach($users as $user)
                                                            <div class="radio">
                                                                <input type="radio" name="author" id="author{{ $user->id }}"
                                                                       value="{{ $user->id }}">
                                                                <label for="author{{ $user->id }}">
                                                                    {{ $user->name }}
                                                                </label>
                                                            </div>
                                                        @endforeach--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-block">确认</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="row">

                                @include('projects._list', ['projects' => $projects])
                                {!! $projects->render() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- section -->

        </div> <!-- end-main-raised -->

        @include('layouts._footer')

    </div>
@endsection