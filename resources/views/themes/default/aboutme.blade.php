@extends('themes.default.layouts')

@section('header')
    <title>关于我-{{ systemConfig('title','youseeseeme Blog') }}</title>
    <meta name="keywords" content="关于我 王建峰  技术博客 前端工程师" />
    <meta name="description" content="关于我 王建峰  技术博客 前端工程师">
@endsection

@section('content')
    <section class="banner-about">
        <h1>关于我</h1>
    </section>
    <section class="container container-about">
        <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
            <header class="title-block text-center mt50">
                <h2 class="title-underblock dark">
                    <span class="light color-red">个人</span>简介
                </h2>
            </header>
            <p class="mt30">
                
            </p>
            <header class="title-block text-center mt50">
                <h2 class="title-underblock dark">
                    <span class="light color-red">联系</span>方式
                </h2>
            </header>
            <p class="mt30">QQ：993200496&nbsp;&nbsp;&nbsp;&nbsp;微信：wang993200496</p>

        </div>
    </section>
@endsection
