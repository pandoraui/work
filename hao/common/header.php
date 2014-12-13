
<!--临时导航文件-->
<?php include("common/tempnav.html"); ?>
<!--除JS_等功能性前缀， class以及id命名全部使用小写，且命名使用-连字符，不要使用下划线等 -->
<!-- 公共头部开始  -->

<div class="topbar">
    
</div> <!-- //.topbar -->

<header class="header navbar navbar-inverse navbar-fixed-top" id="top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <h2 class="hide-clip">主导航</h2>
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="//hao.guessu.com/" class="brand" rel="home">猜你喜欢</a>
        </div>
        <form class="header-search navbar-form navbar-left hidden-sm hidden-xs">
            <button type="submit" class="btn btn-link"><span class="sr-only">搜索</span><span class="glyphicon glyphicon-search"></span></button>
            <input type="text" class="form-control" placeholder="Search...">
        </form>
        <nav id="navbar" class="collapse navbar-collapse" role="navigation">
            <ul class="menu nav nav-pills pull-left" role="tablist">
                <li><a href="/">问答</a></li>
                <li><a href="/blogs">文章</a></li>
                <li><a href="/events">活动</a></li>
                <li><a href="/tags">标签</a></li>
                <li><a href="/users">榜单</a></li>
                <li>
                    <a data-toggle="dropdown" href="/sites" class="more dropdownBtn">
                        &middot;&middot;&middot;<span class="sr-only">更多</span>
                    </a>
                   <!--  <ul class="dropdown-menu">
                    <li><a href="/sites">子站</a></li>
                    </ul> -->
                </li>
            </ul>
            <ul class="opts nav pull-right hide">
                <li class="opts-item"> 无需注册 <a class="em" href="/user/login">直接登录</a></li>
            </ul>
        </nav>
    </div>
</header>
