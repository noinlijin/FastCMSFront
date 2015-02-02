<?php TbfView('vk.Front.Layout.Header',array("pageName"=>"课程介绍")); ?>


<div class="bread">
    <div class="container">

        <ul>
            <?php  $slideList=\FastCMS\Helper::GetLists(array('CatId'=>30,'Offset'=>0,'Limit'=>1000)) ;
            foreach($slideList as $row) {?>
                <li>
                    <a href="javascript:;" class="lateral-nav-item"
                       data-id="page-<?php eh($row['CatId'])?>-<?php eh($row['Id'])?>">
                        <?php eh($row['Name']); ?>
                    </a>
                </li>
            <?php } ?>

        </ul>
    </div>
</div>


<!--course-list-->
<div class="main" id="course-list">

    <?php  $slideList=\FastCMS\Helper::GetLists(array('CatId'=>30,'Offset'=>0,'Limit'=>1000)) ;
    foreach($slideList as $row) {?>

        <!--course-item-->
        <div class="course-item" id="page-<?php eh($row['CatId'])?>-<?php eh($row['Id'])?>">
            <div class="container">
                <div class="course-logo">
                    <?php if(!empty($row['ThumbFront'])) {?>
                        <img style="max-width: 476px" src="<?php eh($row['ThumbFront']);?>" alt="" />
                    <?php } ?>
                </div>

            </div>

            <center>
                <img src="<?php eh($row['GroupLogo']);?>"  alt="" style="max-width: 100%;margin: 10px 0;"/>
            </center>

            <div class="container">
                <div class="article">
                    <?php echo($row['Description']);?>
                </div>
            </div>

        </div>
        <!--end course-item-->
    <?php } ?>

</div>
<!--end course-list-->

<?php TbfView('vk.Front.Layout.FooterBg'); ?>

<?php TbfView('vk.Front.Layout.Footer'); ?>
