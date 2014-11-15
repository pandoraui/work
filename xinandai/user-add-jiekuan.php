<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>用户中心-发布借款信息</title>
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
                <div class="c-head"><h2>用户中心——发布借款信息</h2></div>
                <div class="content">
                    <table class="table-info table-full" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="col-t B">借款标题</td>
                            <td colspan="3" class="tr">
                                <select>
                                    <option value="">信用贷款</option>
                                    <option value="">房产抵押</option>
                                    <option value="">汽车抵押</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-t"><i class="req">*</i> 您的称谓</td>
                            <td colspan="3"><input type="text" class="input-text"></td>
                        </tr>
                        <tr>
                            <td class="col-t"><i class="req">*</i> 联系电话</td>
                            <td colspan="3"><input type="text" class="input-text"></td>
                        </tr>
                        <tr>
                            <td class="col-t">QQ/MSN</td>
                            <td><input type="text" class="input-text"></td>
                            <td class="col-t">E-Mail</td>
                            <td><input type="text" class="input-text"></td>
                        </tr>
                        <tr>
                            <td class="col-t"><i class="req">*</i> 工作时间</td>
                            <td>
                                <select name="worktime" id="">
                                    <option value="">3个月以下</option>
                                    <option value="">3-6个月</option>
                                    <option value="">6-12个月</option>
                                    <option value="">12个月以上</option>
                                </select>
                            </td>
                            <td class="col-t"><i class="req">*</i> 职务</td>
                            <td>
                                <select name="post" id="">
                                    <option value="">员工</option>
                                    <option value="">主管</option>
                                    <option value="">高管</option>
                                    <option value="">股东</option>
                                    <option value="">法人</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-t"><i class="req">*</i> 是否有房</td>
                            <td>
                                <select name="house" id="">
                                    <option value="">有房无贷款</option>
                                    <option value="">有房有贷款</option>
                                    <option value="">无房</option>
                                </select>
                            </td>
                            <td class="col-t"><i class="req">*</i> 单位性质</td>
                            <td>
                                <select name="unitprop" id="">
                                    <option value="">民营</option>
                                    <option value="">个体</option>
                                    <option value="">国企</option>
                                    <option value="">事业单位</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-t"><i class="req">*</i> 是否有车</td>
                            <td>
                                <select name="car" id="">
                                    <option value="">有车无贷款</option>
                                    <option value="">有车有贷款</option>
                                    <option value="">无车</option>
                                </select>
                            </td>
                            <td class="col-t"><i class="req">*</i> 是否交金</td>
                            <td>
                                <label><input type="checkbox" name="isjjin" class="vm"> 交金</label>&nbsp;&nbsp;
                                <label><input type="checkbox" name="isjjin" class="vm"> 交社保</label>&nbsp;&nbsp;
                                <label><input type="checkbox" name="isjjin" class="vm"> 都不交</label>&nbsp;&nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td class="col-t"><i class="req">*</i> 信用情况</td>
                            <td colspan="3">
                                <label><input type="radio" name="credence" class="vm"> 良好</label>&nbsp;&nbsp;
                                <label><input type="radio" name="credence" class="vm"> 一般</label>&nbsp;&nbsp;
                                <label><input type="radio" name="credence" class="vm"> 不好</label>&nbsp;&nbsp;
                                <label><input type="radio" name="credence" class="vm"> 不清楚</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-t"><i class="req">*</i> 详细说明</td>
                            <td colspan="3"><textarea class="textarea"></textarea></td>
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
