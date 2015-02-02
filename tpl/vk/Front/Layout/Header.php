<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>万科教育：我们+</title>
    <link rel="stylesheet" href="/public/plugin/fancybox/jquery.fancybox.css"  />
    <link rel="stylesheet" href="/public/plugin/font-awesome/css/font-awesome.min.css"  />
    <link rel="stylesheet" href="/public/vanke/front/css/index.css"/>
</head>
<body>
<!--[if lt IE 7]>
<div id="ie-tip" style="text-align:center;line-height: 60px;">
    你的浏览器版本太低啦，快用更快更安全的浏览器吧，
    <a href="http://browsehappy.com/?locale=zh_CN" style="color:red">点此升级~</a>
</div>
<![endif]-->
<div id="header">
    <div class="container nav-container">
        <a href="/" class="logo"><img src="/public/image/logo.png" style="max-width: 160px" alt="我们+"/></a>
        <ul class="nav">

            <li  class="<?php if($pageName == "学校介绍"){ eh("active");}?>" >
                <a href="/?n=vk.Front.Category.Page&CatId=8">学校介绍 <br/><span class="en">introduce</span></a>
            </li>
            <li  class="<?php if($pageName == "课程介绍"){ eh("active");}?>" >
                <a href="/?n=vk.Front.Course.ListPage">课程介绍 <br/><span class="en">course</span></a>
            </li>
<!--
            <li  class="<?php if($pageName == "师资介绍"){ eh("active");}?>" >
                <a href="/?n=vk.Front.Category.Page&CatId=21">师资介绍 <br/><span class="en">teachers'</span></a>
            </li>
-->
            <li  class="<?php if($pageName == "精彩视频"){ eh("active");}?>" >
                <a href="/?n=vk.Front.Category.VideoListPage">精彩视频 <br/><span class="en">video</span></a>
            </li>

            <li  class="<?php if($pageName == "预约课程"){ eh("active");}?>" >
                <a href="/?n=vk.Front.Category.ActivePage&CatId=25&Status=预约课程">预约课程 <br/><span class="en">oppoiontment</span></a>
                <hr/>
            </li>

            <li  class="<?php if($pageName == "活动预告"){ eh("active");}?>" >
                <a href="/?n=vk.Front.Category.ActivePage&CatId=25&Status=预约活动">预约活动 <br/><span class="en">activity</span></a>
            </li>


        </ul>
        <div class="clearfix"></div>
    </div>
</div>

