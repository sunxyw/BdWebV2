<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white fixed-top">
    @include('layouts._message')
    <div class="container">
        <div class="navbar-translate">
            <a class="nav-brand">
                <img src="{{ asset('img/logo.png') }}" height="35">
            </a>
            <div class="form-inline d-lg-none d-xl-none">
                <div id="default" class="form-inline">
                    <a class="nav-link" href="{{ route('root') }}">首页</a>
                    <a class="nav-link" href="{{ route('projects.index') }}">作品列表</a>
                </div>
                @guest
                    <a class="nav-link" href="{{ route('login') }}">登录</a>
                    <a class="nav-link" href="{{ route('register') }}">注册</a>
                @else
                    <div id="user" class="form-inline" style="display: none">
                        <a class="nav-link" href="{{ route('users.show', Auth::id()) }}">个人资料</a>
                        <a class="nav-link" onclick="document.getElementById('logout-form').submit();">安全登出</a>
                    </div>
                    <a class="nav-link" href="javascript:void(0)" id="user-avatar">
                        <img src="{{ Auth::user()->avatar . '?r=' . time() }}"
                             class="rounded-circle" width="30px" height="30px">
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </div>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a style="display: none" class="d-md-block">&emsp;</a>
                </li>
                <li class="nav-item">
                    <a style="display: none" class="nav-link d-md-block" href="{{ route('root') }}">首页</a>
                </li>
                <li class="nav-item">
                    <a style="display: none" class="nav-link d-md-block" href="{{ route('projects.index') }}">作品列表</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <form class="form form-inline">
                    <input style="display: none;" type="text" name="name" class="form-control d-md-block"
                           placeholder="搜索">
                    <a class="btn btn-neutral btn-sm" href="{{ route('projects.create') }}"><i class="fa fa-plus"></i></a>
                </form>
                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a style="display: none" class="nav-link d-md-block" href="{{ route('login') }}">登录</a>
                        </li>
                        <li class="nav-item">
                            <a style="display: none" class="nav-link d-md-block" href="{{ route('register') }}">注册</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ Auth::user()->avatar . '?r=' . time() }}"
                                     class="rounded-circle" width="30px" height="30px">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="user">
                                <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">个人资料</a>
                                <a class="dropdown-item" href="javascript:void(0)" onclick="document.getElementById('logout-form').submit();">安全登出</a>
                            </div>
                        </li>
                    @endguest
                </ul>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->