<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">当前栏目:<?php eh(FastCMS\Admin\Document::$currentCat['Name']);?>
            /
            <?php /** @var \vk\Orm\Student $Student */ ?>
            <?= $Student->Name ?>
            预约情况
        </h3>
    </div>
</div>

<div class="contain-list">
    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>预约时间</th>
            <th>基本信息</th>
            <th>时间</th>
            <th>主讲人/组织者/教师</th>
            <th>人数限制</th>
            <th>状态</th>
        </tr>
        </thead>
        <tbody>
        <?php /** @var \vk\Orm\ReservationRef[] $ReservationRefList */
        foreach($ReservationRefList as $r): ?>
            <?php $reservation = $r->GetReservation(); ?>
            <tr>
                <td><?= $r->CreateTime ?></td>
                <td>
                    <ul>
                        <li>主题：<?= $reservation->Subject ?></li>
                        <li>地点：<?= $reservation->Location ?></li>
                    </ul>
                </td>
                <td><?= $reservation->GetStartTime() ?> - <?= $reservation->GetEndTime() ?></td>
                <td><?= $reservation->TeacherName ?></td>
                <td><?= $reservation->StudentNumberLimit ?></td>
                <td>
                    <?php if ($r->Status===\vk\Enum\ReservationRefStatus::Attend){ ?>
                        已参与
                    <?php } else { ?>
                        未参与
                    <?php } ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
