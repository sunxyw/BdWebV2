@extends('layouts.app')

@section('title', '登录')

@section('page', 'login-page')

@section('content')
    <div class="page-header">
        <div class="page-header-image"
             style="background-image:url(https://i.loli.net/2018/02/13/5a82916abd385.png)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <br>
                <div class="card card-signup" data-background-color="orange">
                    <form class="form" method="POST" action="{{ route('login') }}">

                        {{ csrf_field() }}

                        <div class="header text-center">
                            <h4 class="title title-up">登录</h4>
                            <div class="social-line">
                                <a href="#" class="btn btn-neutral btn-google btn-icon btn-round">
                                    <i class="fa fa-weibo"></i>
                                </a>
                                <a href="#" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round" id="qq-btn">
                                    <i class="fa fa-qq"></i>
                                </a>
                                <a href="#" class="btn btn-neutral btn-facebook btn-icon btn-round">
                                    <i class="fa fa-github"></i>
                                </a>
                            </div>
                        </div>

                        @include('common.error')

                        <div class="card-body" id="default">
                            <div class="input-group form-group-no-border">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope-o"></i>
                                </span>
                                <input type="email" name="email" class="form-control" placeholder="邮箱" value="{{ old('email') }}">
                            </div>
                            <div class="input-group form-group-no-border">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input type="password" name="password" placeholder="密码" class="form-control">
                            </div>
                        </div>

                        <div class="card-body" style="display: none;" id="qq">
                            <img src="https://ssl.ptlogin2.qq.com/ptqrshow?appid=501004106&e=0&l=M&s=5&d=72&v=4&t=0.5965643996421681
">
                        </div>

                        <div class="footer text-center">
                            <button type="submit" class="btn btn-neutral btn-round btn-lg">登录</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @include('layouts._footer', ['type' => 'transparent'])

    </div>

    <script>
        $(document).ready(function () {
            $('#qq-btn').click(function () {
                $('#default').hide();
                $('#qq').show();
            });
        });
    </script>
@endsection
