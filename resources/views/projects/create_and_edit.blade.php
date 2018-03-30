@extends('layouts.app')

@if($project->id)
    @php $img = $project->img; @endphp
@else
    @php $img = 'http://web-cdn-1252712503.file.myqcloud.com/img/projects/1.png?name=玄霄阁'; @endphp
@endif

@section('title', $action)

@section('content')
    <div class="page-header page-header-small">
        <div class="page-header-image" data-parallax="true"
             style="background-image: url('{{ $project->img or 'http://www.cncshare.com/wp-content/uploads/2016/02/144.jpg' }}');"
             id="banner">
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div id="productCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-raised" src="{{ $project->img }}" id="img"
                                     style="max-height: 450px">
                            </div>
                        </div>
                    </div>

                    <p class="blockquote blockquote-primary" id="img-info">
                    </p>

                </div>
                <div class="col-md-4 mr-auto">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">
                                @if($project->id)
                                    编辑资料
                                @else
                                    填写资料
                                @endif
                            </h4>

                            @if($project->id)
                                <form class="form" method="POST"
                                      action="{{ route('projects.update', $project->id) }}"
                                      enctype="multipart/form-data" accept-charset="UTF-8">
                                    <input type="hidden" name="_method" value="PUT">
                                    @else
                                        <form action="{{ route('projects.store') }}" enctype="multipart/form-data"
                                              method="POST"
                                              accept-charset="UTF-8">
                                            @endif
                                            {{ csrf_field() }}
                                            @include('common.error')
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <span class="input-group-text small">名称</span>
                                                </div>
                                                <input type="text" name="name" class="form-control"
                                                       value="{{ old('name', $project->name) }}">
                                            </div>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <span class="input-group-text small">作者</span>
                                                </div>
                                                <select class="form-control" name="user_id">
                                                    @foreach($users as $user)
                                                        @if($user->id == $project->user_id)
                                                            <option value="{{ $user->id }}"
                                                                    selected>{{ $user->name }}</option>
                                                        @else
                                                            @if($user->id == Auth::id())
                                                                <option value="{{ $user->id }}"
                                                                        selected>{{ $user->name }}</option>
                                                            @else
                                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <span class="input-group-text small">简介</span>
                                                </div>
                                                <textarea class="form-control"
                                                          name="summary">{{ old('summary', $project->summary) }}</textarea>
                                            </div>
                                            <div class="input-group">
                                                <button class="btn btn-info"
                                                        onclick="document.getElementById('img-file').click()">
                                                    选择封面图
                                                </button>
                                                <input class="form-control" name="img" type="file" id="img-file"
                                                       style="display: none;">
                                            </div>

                                            <div class="checkbox">
                                                <input id="accept" name="accept" value="true" type="checkbox"
                                                       required>
                                                <label for="accept">
                                                    我同意
                                                    <a href="javascript:void(0)" data-container="body"
                                                       data-original-title="协议详情" data-toggle="popover"
                                                       data-placement="bottom"
                                                       data-content="在不违反法律及作者权益的情况下，筑龙有权对该作品进行操作">
                                                        筑龙作品投稿协议
                                                    </a>
                                                </label>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-round btn-lg">提交
                                                </button>
                                            </div>
                                        </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('layouts._footer')

    <script>
        document
            .querySelector('#img-file')
            .addEventListener('change', function () {
                //当没选中图片时，清除预览
                if (this.files.length === 0) {
                    document.querySelector('#img').src = '';
                    return;
                }

                //实例化一个FileReader
                var reader = new FileReader();

                var file = this.files[0];

                reader.onload = function (e) {
                    //当reader加载时，把图片的内容赋值给
                    document.querySelector('#img').src = e.target.result;
                    document.querySelector('#img-info').innerHTML = '文件读取成功！&emsp;[' + file.name + ']';
                };

                reader.onerror = function (e) {
                    //当reader加载时，把图片的内容赋值给
                    document.querySelector('#img-info').className = 'blockquote blockquote-danger';
                    document.querySelector('#img-info').innerHTML = '读取文件时发生错误！';
                };

                //读取选中的图片，并转换成dataURL格式
                reader.readAsDataURL(file);
            }, false);
    </script>

@endsection