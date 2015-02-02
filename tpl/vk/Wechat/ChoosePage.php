<?php /*切换学生信息页面，供家长查看一个学生列表*/?>
<?php
/** @var vk\Orm\Patriarch $Partiarch */
?>
<?php TbfView('vk.Wechat.Layout.Header',array("title"=>"选择宝贝",
    "backBtnUrl"=>"/?n=vk.Wechat.Student.InfoPage&WechatId=".urlv($WechatId))); ?>

<!-- login -->
<div id="choose-student" class="main">
    <p class="text">选择孩子</p>
    <form class="form" data-action="/?n=vk.Wechat.Student.ChooseAction">
        <?php foreach($Partiarch->GetStudentList() as $student){ ?>
        <div class="radio">
            <label>
                <input type="radio" name="StudentId"  value="<?php eh($student["Id"]);?>"
                    <?php if($student['Id'] == $Partiarch->CurrentStudentId){eh("checked");}?>/>
                <?php eh($student["Name"]);?>
            </label>
        </div>
        <?php } ?>

        <div class="form-group">
            <input type="hidden" name="WechatId" value="<?php eh($WechatId);?>"/>
        </div>
        <button type="submit" class="btn btn-warning ">确定</button>

    </form>
</div>
<!-- End login -->

<?php TbfView('vk.Wechat.Layout.Footer'); ?>
