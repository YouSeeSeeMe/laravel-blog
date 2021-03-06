<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        @yield('header')
        <link rel="stylesheet" href="{{ homePlugin('/bootstrap/dist/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ homePlugin('/fontawesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ homeAsset('/css/globals/home.css') }}">
        @yield('homecss')
        <meta property="og:type" content="article">
        <meta property="og:locale" content="zh_CN" />
        <!-- talkingdata -->
        <script src="http://sdk.talkingdata.com/app/h5/v1?appid=51B38F2109904BAE938164363FFA34F4&vn=YouSeeSeeMe博客&vc=1.0.0"></script>
    </head>
    <body class="home">
        <header class="header">
            <div id="header-search-form" class="navbar-search collapse">
                <form class="container" action="{{url('search/keyword')}}" method="get">
                    <input type="search" id="navbar_search" name="keyword" class="form-control" placeholder="请输入搜索内容，回车搜索..."/>
                    <button id="search_submit" type="submit" title="搜索">
                        <em class="fa fa-search"></em>
                    </button>
                </form>
            </div>
            <nav class="navbar navbar-white">
                <div class="navbar-top clearfix">
                    <div class="container">
                        <div class="pull-left">
                            <a><em class="fa fa-user"></em>&nbsp;&nbsp;YouSeeSeeMe</a>
                        </div>
                        <div class="pull-right social-icons">
                            <a class="social-icon pull-right" rel="nofollow" href="https://github.com/YouSeeSeeMe" target=_blank><em class="fa fa-github"></em></a>
                        </div>
                    </div>
                </div>
                <div class="container navbar-inner">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <em class="fa fa-navicon"></em>
                        </button>
                        <a class="navbar-brand" href="/">
                            <img title="王建峰博客" alt="王建峰博客" src="/images/logo.png" />
                        </a>
                        <button type="button" class="navbar-btn btn-icon btn-circle pull-right visible-xs" data-toggle="collapse" data-target="#header-search-form" aria-expanded="true">
                            <em class="fa fa-search"></em>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav">
                            <li class="cate dropdown nav-cate">
                                <a href="{{url('/')}}">首页</a>
                            </li>
                            @foreach($cateArr as $cate)
                                <li class="cate dropdown nav-cate">
                                    <a href="{{url('category').'/'.$cate->as_name}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        {{$cate->cate_name}}
                                        <em class="fa fa-angle-down hidden-xs"></em>
                                    </a>
                                    @if(count($cate->list))
                                        <ul class="cate-list dropdown-menu">
                                            @foreach($cate->list as $list)

                                                <li><a href="{{url('/category').'/'.$list->as_name}}">{{$list->cate_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                            @foreach($navList as $nav)
                                <li class="cate dropdown nav-cate">
                                    <a href="{{$nav->url}}" class="dropdown-toggle" >
                                        {{$nav->name}}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                        <button id="navbar_btn_search" class="pull-right navbar-btn hidden-xs" data-toggle="collapse" data-target="#header-search-form">
                            <em class="fa fa-search"></em>
                        </button>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>

        <!-- / header -->
        @yield('content')
        <footer class="">
            <div class="site-footer" role="contentinfo">
                <div class="container">
                    <blockquote class="blockquote-reverse">
                        <p>
                            只有你全力热爱自己的身体，才能有余力热爱这个美丽的世界。
                            <br />
                            你来人间一趟，应该晒晒太阳，和心爱之人走在大街上。
                            <br />
                            好好爱自己，才是余生浪漫的开始。
                        </p>
                        <footer><cite title="Source Title">可以一成不变，也可以立即改变！</cite></footer>
                    </blockquote>
                </div>
                <div class="copyright text-center">
                    Copyright © 2018 <a href="{{url('/')}}">youseeseeme</a> All Rights Reserved
                    @if(systemConfig('put_on_record'))
                        | <a rel="nofollow" href="http://www.miitbeian.gov.cn/"> {{ systemConfig('put_on_record') }}</a>
                    @endif
                </div>
            </div>
        </footer>
        <!-- / footer -->
        <script src="{{ homePlugin('/jquery/dist/jquery.js') }}"></script>
        <script src="{{ homePlugin('/bootstrap/dist/js/bootstrap.js') }}"></script>
        <script src="{{ asset('/public/js/baidupush.js') }}"></script>
        <script src="{{asset('js/home.js')}}"></script>
        @yield('homejs')
    </body>
</html>
