<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>注册页面</title>
<meta name="keywords" content="页面关键字">
<meta name="description" content="页面描述">
<?php include("common/meta.php"); ?>
</head>
<body class="login">
<div class="wrap">
    <div class="header">
        <a href="#" class="login-logo">
            <span class="logo"></span><i class="vline"></i>
            <h2>信安贷登录</h2>
        </a>
    </div>
</div>
<div class="login-outer">
    <div class="login-inner">
        <div class="login-box wrap">
            <div class="login-form">
                <div class="login-fbox">
                    <div class="login-top"></div>
                    <div class="login-con">
                        <table class="login-table" >
                                <tr class="xtr" style="height:40px" >
                                    <td class="tr">手机号：</td>
                                    <td><input type="text" name="" placeholder="手机号" /></td>
                                </tr>
                                <tr class="xtr">
                                    <td class="tr">密码：</td>
                                    <td><input type="password" name="" style="margin-top:10px;" /></td>
                                </tr>
                                <tr style="height:20px">
                                    <td></td>
                                    <td><a href="">忘记密码？</a></td>
                                </tr>
                                <tr style="height:42px">
                                    <td  align="right" style="padding-top:4px">验证码：</td>
                                    <td class="verify"><input type="text" name="" autocomplete="off" /> 
                                    <img id="picverify" style="width:100px" src="http://www.rong360.com/vcode/create?type=bd_login&t=1417006336"/>
                                    </td>
                                </tr>
                                <tr style="line-height:50px">
                                    <td></td>
                                    <td>
                                        <button class="btn-green" type="submit">登 录</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td style="font-size:12px">还没有账号？<a href="/bd/collaborate/apply.html">立即注册</a></td>
                                </tr>
                            </table>
                    </div>
                    <div class="login-bot"></div>
                </div>
            </div>
            <div class="login-img">
                
            </div>
            <div class="login-img">
                
            </div>
        </div>
    </div>
</div>

<?php include("common/footer.php"); ?>

<script>

</script>
</body>
</html>
