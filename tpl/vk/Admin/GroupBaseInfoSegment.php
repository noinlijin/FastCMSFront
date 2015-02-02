<ul style="text-align: left">
    <?php /** @var vk\Orm\Group $Group */ ?>
    <li>名称：[<?= h($Group->Status) ?>]<?= h($Group->Name) ?></li>
    <li>时长：<?= $Group->DurationTime ?></li>
    <li>价格：<?= $Group->Price ?></li>
    <li>抢购价格：<?= $Group->Price2 ?></li>
</ul>
