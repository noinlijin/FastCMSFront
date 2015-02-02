<form class="form-horizontal ajax-form" autocomplete="off" role="form" action="/?n=vk.Admin.PurchaseOrder.AddApi" method="post">

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">
                当前栏目: <?php eh(\FastCMS\Admin\Document::$currentCat['Name']);?>
                <?php /** @var \vk\Orm\Student $Student */ ?>
                /
                为「<?= $Student->Name ?>」购买课程
            </h3>
        </div>

        <div class="panel-body">
            <div class="form-group has-feedback">
                <label class="col-sm-2 control-label">学生基本信息</label>
                <div class="col-sm-8">
                    <?= TbfTemplate::Render('vk.Admin.StudentInfoSegment',array('Student'=>$Student)) ?>
                    <input type="hidden" name="StudentId" value="<?= $Student->Id ?>"/>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="col-sm-2 control-label">选择班级</label>
                <div class="col-sm-8">
                    <select id="GroupListSelect" name="GroupId" class="form-control">
                        <?php /** @var \vk\Orm\Group $group */ ?>
                        <?php foreach($GroupList as $group ): ?>
                            <option value="<?= $group->Id ?>" data-select="<?php echo \vk\Enum\GroupType::GetShowName($group->Type)?>"
                                data-starttime="<?php echo $group->GetStartTime();?>" data-endtime="<?php echo $group->GetEndTime()?>">
                                <?= $group->Status ?>
                                -
                                <?= \vk\Enum\GroupType::GetShowName($group->Type) ?>
                                -
                                <?= $group->Name ?>
                                -
                                价格<?= $group->Price ?>/抢购价<?= $group->Price2 ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group has-feedback class-time">
                <label class="col-sm-2 control-label">课程开始时间<span style="color:red">*</span></label>
                <div class="col-sm-4 input-group " style="padding-left:15px">
                    <input id="StudyStartTime" type="text" class="form-control date-time-picker-input" name="StudyStartTime">
                </div>
            </div>
            <div class="form-group has-feedback class-time">
                <label class="col-sm-2 control-label">课程结束时间<span style="color:red">*</span></label>
                <div class="col-sm-4 input-group " style="padding-left:15px">
                    <input id="StudyEndTime" type="text" class="form-control date-time-picker-input" name="StudyEndTime">
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="col-sm-2 control-label">实际付费<span style="color:red">*</span></label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="Money" value="">
                </div>
            </div>
        </div>

        <div class="panel-footer">
            <center>
                <button type="submit" class="btn btn-primary btn-lg" style="width: 300px;">
                    <span class="fa fa-check"></span>
                    提交
                </button>
            </center>
        </div>

    </div>
</form>