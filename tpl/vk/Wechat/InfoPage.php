<?php
 /*学生信息*/
/** @var vk\Orm\Student $Student */
?>
<?php TbfView('vk.Wechat.Layout.Header',array("title"=>"宝贝信息",
    "backBtnUrl"=>"/?n=vk.Wechat.MyAccountPage&WechatId=".urlv($WechatId))); ?>

<!-- student-info -->
<div id="student-info" >
    <p><?php eh($Student->Name);?></p>
    <p><?php eh($Student->Age);?>岁&#12288;<?php eh($Student->Gender);?></p>

    <div class="line"></div>
    <p>宝贝绑定人</p>
    <p>
        <?php foreach($Student->GetPatriarchList() as $patriarch){
            eh($patriarch['Name']);
            echo("&#12288;");
        }?>
    </p>

    <br/>
    <p>
        <a href="/?n=vk.Wechat.Student.ChoosePage&WechatId=<?php eurlv($WechatId);?>" class="btn btn-warning">切换宝贝</a>
    </p>
</div>

<!-- End patruarch-info -->


<?php TbfView('vk.Wechat.Layout.Footer'); ?>
