<ul style="text-align: left">
    <?php /** @var vk\Orm\Reservation $Reservation */ ?>
    <li>名称：<?= $Reservation->Name ?></li>
    <li>主题：<?= $Reservation->Subject ?></li>
    <li>主讲人/组织者/教师：<?= $Reservation->TeacherName ?></li>
    <li>地点：<?= $Reservation->Location ?></li>
    <li>开始时间：<?= $Reservation->GetStartTime() ?></li>
    <li>结束时间：<?= $Reservation->GetEndTime() ?></li>
    <li>人数上限：<?= $Reservation->StudentNumberLimit ?></li>
</ul>
