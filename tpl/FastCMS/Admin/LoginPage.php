<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>FastCms</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <link rel="stylesheet" href="/public/plugin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/plugin/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/public/fastcms/css/plugins-3.0.css">
    <link rel="stylesheet" href="/public/fastcms/css/main-3.0.css">
    <link rel="stylesheet" href="/public/fastcms/css/themes-3.0.css">

</head>
<body>
<img src="/public/image/login_full_bg.jpg" alt="Login Full Background" class="full-bg animation-pulseSlow">
<div id="login-container" class="animation-fadeIn">
    <div class="login-title text-center">
        <h1><i class="fa fa-flash"></i> <strong>FastCMS</strong><br><small> <strong>登录</strong> </small></h1>
    </div>
    <div class="block push-bit">
        <form  id="login-form" role="form" action=""  data-action="/?n=FastCMS.Admin.Login.LoginApi" method="post"
              class="form-horizontal form-bordered form-control-borderless ajax-form">
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" id="login-email" name="Username" class="form-control input-lg" placeholder="帐号">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                        <input type="password" id="login-password" name="Password" class="form-control input-lg" placeholder="密码">
                    </div>
                </div>
            </div>

            <?php if (!empty($hasCaptcha)):?>
                <div class="form-group">
                    <div class="col-xs-6">
                        <div class="input-group">
                            <input type="text" name="CaptchaCode" class="form-control input-lg" placeholder="验证码" required="">
                        </div>
                    </div>
                    <div class="col-xs-6" style="padding: 10px 0">
                        <a href="javascript:;" class="login-captcha-reload" >
                            <img id="login-captcha-img" data-url="/?n=FastCMS.Admin.Login.CaptchaImage&" alt="">
                        </a>
                        <a href="javascript:;" class="login-captcha-reload">看不清?</a>
                    </div>
                </div>
            <?php endif; ?>

            <div class="form-group form-actions">
                <div class="col-xs-4">
                    <label class="switch switch-primary" data-toggle="tooltip" title="记住密码 ?">
                        <input type="checkbox" id="login-remember-me" name="login-remember-me" checked>
                        <span></span>
                    </label>
                </div>
                <div class="col-xs-8 text-right">
                    <button type="submit" class="btn btn-bg btn-primary"><i class="fa fa-angle-right"></i>  登录</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 text-center">
                    <a href="/" id="link-reminder-login"><small>@2015 我们+</small></a>  -
                    <a href="http://www.epptime.com" id="link-register-login"><small> 卓拙科技</small></a>
                </div>
            </div>
        </form>
        
    </div>
</div>


<?php TbfView('FastCMS.Admin.Layout.Js'); ?>

</body>
</html>
