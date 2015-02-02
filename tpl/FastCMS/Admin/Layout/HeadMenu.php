<!--header start-->
<header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand">

        <a href="/?n=FastCMS.Admin.Document.ListPage" class="logo" style="color: #fff;text-transform: none;">
            <img src="/public/image/logo-sm.png" alt="">
            FastCms
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    <!--logo end-->

    <div class="horizontal-menu navbar-collapse collapse full-width">
        <ul class="nav navbar-nav">
            <?php foreach(UeeAdmin::getAdminMenu() as $menu): ?>
                <li <?php if ($m==$menu['Name']): ?>class="active" <?php endif; ?> >
                    <a href="<?php eh($menu['Url']);?>"><?php eh($menu['ShowName']);?></a></li>
            <?php endforeach; ?>
        </ul>

    </div>


    <div class="top-nav clearfix">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <!--
                <input type="text" class="form-control search" placeholder=" Search">
                -->
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <!--
                    <i class="fa fa-user" style="margin: 8px;"></i>
                    <img alt="" src="/public/image/avatar-1.jpg">
                    -->
                    <canvas id="headimg" width="33" data-id="<?php eh("34113124".UeeAdmin::getAdminId());?>" height="33"></canvas>
                    <span class="username"><?php eh(UeeAdmin::getAdminName());?></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <li><a target="_blank" href="<?php eh(TbfConfig::$FrontRootUrl);?>"><i class="fa fa-home"></i> 网站首页</a></li>
                    <li><a href="/?n=FastCMS.Admin.Login.EditCurrentPasswordPage"><i class="fa fa-cog"></i> 修改密码</a></li>
                    <li><a href="/?n=FastCMS.Admin.Login.LogoutAction"><i class="fa fa-sign-out"></i>退出</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->
            <li>
                <div class="toggle-right-box">
                    <div class="fa fa-bars"></div>
                </div>
            </li>
        </ul>
        <!--search & user info end-->
    </div>
</header>
<!--header end-->