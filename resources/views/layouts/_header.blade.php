<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
        <div class="dropdown button-dropdown">
            <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                <span class="button-bar"></span>
                <span class="button-bar"></span>
                <span class="button-bar"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-header">站内导航</a>
                <a class="dropdown-item" href="{{ route('root') }}">首页</a>
            </div>
        </div>
        <div class="navbar-translate">
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation"
             data-nav-image="https://demos.creative-tim.com/now-ui-kit/assets/img/blurred-image-1.jpg">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">登录</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">注册</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            <img src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60"
                                 class="rounded-circle img-raised" width="30px" height="30px">
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-header">{{ Auth::user()->name }}</a>
                            <a class="dropdown-item" href="{{ route('users.show', auth::id()) }}">个人资料</a>
                            <a class="dropdown-item" href="#"
                               onclick="document.getElementById('logout-form').submit();">安全登出</a>
                        </div>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endguest
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="加入QQ群" data-placement="bottom"
                       href="https://jq.qq.com/?_wv=1027&k=5K72gG1" target="_blank">
                        <i class="fa fa-qq"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="关注微博" data-placement="bottom"
                       href="" target="_blank">
                        <i class="fa fa-weibo"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->