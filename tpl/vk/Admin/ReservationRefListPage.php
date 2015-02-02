<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">当前栏目:<?php eh(FastCMS\Admin\Document::$currentCat['Name']);?>
            /
            <?php /** @var \vk\Orm\Reservation $Reservation */ ?>
            <?= $Reservation->Name ?>
            预约情况
        </h3>
    </div>
</div>

<div class="contain-list">
    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>学生信息</th>
            <th>家长信息</th>
            <th>来源</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php /** @var \vk\Orm\ReservationRef[] $RefList */
        foreach($RefList as $r): ?>
            <tr>
                <td>
                    <?= TbfTemplate::Render('vk.Admin.StudentInfoSegment',array('Student'=>$r->GetStudent())) ?>
                </td>
                <td>
                    <?= TbfTemplate::Render('vk.Admin.PatriarchInfoSegment',array('Patriarch'=>$r->GetPatriarch())) ?>
                </td>
                <td>
                    <?= $r->Source ?>
                </td>
                <td>
                    <?= TbfTemplate::Render('FastCMS.Admin.SelectPostSegment',array(
                        'TargetUrl'=>'/?n=vk.Admin.Reservation.SetStatusApi&RefId='.$r->Id,
                        'TargetKey'=>'Status',
                        'OptionList'=>array(
                            array(
                                'ShowValue'=>'等待审核',
                                'Value'=>'等待审核',
                            ),
                            array(
                                'ShowValue'=>'预约成功',
                                'Value'=>'预约成功',
                            ),
                            array(
                                'ShowValue'=>'已被拒绝',
                                'Value'=>'已被拒绝',
                            ),
                            array(
                                'ShowValue'=>'已签到',
                                'Value'=>'已签到',
                            ),
                        ),
                        'CurrentValue'=>$r->Status
                    )) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
