<ul style="text-align: left">
    <?php /** @var vk\Orm\PurchaseOrder $PurchaseOrder */ ?>
    <li>开始上课时间：<?= $PurchaseOrder->StudyStartTime ?></li>
    <li>结束课业时间：<?= $PurchaseOrder->StudyEndTime ?></li>
    <li>支付金额：<?= $PurchaseOrder->Money ?></li>
    <?php if ($PurchaseOrder->Status === '已退款'): ?>
        <li>退款时间：<?= $PurchaseOrder->RefundTime ?></li>
        <li>退款金额：<?= $PurchaseOrder->RefundMoney ?></li>
    <?php endif; ?>
</ul>
