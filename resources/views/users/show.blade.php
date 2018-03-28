@extends('layouts.app')

@section('title', $user->name . ' 的个人中心')

@section('page', 'profile-page')

@section('content')
    <div class="wrapper">
        <div class="page-header page-header-small">
            <div class="page-header-image" data-parallax="true"
                 style="background-image: url('https://i.loli.net/2017/09/17/59be054adf099.png');">
            </div>
            <div class="container">
                <div class="content-center">
                    <div class="photo-container">
                        <img src="{{ $user->avatar }}" alt="">
                    </div>
                    <h3 class="title">{{ $user->name }}</h3>
                    <p class="category">技术总监</p>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="button-container">
                    <a href="#button" class="btn btn-primary btn-round btn-lg">关注</a>
                    <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title=""
                       data-original-title="添加 Ta 的好友">
                        <i class="fa fa-qq"></i>
                    </a>
                    <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title=""
                       data-original-title="关注 Ta 的微博">
                        <i class="fa fa-weibo"></i>
                    </a>
                </div>
                <h3 class="title">个性签名</h3>
                <h5 class="description">
                    {{ $user->introduction }}
                </h5>
            </div>
        </div>

        @include('layouts._footer')

    </div>
@stop