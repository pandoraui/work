<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>注册页面</title>
<meta name="keywords" content="页面关键字">
<meta name="description" content="页面描述">
<?php include("common/meta.php"); ?>
</head>
<body class="register">
<?php include("common/header.php"); ?>
<div class="wrap">
    <div class="regtabs">
        <ul class="inline">
            <li class="current"><a href="javascript:;">放款用户</a></li>
            <li><a href="javascript:;">借款用户</a></li>
        </ul>
    </div>
    <div class="main regbox">
        <div class="xbox regbox1">
            <ul class="ul-ver">
                <li>
                    <label class="xlabel">手机号码<i class="req">*</i></label>
                    <input id="username" type="text" class="input-text" />
                    <p class="xinfo">
                        <span class="default">请输入手机号，此作为您的登录帐号</span>
                        <span class="warning"><i class="icon icon-warning"></i>请填写正确的手机号</span>
                        <span class="success"><i class="icon icon-success"></i>输入正确</span>
                        <span class="error"><i class="icon icon-error"></i>输入错误</span>
                    </p>
                </li>
                <li>
                    <label class="xlabel">邮箱<i class="req">*</i></label>
                    <input id="email" type="text" class="input-text" />
                    <p class="xinfo">
                        <span class="default">请填写常用邮箱地址，可作为自由联盟登录帐号</span>
                        <span class="warning"><i class="icon icon-warning"></i>请填写正确的邮箱地址</span>
                        <span class="success"><i class="icon icon-success"></i>输入正确</span>
                        <span class="error"><i class="icon icon-error"></i>输入错误</span>
                    </p>
                </li>
                <li>
                    <label class="xlabel">登录密码<i class="req">*</i></label>
                    <input id="password1" type="password" class="input-text" />
                    <p class="xinfo">
                        <span class="default">6-16个字符，请用英文字母加数字组合</span>
                        <span class="warning"><i class="icon icon-warning"></i>请填写6-16个密码</span>
                        <span class="success"><i class="icon icon-success"></i>输入正确</span>
                        <span class="error"><i class="icon icon-error"></i>输入不符要求</span>
                    </p>
                </li>
                <li>
                    <label class="xlabel">确认密码<i class="req">*</i></label>
                    <input id="password2" type="password" class="input-text" />
                    <p class="xinfo">
                        <span class="default">请再次输入密码</span>
                        <span class="warning"><i class="icon icon-warning"></i>请填写6-16个密码</span>
                        <span class="success"><i class="icon icon-success"></i>输入正确</span>
                        <span class="error"><i class="icon icon-error"></i>输入不符要求</span>
                    </p>
                </li>
                <li class="hide">
                    <label class="xlabel">用户昵称<i class="req">*</i></label>
                    <input id="username" type="text" class="input-text" />
                    <p class="xinfo">
                        <span class="default">请输入4-16个字符，中英文均可，一个中文为2个字符，推荐使用中文名</span>
                        <span class="warning"><i class="icon icon-warning"></i>请填写正确的邮箱地址</span>
                        <span class="success"><i class="icon icon-success"></i>输入正确</span>
                        <span class="error"><i class="icon icon-error"></i>输入错误</span>
                    </p>
                </li>
                <li>
                    <label class="xlabel">真实姓名<i class="req">*</i></label>
                    <input id="username" type="text" class="input-text" />
                    <p class="xinfo">
                        <span class="default"></span>
                        <span class="warning"><i class="icon icon-warning"></i>不能为空</span>
                        <span class="success"><i class="icon icon-success"></i>输入正确</span>
                        <span class="error"><i class="icon icon-error"></i>输入错误</span>
                    </p>
                </li>
                <li>
                    <label class="xlabel">所在机构<i class="req">*</i></label>
                    <input id="username" type="text" class="input-text input-big" />
                    <p class="xinfo">
                        <span class="default"></span>
                        <span class="warning"><i class="icon icon-warning"></i>不能为空</span>
                        <span class="success"><i class="icon icon-success"></i>输入正确</span>
                        <span class="error"><i class="icon icon-error"></i>输入错误</span>
                    </p>
                </li>
                <li>
                    <label class="xlabel">验证码<i class="req">*</i></label>
                    <input id="verifycode" type="text" class="input-text" />
                    <p class="xinfo">
                        <a href="#" class="verifycode"><img src="http://placehold.it/126x36" alt="验证码" /></a>　看不清，<a href="#" class="xlink">换一张</a>
                        <span class="default"></span>
                    </p>
                </li>
                <li>
                    <label class="xlabel">手机验证码<i class="req">*</i></label>
                    <input id="verifyphone" type="text" class="input-text" />
                    <p class="xinfo">
                        <a href="#" class="btn verifyphone">点击获取验证码</a>
                        <span class="default"></span>
                    </p>
                </li>
                <li class="pact"><label><input class="vm" type="checkbox"> 我已同意并阅读</label> <a class="agreement" href="javascript:;">《信安贷用户注册协议》</a></li>
                <li class="btnbox">
                    <a href="javascript:;" class="btn regbtn"><span>立即注册</span></a>
                </li>
                <li><textarea readonly class="xtextarea">信安贷致力于为广大网民提供专业的融资贷款搜索服务。以最人性最专业的方式为用户提供各种银行和出借机构贷款产品的搜索、比较服务。
同时信安贷引入大量的银行业务人员，让用户和业务人员直接联系对接。打造一个全方位的满足用户和银行需求的融资贷款产品直销平台。
任何与信安贷有意向签订协议或者已经达成合作协议的机构和渠道商，必须认真阅读该声明，并保持、接受和遵守该声明对自身权利和义务的约定。
1. 信安贷接受信贷机构或信贷员委托，按照信贷机构或信贷员提供的借款条件，受理借款申请人的借款申请，审核筛选，促成信贷机构或信贷员与客户之间的联系。
2. 信贷机构或信贷员身份必须真实有效，应向信安贷明确信贷机构或信贷员所提供的贷款产品（以下简称"产品"）及所接受的借款申请人的条件，并且符合信贷机构或信贷员所在机构的官方描述，如有不符，信安贷有权依据信贷机构或信贷员所在机构的官方描述进行修改。
3. 信安贷根据信贷机构或信贷员提供的申请条件，建立筛选机制，向信贷机构或信贷员推荐借款申请人。
4. 信安贷应不断完善搜索机制，提高推荐的借款申请人的准确性。
5. 信安贷向信贷机构或信贷员提供的借款申请人资料完全基于借款申请人自愿填写，信安贷不对借款申请人资料的真实性负责，亦不会参与及影响信贷机构或信贷员的审批工作。
6. 信贷机构或信贷员在收到借款人的申请资料后及时与借款申请人取得联系，确保服务质量。
7. 信贷机构或信贷员提供的信息必须是真实的，且其披露该等信息已获得完全的授权，不侵犯任何其他第三方权益。否则，产生的后果由其自行承担。 
8. 信贷机构或信贷员理解，为申请获得信安贷服务，您应向我们提供您的个人信息和贷款信息，为向您提供服务之目的，我们须向第三方透露您的个人信息和贷款信息。您特此向我们授权，我们有权使用您的个人信息、贷款信息、您申请服务时提供的任何相关信息和您在使用服务时储存在信安贷的公开及非公开内容。
9. 除本使用协议外，信贷机构和信贷员必须遵守《信安贷网站用户协议条款》的约定。</textarea></li>
            </ul>
            
            
        </div>
    </div>
</div>


<?php include("common/footer.php"); ?>
<script>
$(function(){
    function tipinfo(that,tiptype,tipinfo){
        $(that).attr("class","input-text input-"+tiptype).next("p").find("."+ tiptype).html('<i class="icon icon-'+ tiptype +'"></i>'+tipinfo).show().siblings("span").hide();
    }
    
    //验证用户名
    $("#username").focus(function(){
        tipinfo(this,"warning","提示或警告信息");
    }).blur(function(){
        if($(this).val() == ""){
            tipinfo(this,"error","用户名不能为空");
        }
        if($(this).val()){
            tipinfo($("#username"),"success","输入正确");
        }
    })
    
    //验证邮箱
    $("#email").focus(function(){
        tipinfo(this,"warning","提示信息");
    }).blur(function(){
        if($(this).val() == ""){
            tipinfo(this,"error","邮箱不能为空");
        }
    })

})
</script>
</body>
</html>
