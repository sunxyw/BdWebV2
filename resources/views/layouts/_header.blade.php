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
                <a class="nav-link" href="{{ route('root') }}">首页</a>
                <a class="nav-link" href="{{ route('projects.index') }}">作品列表</a>
                @guest
                    <a class="nav-link" href="{{ route('login') }}">登录</a>
                    <a class="nav-link" href="{{ route('register') }}">注册</a>
                @else
                    <a class="nav-link" href="{{ route('users.show', auth::id()) }}">
                        <img src="{{ Auth::user()->avatar . '?r=' . time() }}"
                             class="rounded-circle img-raised" width="30px" height="30px">
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-header">{{ Auth::user()->name }}</a>
                        <a class="dropdown-item btn btn-info" href="{{ route('users.show', auth::id()) }}">个人资料</a>
                        <a class="dropdown-item btn btn-danger" href="#"
                           onclick="document.getElementById('logout-form').submit();">安全登出</a>
                    </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>
<!-- End Navbar -->