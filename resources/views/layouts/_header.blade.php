<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white fixed-top" style="border-top: 3px solid #4285f4">
    @include('layouts._message')
    <div class="container">
        <div class="navbar-translate">
            <a class="nav-brand" href="#" data-toggle="dropdown">
                <img src="{{ asset('img/logo.png') }}" height="30">
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-header">站内导航</a>
                <a class="dropdown-item" href="{{ route('root') }}">首页</a>
                <a class="dropdown-item" href="{{ route('projects.index') }}">作品</a>
            </div>
            <div class="form-inline float-right">
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
                    <a class="nav-link" href="#" id="user-avatar">
                        <img src="{{ Auth::user()->avatar . '?r=' . time() }}"
                             class="rounded-circle" width="30px" height="30px">
                    </a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>
<!-- End Navbar -->