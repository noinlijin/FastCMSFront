<?php /*购买课程*/?>
<?php TbfView('vk.Wechat.Layout.Header',array("title"=>"教师信息",'backBtnUrl'=>"/?n=vk.Wechat.IndexPage")); ?>

<!-- Buyed Course -->
<div id="buyed-course" class="main">
    <ul>
        <?php foreach($teacherList as $teacher){ ?>
        <li>
            <?php  if(!empty($teacher['Avatar'])) {?>
                <img src="<?php eh($teacher['Avatar']);?>" width="100%"/>
            <?php } ?>

            <div class="lesson-name">
                <p><?php eh($teacher['Name']);?></p>
            </div>
            <div align="left">
                <?php echo($teacher['Profile']);?>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>
<!-- End Buyed Course -->

<?php TbfView('vk.Wechat.Layout.Footer'); ?>
