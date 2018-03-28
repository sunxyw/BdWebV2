@extends('layouts.app')
@section('title', '首页')

@section('content')

    <div class="wrapper">
        <div class="page-header page-header-small">
            <div class="page-header-image" data-parallax="true"
                 style="background-image: url('http://web-cdn-1252712503.file.myqcloud.com/img/projects/1.png?name=玄霄阁');">
            </div>
            <div class="container">
                <div class="content-center">
                    <h1 class="title">筑龙小组</h1>
                    <div class="text-center">
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                            <i class="fa fa-qq"></i>
                        </a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                            <i class="fa fa-weibo"></i>
                        </a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                            <i class="fa fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">我们是谁？</h2>
                        <h5 class="description">
                            我们仅仅是由一群 Minecraft 爱好者组成的团队，致力于做出更多精致的作品，让大家体会到建筑的美妙。
                        </h5>
                    </div>
                </div>
                <div class="separator separator-primary"></div>
                <div class="section-story-overview">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image-container image-left"
                                 style="background-image: url('https://i.loli.net/2018/02/13/5a828f5d2f841.jpg')">
                                <!-- First image on the left side -->
                                <p class="blockquote blockquote-primary">
                                    "幻轮阁——处于真实与虚幻之中，即便近在眼前也极难被发现它，不入轮回，超离九天。纵使外界沧海桑田，它依旧是那般模样。传闻，此乃上古时期之大能——灵幻仙子与轮回真君的居所，只需在此地待上一年半载，即可长生不老..."
                                    <br>
                                    <br>
                                    <small class="pull-right">构思：夕阳</small>
                                </p>
                            </div>
                            <!-- Second image on the left side of the article -->
                            <div class="image-container"
                                 style="background-image: url('https://i.loli.net/2018/02/13/5a828f3be5542.jpg')"></div>
                        </div>
                        <div class="col-md-5">
                            <!-- First image on the right side, above the article -->
                            <div class="image-container image-right"
                                 style="background-image: url('https://i.loli.net/2018/02/13/5a82916abd385.png')"></div>
                            <h2 class="title">新年主城——幻轮阁</h2>
                            <p>苟年到了，祝愿幸运的清风时时吹拂你，幸福的雨滴四季淋着你，如意的月亮月月照耀你，健康的阳光天天温暖你。祝你天天开心快乐无边！
                            </p>
                            <div class="image-container"
                                 style="background-image: url('https://i.loli.net/2018/02/13/5a828f5d205ea.jpg')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-team text-center">
            <div class="container">
                <h2 class="title">这是我们<small><s>超级牛逼</s></small>的团队</h2>
                <div class="team">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="team-player">
                                <img src="{{ asset('img/team/member-1.jpg?r=1') }}"
                                     alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">西瓜</h4>
                                <p class="category text-primary">创始人/现任组长</p>
                                <p class="description">江湖人称“狗西瓜”</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                            class="fa fa-qq"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                            class="fa fa-weibo"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                            class="fa fa-github"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team-player">
                                <img src="{{ asset('img/team/member-2.jpg?r=1') }}"
                                     alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">冬瓜</h4>
                                <p class="category text-primary">元老/副组长</p>
                                <p class="description">曾用名“檀然”</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                            class="fa fa-qq"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                            class="fa fa-weibo"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                            class="fa fa-github"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team-player">
                                <img src="{{ asset('img/team/member-3.jpg?r=1') }}"
                                     alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">阿布</h4>
                                <p class="category text-primary">元老/副组长</p>
                                <p class="description">没啥好说的</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                            class="fa fa-qq"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                            class="fa fa-weibo"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                            class="fa fa-github"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team-player">
                                <img src="{{ asset('img/team/member-4.jpg?r=1') }}"
                                     alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">落雷</h4>
                                <p class="category text-primary">友谊加盟/渲染大佬</p>
                                <p class="description">没啥好说的</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                            class="fa fa-qq"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                            class="fa fa-weibo"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i
                                            class="fa fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-contact-us text-center">
            <div class="container">
                <h2 class="title">想加入我们？</h2>
                <p class="description"><s>洗洗睡吧</s></p>
                <div class="row">
                    <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                        <div class="input-group input-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="名称">
                        </div>
                        <div class="input-group input-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope-o"></i>
                            </span>
                            <input type="email" class="form-control" placeholder="邮箱">
                        </div>
                        <div class="textarea-container">
                        <textarea class="form-control" name="name" rows="4" cols="80"
                                  placeholder="简短介绍"></textarea>
                        </div>
                        <div class="send-button">
                            <a href="#pablo" class="btn btn-primary btn-round btn-block btn-lg">提交</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts._footer')
@stop