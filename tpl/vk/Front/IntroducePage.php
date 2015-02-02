<?php
/** @var \vk\Orm\Reservation[] $reservationList */
?>
<?php TbfView('vk.Front.Layout.Header',array("pageName"=>"学校介绍")); ?>

<div class="bread">
    <div class="container">
        <ul>
            <?php foreach($data as $d){ ?>
            <li>
                <a href="javascript:;" class="lateral-nav-item" data-id="page-<?php eh($d['Id'])?>">
                    <?php eh($d['Title'])?>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>

<div class="sing-page-list main">
    <?php foreach($data as $d){ ?>
        <center id="page-<?php eh($d['Id'])?>">
            <img src="<?php eh($d['Thumb']);?>"  alt="" style="margin: 10px 0;width: 100%"/>
        </center>

        <!-- Introduce -->
        <div class="container introduce">

            <div class="article" >
                <?php  echo($d['Content']); ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--End Introduce-->

    <?php } ?>
</div>

<?php TbfView('vk.Front.Layout.FooterBg'); ?>
<?php TbfView('vk.Front.Layout.Footer'); ?>
