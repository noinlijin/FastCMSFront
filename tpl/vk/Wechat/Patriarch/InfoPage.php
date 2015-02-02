<?php /*家长信息*/?>
<?php
/** @var vk\Orm\Patriarch $Partiarch */
?>
<?php TbfView('vk.Wechat.Layout.Header',array("title"=>"个人信息","backBtnUrl"=>"/?n=vk.Wechat.MyAccountPage&WechatId=".$WechatId)); ?>

<!-- patruarch-info -->
<div id="patruarch-info" >
    <p><?php eh($Partiarch->Name);?></p>
    <p><?php eh($Partiarch->PhoneNumber);?></p>
    <p><?php eh($Partiarch->Address)?></p>

    <!--
    <div class="integration-list">
        <table width="100%">
            <tr>
                <td>购买课程积分</td>
                <td>1800</td>
            </tr>
            <tr>
                <td>参与活动积分</td>
                <td>200</td>
            </tr>
            <tr>
                <td>表现积分</td>
                <td>30</td>
            </tr>
            <tr>
                <td>推荐积分</td>
                <td>1000</td>
            </tr>
        </table>
    </div>

    <p>总积分：3030</p>
            -->

</div>

<!-- End patruarch-info -->


<?php TbfView('vk.Wechat.Layout.Footer'); ?>
