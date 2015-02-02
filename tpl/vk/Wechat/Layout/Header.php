<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>我们+ </title>
    <link rel="stylesheet" href="/public/plugin/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/public/vanke/wechat/css/wechat.css"/>
</head>
<body>
<!-- Header -->
<div id="header">
    <table>
        <tr>
            <td width="63px">
                <?php if(!empty($backBtnUrl)): ?>
                <a class="btn btn-link" href="<?php echo($backBtnUrl);?>"><返回</a>
                <?php endif; ?>
            </td>
            <td style="text-align: center;color: #fff"><?php eh($title);?></td>
            <td width="63px"> </td>
        </tr>
    </table>

</div>
<!-- End Header -->