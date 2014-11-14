work
====

workspace


嵌套开发项目基础结构
====================

为避免开发大批量页面公用组件的同步修改问题，使用类似 &lt;?php include("common/header.php"); ?&gt; 形式进行嵌套，这样简单修改就可一致同步，也便于查找bug，使用起来非常便捷。

文件结构如下:
-------------

    common
        |- meta.php     样式引用等
        |- header.php   公共头部
        |- footer.php   公共底部
        |- tempnav.html 快捷导航
        
    example.php     嵌套示例模板
    index.php       首页

此文件不断更新中...


