<?php TbfView('vk.Front.Layout.Header',array("pageName"=>"精彩视频")); ?>

<div class="bread">
    <div class="container">
        <ul>
            <li   >
                <a href="javascrip:;">精彩视频</a>
            </li>
        </ul>
    </div>
</div>



<!-- Video-list -->
<div>
    <div class="container main" id="video-list">
        <?php  $slideList=\FastCMS\Helper::GetLists(array('CatId'=>9,'Offset'=>0,'Limit'=>5)) ;
        foreach($slideList as $row) {?>
            <!-- video-item -->
            <div class="video-item">
                <a class="video-val" href="/?n=vk.Front.Category.VideoDetailPage&Id=<?php eurlv($row['Id'])?>">
                    <img src="<?php eh($row['Thumb'])?>" style="max-width: 370px" alt=""/>
                </a>

                <p class="video-detail"><?php  eh($row['Description']);?></p>
            </div>
            <!-- End video-item -->
        <?php } ?>

        <div class="clearfix"></div>
    </div>
</div>
<!--End Video-list -->

<?php TbfView('vk.Front.Layout.FooterBg'); ?>

<?php TbfView('vk.Front.Layout.Footer'); ?>
