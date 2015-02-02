<?php /*购买课程*/?>
<?php TbfView('vk.Wechat.Layout.Header',array("title"=>"课程列表",'backBtnUrl'=>"/?n=vk.Wechat.IndexPage")); ?>

<!-- Buyed Course -->
<div id="buyed-course" class="main">
    <ul>
        <?php  $slideList=\FastCMS\Helper::GetLists(array('CatId'=>30,'Offset'=>0,'Limit'=>1000)) ;
        foreach($slideList as $row) {?>
            <li>
                <?php if(!empty($row['ThumbWechat'])) {?>
                    <img width="100%"  src="<?php eh($row['ThumbWechat']);?>" alt=""/>
                <?php } ?>
                <div class="lesson-name">
                    <p><?php eh($row['Name']); ?></p>
                </div>
                <div class="article">
                    <?php echo($row['Description']);?>
                </div>
            </li>
        <?php } ?>

    </ul>
</div>
<!-- End Buyed Course -->

<?php TbfView('vk.Wechat.Layout.Footer'); ?>
