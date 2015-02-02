<?php /*学生位置*/
/** @var \vk\Orm\LocationLog[] $LocationLogList */
?>
<?php TbfView('vk.Wechat.Layout.Header',array("title"=>"宝贝在哪儿")); ?>

<!-- location-list -->
<div class="main" id="location-list">
    <ul class="where-baby">
        <?php foreach($LocationLogList as $location){ ?>
        <li>
            <p class="time"><?php eh($location->Time);?></p>
            <p>
                <?php if ( $location->Type ===  \vk\Enum\LocationType::ArriveSchool): ?>
                    我们已经接到了您的孩子
                <?php endif;?>
                <?php if ( $location->Type ===  \vk\Enum\LocationType::LeaveSchool): ?>
                    您的孩子由家长「<?= $location->GetPatriarch()->Name ?>」接走
                <?php endif;?>
                <?php if ( $location->Type ===  \vk\Enum\LocationType::Other): ?>
                    <?= h($location->OtherNote) ?>
                <?php endif;?>
            </p>
            <td>接送管理员：<?php $picker=$location->GetPicker();?><?= $picker->Name ?>&#12288;<a href="tel:<?= $picker->PhoneNumber ?>"><?= $picker->PhoneNumber ?></a> </td>
        </li>

        <?php } ?>
    </ul>
</div>
<!-- End location-list -->

<?php TbfView('vk.Wechat.Layout.Footer'); ?>
