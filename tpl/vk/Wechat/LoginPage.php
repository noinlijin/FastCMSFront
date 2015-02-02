<?php /*登录页面*/?>
<?php TbfView('vk.Wechat.Layout.Header',array("title"=>"登录")); ?>

<!-- login -->
<div id="login" class="main">
    <p class="text">登录您的账户，绑定宝贝信息，即可随时关注宝贝动态</p>
    <form class="form" data-action="/?n=vk.Wechat.Login.LoginAction" method="post" >
        <div class="form-group">
            <label for="exampleInputEmail1">身份证号</label>
            <input type="text" class="form-control" name="IdentityCardNumber" placeholder="身份证">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">密码</label>
            <input type="password" class="form-control" name="Password" placeholder="密码">
        </div>
        <div class="form-group">
            <input type="hidden" name="WechatId" value="<?php eh($WechatId);?>"/>
            <button type="submit" class="btn btn-warning ">登录</button>
        </div>
    </form>
</div>
<!-- End login -->

<?php TbfView('vk.Wechat.Layout.Footer'); ?>
