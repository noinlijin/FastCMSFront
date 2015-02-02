<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">当前栏目:<?php eh(FastCMS\Admin\Document::$currentCat['Name']);?>
            /
            <?php /** @var \vk\Orm\Group $Group */ ?>
            <?= $Group->Name ?>
            中的学生
        </h3>
    </div>
</div>

<ul class="nav nav-tabs">
    <?php foreach($StudentStatusList as $thisStatus): ?>
        <li <?php if ($CurrentStudentStatus==$thisStatus): ?>class="active"<?php endif; ?>>
            <a href="/?n=vk.Admin.Group.PurchaseOrderListPage&GroupId=<?php eh($Group->Id);?>&StudentStatus=<?php eh($thisStatus);?>">
                <?php eh($thisStatus);?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<div class="contain-list">
    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>购买时间</th>
            <th>学生信息</th>
            <th>订单信息</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php /** @var \vk\Orm\PurchaseOrder[] $PurchaseOrderList */
        foreach($PurchaseOrderList as $p): ?>
            <tr>
                <td><?= $p->PayTime ?></td>
                <td>
                    <?= TbfTemplate::Render('vk.Admin.StudentInfoSegment',array('Student'=> \vk\Orm\Student::GetOneById($p->StudentId))) ?>
                </td>
                <td>
                    <?= TbfTemplate::Render('vk.Admin.PurchaseOrderInfoSegment',array('PurchaseOrder'=>$p)) ?>
                </td>
                <td>
                    <a class="btn button-xs btn-default url-get" href="javascript:;" data-url="/?n=vk.Admin.PurchaseOrder.RefundPage&PurchaseOrderId=<?= $p->Id ?>" >退款</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
