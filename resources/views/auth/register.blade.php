@extends('layouts.app')

@section('title', '注册')

@section('page', 'signup-page')

@section('content')
    <div class="page-header">
        <div class="page-header-image"
             style="background-image:url(https://i.loli.net/2018/02/13/5a82916abd385.png)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <br>
                <div class="card card-signup" data-background-color="orange">
                    <form class="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="header text-center">
                            <h4 class="title title-up">注册</h4>
                            <div class="social-line">
                                <a href="#" class="btn btn-neutral btn-google btn-icon btn-round">
                                    <i class="fa fa-weibo"></i>
                                </a>
                                <a href="#" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round">
                                    <i class="fa fa-qq"></i>
                                </a>
                                <a href="#" class="btn btn-neutral btn-facebook btn-icon btn-round">
                                    <i class="fa fa-github"></i>
                                </a>
                            </div>
                        </div>

                        @include('common.error')

                        <div class="card-body">
                            <div class="input-group form-group-no-border">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input type="text" name="name" class="form-control" placeholder="名称" value="{{ old('name') }}" required>
                            </div>
                            <div class="input-group form-group-no-border">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope-o"></i>
                                </span>
                                <input type="email" name="email" class="form-control" placeholder="邮箱" value="{{ old('email') }}" required>
                            </div>
                            <div class="input-group form-group-no-border">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input type="password" name="password" placeholder="密码" class="form-control" required>
                            </div>
                            <div class="input-group form-group-no-border">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input type="password" name="password_confirmation" placeholder="确认密码" class="form-control" required>
                            </div>
                            <div class="input-group form-group-no-border">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input type="text" name="captcha" placeholder="验证码" class="form-control" required>
                                <img class="rounded" src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码" height="38">
                            </div>

                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-neutral btn-round btn-lg">注册</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @include('layouts._footer', ['type' => 'transparent'])

    </div>
@endsection
