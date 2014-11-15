<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>用户中心-发布放款信息</title>
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
                <div class="c-head"><h2>用户中心——发布放款信息</h2></div>
                <div class="content">
                    <table class="table-info table-full" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="col-t B">放款标题</td>
                            <td colspan="4" class="tr">
                                <select>
                                    <option value="">信用贷款</option>
                                    <option value="">房产抵押</option>
                                    <option value="">汽车抵押</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-t">公司名称</td>
                            <td colspan="4"><input type="text" class="input-text"></td>
                        </tr>
                        <tr>
                            <td class="col-t">产品名称</td>
                            <td colspan="4"><input type="text" class="input-text"></td>
                        </tr>
                        <tr>
                            <td class="col-t">还款方式</td>
                            <td colspan="2"><input type="text" class="input-text"></td>
                            <td class="col-t">利率</td>
                            <td><input type="text" class="input-text"></td>
                        </tr>
                        <tr>
                            <td class="col-t">额度范围</td>
                            <td colspan="2"><input type="text" class="input-text"></td>
                            <td class="col-t">放款时间</td>
                            <td><input type="text" class="input-text"></td>
                        </tr>
                        <tr>
                            <td class="col-t">产品特点</td>
                            <td colspan="4"><textarea class="textarea"></textarea></td>
                        </tr>
                        <tr>
                            <td class="col-t">申请条件</td>
                            <td colspan="4"><textarea class="textarea"></textarea></td>
                        </tr>
                        <tr>
                            <td class="col-t">申请材料</td>
                            <td colspan="4"><textarea class="textarea"></textarea></td>
                        </tr>
                        <tr>
                            <td class="col-t">联系人</td>
                            <td colspan="2"><input type="text" class="input-text"></td>
                            <td class="col-t">联系电话</td>
                            <td><input type="text" class="input-text"></td>
                        </tr>
                        <tr>
                            <td class="col-t">公司地址</td>
                            <td class="col-t">上海</td>
                            <td><select>
                                <option value="">浦东</option>
                                <option value="">普陀</option>
                                <option value="">徐汇</option>
                            </select></td>
                            <td colspan="2"><input type="text" class="input-text"></td>
                        </tr>
                        <tr>
                            <td class="col-t">QQ/MSN</td>
                            <td colspan="4"><input type="text" class="input-text"></td>
                        </tr>
                        <tr>
                            <td class="col-t">上传LOGO</td>
                            <td colspan="4"><div class="upload-logo">
                                <input type="file">
                            </div></td>
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
