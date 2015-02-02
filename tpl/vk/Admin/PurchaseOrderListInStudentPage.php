<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">当前栏目:<?php eh(FastCMS\Admin\Document::$currentCat['Name']);?>
            /
            <?php /** @var \vk\Orm\Student $Student */ ?>
            <?= $Student->Name ?>
            购买的课程
        </h3>
    </div>
</div>

<div class="contain-list">
    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>订单号</th>
            <th>课程基本信息</th>
            <th>上课时间段</th>
            <th>购买信息</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php /** @var \vk\Orm\PurchaseOrder[] $PurchaseOrderList */
        foreach($PurchaseOrderList as $p): ?>
            <?php
            $Group = \vk\Orm\Group::GetOneById($p->GroupId);
            ?>
            <tr>
                <td><?= $p->Id ?></td>
                <td>
                    <?= TbfTemplate::Render('vk.Admin.GroupBaseInfoSegment',array('Group'=>$Group)) ?>
                </td>
                <td>
                    <?= TbfTemplate::Render('vk.Admin.GroupLessonInfoSegment',array('LessonList'=>$Group->GetLessonList())) ?>
                </td>
                <td>
                    <?= TbfTemplate::Render('vk.Admin.PurchaseOrderInfoSegment',array('PurchaseOrder'=>$p)) ?>
                </td>
                <td><?= $p->GetDynamicStatus() ?></td>
                <td>
                    <a class="btn button-xs btn-default url-get" href="javascript:;" data-url="/?n=vk.Admin.PurchaseOrder.RefundPage&PurchaseOrderId=<?= $p->Id ?>" >退款</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
