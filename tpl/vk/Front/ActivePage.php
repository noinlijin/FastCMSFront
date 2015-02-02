<?php
/** @var \vk\Orm\Reservation[] $reservationList */
?>
<?php TbfView('vk.Front.Layout.Header',array("pageName"=>"")); ?>

<div class="bread ">
    <div class="container">
        <ul>
                <li>
                    <a href="javascript:;" class="lateral-nav-item" data-id="page-1">
                       <?php eh($Status);?>
                    </a>
                </li>
        </ul>
    </div>
</div>


<?php if($Status == "预约课程"){ ?>
<!-- Introduce -->
    <div class="main" id="ActiceList">

    <?php foreach($reservationList as $row) {
        if($row->Status != $Status){
            continue;
        }
        ?>
        <!-- item-active -->
        <div class="item-active">
            <table style="margin: 0 auto;">
                <tr>
                    <td>
                        <img src="<?php eh($row->ThumbWechat);?>" alt="" style="max-width: 140px;max-height: 140px"/>
                    </td>
                    <td>
                        <?php eh($row->Name);?> <br/><br/>
                        <p class="profile">
                            日期:  <?php eh($row->GetStartTime());?> - <?php eh($row->GetEndTime());?>
                        </p>
                        <p class="profile">
                            地址: <?php eh($row->Location);?>
                        </p>
                    </td>
                    <td>
                        <a href="javascript:;" class="detail-btn">
                            <img src="/public/image/detail-btn.png" alt=""/>
                        </a>
                    </td>
                </tr>

            </table>
            <div class="detail" style="display: none;">
                <div class="container">
                    <div class="article">
                        <?php echo($row->Description);?>
                    </div>
                    <br/>
                    <div style="text-align: center">
                        <a href="/?n=vk.Front.Category.ActiveInputPage&Id=<?php eurlv($row->Id);?>" >
                            <img src="/public/image/reserve-btn.png " alt=""/>
                        </a>
                    </div>
                    <div class="space20"></div>
                </div>


            </div>

        </div>
        <!-- END item-active -->
        <div class="space20"></div>
    <?php }  ?>

</div>
<!--End Introduce-->

<?php }else { ?>

    <!--course-list-->
    <div class="main" id="course-list">

        <?php foreach($reservationList as $row) {
            if($row->Status != $Status){
                continue;
            }?>

            <!--course-item-->
            <div class="course-item" id="page-<?php eh($row->CatId)?>-<?php eh($row->CatId)?>">

                <center>
                    <?php if(!empty($row->ThumbFront)) {?>
                        <img style="max-width: 100%;margin: 10px 0;" src="<?php eh($row->ThumbFront);?>" alt="" />
                    <?php } ?>
                </center>

                <div class="container">
                    <div class="article">
                        <?php echo($row->Description);?>
                    </div>
                </div>
                <div class="space20"></div>
                <div style="text-align: center">
                    <a href="/?n=vk.Front.Category.ActiveInputPage&Id=<?php eurlv($row->Id);?>" >
                        <img src="/public/image/reserve-btn.png " alt=""/>
                    </a>
                </div>
                <div class="space20"></div>

            </div>
            <!--end course-item-->
        <?php } ?>

    </div>
    <!--end course-list-->
<?php }?>


<?php TbfView('vk.Front.Layout.FooterBg'); ?>


<?php TbfView('vk.Front.Layout.Footer'); ?>
