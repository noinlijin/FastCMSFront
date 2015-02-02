<ul style="text-align: left">
    <?php /** @var vk\Orm\Reservation $Reservation */ ?>
    <li>成功预约：<?= $Reservation->GetRefNumberByStatus([\vk\Enum\ReservationRefStatus::Success,\vk\Enum\ReservationRefStatus::Attend]) ?>人</li>
    <li>等待审核：<?= $Reservation->GetRefNumberByStatus(\vk\Enum\ReservationRefStatus::Pending) ?>人</li>
    <li>已被拒绝：<?= $Reservation->GetRefNumberByStatus(\vk\Enum\ReservationRefStatus::Refuse) ?>人</li>
    <li>已签到：<?= $Reservation->GetRefNumberByStatus(\vk\Enum\ReservationRefStatus::Attend) ?>人</li>
</ul>
