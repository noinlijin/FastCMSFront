<?php TbfView('vk.Front.Layout.Header',array("pageName"=>"首页")); ?>

<!-- slider-->
<div id="slider" class="">
    <div class="banner">
        <ul>
            <?php $slideList=\FastCMS\Helper::GetLists(array('CatId'=>11,'Offset'=>0,'Limit'=>5)) ;
            foreach($slideList as $row) {?>
                <li class="slider-one" data-url="<?php eh($row['Url']);?>" style="background: url(<?php eh($row['SlideImage'])?>) no-repeat;background-size: cover;background-position: 50% 50%;cursor: pointer"></li>
            <?php }  ?>
        </ul>

    </div>
    <a class="unslider-arrow prev slider-left" href="javascript:;"></a>
    <a class="unslider-arrow next slider-right " href="javascript:;"></a>
</div>
<!--end slider-->


<!-- project-list-container-->
<div class=" project-list-container">
    <ul>
        <?php $slideList=\FastCMS\Helper::GetLists(array('CatId'=>22,'Offset'=>0,'Limit'=>4)) ;

            foreach($slideList as $row) {?>
                <li>
                <a href="<?php eh($row['Url']);?>"
                   style="background-image: url(<?php eh($row['Image']);?>);"
                   class="img-item"></a>
                </li>
        <?php }  ?>
    </ul>
    <div class="clearfix"></div>
</div>
<!--end project-list-container-->

<?php TbfView('vk.Front.Layout.Footer'); ?>
