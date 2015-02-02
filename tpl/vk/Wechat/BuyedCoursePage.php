<?php /*购买的课程*/
/** @var \vk\Orm\Patriarch $patriarch */
?>
<?php TbfView('vk.Wechat.Layout.Header',array("title"=>"已经购买的课程",
    "backBtnUrl"=>"/?n=vk.Wechat.MyAccountPage&WechatId=".urlv($patriarch->WechatId))); ?>

<!-- Buyed Course -->
<div id="buyed-course" class="main">
    <ul>

        <?php foreach($patriarch->GetCurrentStudent()->GetPurchaseOrderList() as $order) {?>
            <li>
                <?php if(!empty($order->GetGroup()->ThumbWechat)) {?>
                    <img width="100%"  src="<?php eh($order->GetGroup()->ThumbWechat);?>" alt=""/>
                <?php } ?>
                <div class="lesson-name">
                    <p><?php eh($order->GetGroup()->Name); ?></p>
                </div>
                <div class="article">
                    <ul>
                        <li>
                            <p>
                                订单号：<?php eh($order->Id); ?>
                            </p>
                            <p>
                                购买价格: ￥<?php eh($order->Money); ?>
                            </p>
                            <p>上课时间: <?php eh(TbfTime::MysqlDateTimeToDate($order->GetGroup()->GetStartTime()));?> 到
                                <?php eh(TbfTime::MysqlDateTimeToDate($order->GetGroup()->GetEndTime()));?></p>
                            <p>支付时间：<?php eh($order->PayTime); ?></p>
                            <p>订单状态: <?php eh($order->Status);?></p>
                        </li>
                        <li>

                        </li>
                    </ul>
                </div>
            </li>
        <?php } ?>

    </ul>
</div>
<!-- End Buyed Course -->

<?php TbfView('vk.Wechat.Layout.Footer'); ?>
