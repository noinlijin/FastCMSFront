<?php /*我的账户*/?>
<?php TbfView('vk.Wechat.Layout.Header',array("title"=>"我的账户")); ?>

<!-- My-Account  -->
<div class="main"  id="my-account-list">
    <ul>
        <li>
            <a href="/?n=vk.Wechat.Patriarch.InfoPage&WechatId=<?php eurlv($WechatId);?>">个人信息</a>
        </li>
        <li>
            <a href="/?n=vk.Wechat.Student.BuyedCoursePage&WechatId=<?php eurlv($WechatId);?>">购买的课程</a>
        </li>
        <li>
            <a href="/?n=vk.Wechat.Student.InfoPage&WechatId=<?php eurlv($WechatId);?>">宝贝信息</a>
        </li>

        <li>
            <a href="/?n=vk.Wechat.Student.ActivedCoursePage&WechatId=<?php eurlv($WechatId);?>">预约的课程</a>
        </li>

    </ul>

</div>
<!-- End  My-Account -->

<?php TbfView('vk.Wechat.Layout.Footer'); ?>
