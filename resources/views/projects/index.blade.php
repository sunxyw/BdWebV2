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
                                    <form method="GET" action="{{ route('projects.index') }}" onreset="this.submit()">
                                        <div class="card card-refine card-plain">
                                            <h4 class="card-title">
                                                条件筛选
                                                <button type="reset"
                                                        class="btn btn-default btn-icon btn-neutral pull-right"
                                                        rel="tooltip" data-original-title="重置">
                                                    <i class="arrows-1_refresh-69 now-ui-icons"></i>
                                                </button>
                                            </h4>

                                            <div class="card card-refine card-plain">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <span class="input-group-text small text-muted">作者</span>
                                                    </div>
                                                    <select name="author" id="author-choose" class="form-control">
                                                        <option value selected>--- 请选择 ---</option>
                                                        @foreach($users as $user)
                                                            @if(!empty($_GET['author']) && $_GET['author'] == $user->id)
                                                                <option value="{{ $user->id }}"
                                                                        selected>{{ $user->name }}</option>
                                                            @else
                                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
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

                                @if($more == 1)
                                    <a class="btn btn-primary btn-round mr-auto ml-auto"
                                       href="{{ route('projects.index') }}">查看最新 <i class="fa fa-angle-up"></i></a>
                                @else
                                    <a class="btn btn-primary btn-round mr-auto ml-auto"
                                       href="{{ route('projects.index') }}?more=1">查看全部 <i class="fa fa-angle-down"></i></a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- section -->

        </div> <!-- end-main-raised -->

        @include('layouts._footer')

    </div>
@endsection