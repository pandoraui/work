<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>修改资料</title>
<meta name="keywords" content="页面关键字">
<meta name="description" content="页面描述">
<?php include("common/meta.php"); ?>
</head>
<body>
<?php include("common/header.php"); ?>
<div class="wrap">
    <div class="wrapbox_1 user-info">
        <div class="aside">
            <div class="nav-user">
                <h3>用户中心</h3>
                <div class="content">
                    <a href="#"><span>发布放款信息</span></a>
                    <a href="#"><span>放款信息</span></a>
                    <a href="#"><span>在线充值</span></a>
                    <a href="#"><span>消费记录</span></a>
                    <a href="#"><span>修改资料</span></a>
                    <a href="#"><span>修改密码</span></a>
                    <a href="#"><span>退出登录</span></a>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="cbox">
                <div class="c-head"><h2>用户中心——修改资料</h2></div>
                <div class="content">
                    <p><strong>开发者提醒：</strong>借款用户没有公司名称和公司地址</p>
                    <table class="table-info table-full" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="col-t">用户名称</td>
                            <td colspan="3">
                                <input type="text" class="input-text">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-t">真实姓名</td>
                            <td colspan="3">
                                <input type="text" class="input-text">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-t">性别</td>
                            <td colspan="3">
                                <label><input type="radio" name="sex" class="vm"> 男</label>&nbsp;&nbsp;
                                <label><input type="radio" name="sex" class="vm"> 女</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-t">联系电话</td>
                            <td colspan="3">
                                <input type="text" class="input-text">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-t">公司名称</td>
                            <td colspan="3">
                                <input type="text" class="input-text">
                            </td>
                        </tr>
                        <tr>
                            <td class="col-t">公司地址</td>
                            <td class="col-t">上海</td>
                            <td><select>
                                <option value="">浦东</option>
                                <option value="">普陀</option>
                                <option value="">徐汇</option>
                            </select></td>
                            <td><input type="text" class="input-text"></td>
                        </tr>
                        <tr>
                            <td class="col-t">QQ/MSN</td>
                            <td colspan="3"><input type="text" class="input-text"></td>
                        </tr>
                        <tr>
                            <td class="col-t">邮箱</td>
                            <td colspan="3"><input type="text" class="input-text"></td>
                        </tr>
                        <tr>
                        <tr>
                            <td class="col-t">备注</td>
                            <td colspan="3"><textarea class="textarea"></textarea></td>
                        </tr>
                    </tr>
                    </table>
                </div>
            </div> <!--//.cbox-->
        </div> <!--//.main-->
    </div> <!--//.wrapbox_1-->
</div>


<?php include("common/footer.php"); ?>

</body>
</html>
