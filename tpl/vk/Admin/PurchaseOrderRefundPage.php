<form class="form-horizontal ajax-form" autocomplete="off" role="form" action="/?n=vk.Admin.PurchaseOrder.RefundApi" method="post">

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">
                当前栏目: <?php eh(\FastCMS\Admin\Document::$currentCat['Name']);?>
                <?php /** @var \vk\Orm\Student $Student */ ?>
                <?php /** @var \vk\Orm\Group $Group */ ?>
                <?php /** @var \vk\Orm\PurchaseOrder $PurchaseOrder */ ?>
                /
                「<?= $Student->Name ?>」
                从
                <?= $Group->Name ?>
                退款
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
                <label class="col-sm-2 control-label">班级基本信息</label>
                <div class="col-sm-8">
                    <?= TbfTemplate::Render('vk.Admin.GroupBaseInfoSegment',array('Group'=>$Group)) ?>
                    <input type="hidden" name="GroupId" value="<?= $Group->Id ?>"/>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="col-sm-2 control-label">订单信息</label>
                <div class="col-sm-8">
                    <?= TbfTemplate::Render('vk.Admin.PurchaseOrderInfoSegment',array('PurchaseOrder'=>$PurchaseOrder)) ?>
                    <input type="hidden" name="PurchaseOrderId" value="<?= $PurchaseOrder->Id ?>"/>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="col-sm-2 control-label">退款金额<span style="color:red">*</span></label>
                <div class="col-sm-4 input-group " style="padding-left:15px">
                    <input type="text" class="form-control" name="RefundMoney" value="">
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
