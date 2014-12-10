
<!--临时导航文件-->
<?php include("common/tempnav.html"); ?>

<!-- 公共头部开始  -->
<div class="global-nav">
    <nav class="wrap nav">
        <!-- <div class="dropdown m-menu hide">
            <a href="javascript:void(0);" id="dLabel" class="visible-xs-block m-toptools" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon icon-align-justify"></span>
                <span class="mobile-menu-unreadpoint"></span>
            </a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <li class="mobile-menu-item"><a href="/">问答</a></li>
                <li class="mobile-menu-item"><a href="/blogs">文章</a></li>
                <li class="mobile-menu-item"><a href="/events">活动</a></li>
                <li class="mobile-menu-item"><a href="/tags">标签</a></li>
                <li class="mobile-menu-item"><a href="/users">榜单</a></li>
                <li class="mobile-menu-item"><a href="/sites">子站</a></li>
                <li class="mobile-menu-item"><a href="/user/notifications">消息<span class="pull-right badge mt4" id="m-messageCount"></span></a></li>
            </ul>
        </div> -->

        <h1 class="logo"><a href="//hao.guessu.com/">GuessU</a></h1>

        <a href="/user/login" class="visible-xs-block pull-right m-ask m-toptools"><span class="icon icon-log-in"></span></a>

        <form action="/search" class="header-search pull-left hidden-sm hidden-xs">
            <button type="submit" class="btn btn-link"><span class="sr-only">搜索</span><span class="icon icon-search"></span></button>
            <input id="searchBox" name="q" type="text" placeholder="输入关键字搜索" class="form-control" value="">
        </form>

        <ul class="menu list-inline pull-left hidden-xs">
            <li class="menu-item"><a href="/">问答</a></li>
            <li class="menu-item"><a href="/blogs">文章</a></li>
            <li class="menu-item"><a href="/events">活动</a></li>
            <li class="menu-item"><a href="/tags">标签</a></li>
            <li class="menu-item"><a href="/users">榜单</a></li>
            <li class="menu-item dropdown hoverDropdown">
                <a data-toggle="dropdown" href="/sites" class="more dropdownBtn">
                    &middot;&middot;&middot;<span class="sr-only">更多</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="/sites">子站</a></li>
                </ul>
            </li>
        </ul>

        <ul class="opts pull-right list-inline hidden-xs">
            <li class="opts-item"> 无需注册 <a id="sfLogin" href="/user/login" class="em ml10" onClick="_gaq.push(['_trackEvent', 'Button', 'Click', 'Login']);">直接登录</a></li>
        </ul>
    </nav><!-- end .global-nav -->
</div>

<!-- 公共头部结束  -->
