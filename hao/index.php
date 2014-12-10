<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>猜你喜欢的导航站</title>
<meta name="keywords" content="页面关键字">
<meta name="description" content="页面描述">
<?php include("common/meta.php"); ?>
</head>
<body>
<?php include("common/header.php"); ?>
<div class="wrap">
    <div class="side">
        <?php include("side.php"); ?>
    </div> <!-- //.side -->
    <div class="main">
        <div class="m-title">今天，将获得什么福利呢？ <a href="#" class="btn btn-primary">Publish</a></div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="/list/newest">最新的</a></li>
            <li><a href="/list/hottest">热门的</a></li>
            <li><a href="/list/undo">未审核</a></li>
        </ul>
        <?php include("list.php"); ?>
    </div> <!-- //.main -->
</div>
<div class="wrap">
    <a href="/feeds" class="feed-link">订阅本页 RSS</a>
</div>


<?php include("common/footer.php"); ?>

</body>
</html>
