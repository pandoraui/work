
<!--临时导航文件-->
<?php include("common/tempnav.html"); ?>
<!--除JS_等功能性前缀， class以及id命名全部使用小写，且命名使用-连字符，不要使用下划线等 -->
<!-- 公共头部开始  -->
<div class="global-nav">
    <nav class="wrap nav">
        <h1 class="logo"><a href="//hao.guessu.com/">GuessU</a></h1>

        <form action="/search" class="header-search pull-left hidden-sm hidden-xs">
            <button type="submit" class="btn btn-link"><span class="sr-only">搜索</span><span class="icon icon-search"></span></button>
            <input id="searchBox" name="q" type="text" placeholder="猜你喜欢" class="form-control" value="">
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
    </nav><!-- //.nav -->
</div><!-- //.global-nav -->
<!-- 公共头部结束  -->
