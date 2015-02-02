<?php /*预约的课程*/
/** @var \vk\Orm\Patriarch $patriarch */
?>
<?php TbfView('vk.Wechat.Layout.Header',array("title"=>"预约的课程",
    "backBtnUrl"=>"/?n=vk.Wechat.MyAccountPage&WechatId=".urlv($patriarch->WechatId))); ?>

<!-- Buyed Course -->
<div id="buyed-course" class="main">

    <ul>
        <?php foreach($patriarch->GetCurrentStudent()->GetReservationRefList() as $reservation) {?>
            <li>
                <?php if(!empty($reservation->GetReservation()->ThumbWechat)) {?>
                    <img width="100%"  src="<?php eh($reservation->GetReservation()->ThumbWechat);?>" alt=""/>
                <?php } ?>
                <div class="lesson-name">
                    <p><?php eh($reservation->GetReservation()->Name); ?></p>
                </div>
                <div >
                    <p class="profile">
                        主讲人: <?php eh($reservation->GetReservation()->TeacherName);?>
                    </p>
                    <p class="profile">
                        日期:  <?php eh($reservation->GetReservation()->GetStartTime());?> - <?php eh($reservation->GetReservation()->GetEndTime());?>
                    </p>
                    <p class="profile">
                        地址: <?php eh($reservation->GetReservation()->Location);?>
                    </p>
                    <p class="profile">

                        参与状态: <?php eh($reservation->GetReservation()->Status);?>
                    </p>
                    <div class="article">
                        <?php echo($reservation->GetReservation()->Description);?>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
<!-- End Buyed Course -->

<?php TbfView('vk.Wechat.Layout.Footer'); ?>
