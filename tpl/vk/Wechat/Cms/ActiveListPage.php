<?php /*预约课程和预约活动*/
/** @var \vk\Orm\Reservation[] $reservationList */
?>
<?php TbfView('vk.Wechat.Layout.Header',array("title"=>$Status,'backBtnUrl'=>"/?n=vk.Wechat.IndexPage")); ?>
<!-- Buyed Course -->
<div id="buyed-course" class="main">
    <ul>
        <?php
        foreach($reservationList as $row) {
            if($row->Status != $Status){
                continue;
            }
        ?>
            <li>
                <?php if(!empty($row->ThumbWechat)) {?>
                    <img width="100%"  src="<?php eh($row->ThumbWechat);?>" alt=""/>
                <?php } ?>
                <div class="lesson-name">
                    <p><?php eh($row->Name); ?></p>
                </div>
                <div >
                    <p class="profile">
                        日期:  <?php eh($row->GetStartTime());?> - <?php eh($row->GetEndTime());?>
                    </p>
                    <p class="profile">
                        地址: <?php eh($row->Location);?>
                    </p>
                    <div class="article">
                        <?php echo($row->Description);?>
                    </div>
                </div>
                <div >
                    <?php if(empty($Patriarch)){ ?>
                    <div style="text-align: center">
                        <a href="/?n=vk.Wechat.ActiveOnePage&Id=<?php eurlv($row->Id);?>" >
                            <img src="/public/image/reserve-btn.png " alt=""/>
                        </a>
                    </div>
                    <?php }else{?>
                        <form data-action="/?n=vk.Front.Reservation.AddByMemberApi" class="form" method="post">
                            <input type="hidden" name="WechatId" value="<?php eh($Patriarch->WechatId)?>"/>
                            <input type="hidden" name="ReservationId" value="<?php eh($row->Id);?>"/>
                            <input type="submit" value="预约" class="btn btn-default"/>
                        </form>
                    <?php }?>
                </div>
            </li>
        <?php } ?>

    </ul>
</div>
<!-- End Buyed Course -->

<?php TbfView('vk.Wechat.Layout.Footer'); ?>
