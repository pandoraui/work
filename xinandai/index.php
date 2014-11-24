<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>首页</title>
<meta name="keywords" content="页面关键字">
<meta name="description" content="页面描述">
<?php include("common/meta.php"); ?>
</head>
<body>
<?php include("common/header.php"); ?>
<div class="wrap">
    <?php include("el-cate.php"); ?>
    
    <?php include("el-topad.php"); ?>

    <div class="wrapbox_1 clearfix">
        <div class="nav-tabs">
            <ul class="inline">
                <li class="current"><a href="#">放款信息</a></li>
            </ul>
        </div>
        <div class="side">
            <?php include("el-ad.php"); ?>
        </div> <!--//.side-->
        <div class="main">
            <div class="list_a">
                <?php include("el-list.php"); ?>
            </div> <!--//.list_a-->

            <?php include("el-pages.php"); ?>
        </div> <!--//.main-->
    </div> <!--//.wrapbox_1-->

    <div class="friend-links clearfix">
        <div class="f-head">
            <a href="#" class="link">申请友情链接</a>
            <h4><b>友情链接</b></h4>
        </div>
        <div class="f-body">
            <a target="_blank" href="#">银桥网</a>
            <a target="_blank" href="#">银桥网</a>
            <a target="_blank" href="#">银桥网</a>
        </div>
    </div> <!--//.friend-links-->
</div>



<?php include("common/footer.php"); ?>
</body>
</html>
