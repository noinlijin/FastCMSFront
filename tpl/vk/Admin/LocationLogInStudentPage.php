<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">当前栏目:<?php eh(FastCMS\Admin\Document::$currentCat['Name']);?>
            /
            <?php /** @var \vk\Orm\Student $Student */ ?>
            <?= $Student->Name ?>
            位置信息
        </h3>
    </div>
</div>

<div class="contain-list">
    <table class="table table-condensed table-hover">
        <thead>
        <tr>
        </tr>
        </thead>
        <tbody>
        <?php /** @var \vk\Orm\LocationLog[] $LocationLog */
        $today = '0000-00-00 00:00:00';
        foreach($LocationLog as $log): ?>
            <?php if ( !TbfTime::MysqlIsSameDay($today,$log->Time) ): ?>
                <?php $today=$log->Time; ?>
                <tr>
                    <td colspan="3">
                        <span class="label label-info">
                        <?= TbfTime::MysqlDateTimeToDate($log->Time) ?>
                        </span>
                    </td>
                </tr>
            <?php endif; ?>
            <tr>
                <td><?= DateTime::createFromFormat('Y-m-d H:i:s',$log->Time)->format('H:i:s') ?></td>
                <td>
                    <?php if ( $log->Type ===  \vk\Enum\LocationType::ArriveSchool): ?>
                        <?php if (!empty($log->OtherNote)){ ?>
                            我们已接到您的孩子：<?= $log->OtherNote ?>
                        <?php } else { ?>
                            我们已从家长「<?= $log->GetPatriarch()->Name ?>」处接到孩子
                        <?php } ?>
                    <?php endif;?>
                    <?php if ( $log->Type ===  \vk\Enum\LocationType::LeaveSchool): ?>
                        您的孩子由家长「<?= $log->GetPatriarch()->Name ?>」接走
                    <?php endif;?>
                    <?php if ( $log->Type ===  \vk\Enum\LocationType::Other): ?>
                        <?= h($log->OtherNote) ?>
                    <?php endif;?>
                </td>
                <td>接送管理员：<?php $picker=$log->GetPicker();?><?= $picker->Name ?> / <?= $picker->PhoneNumber ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
