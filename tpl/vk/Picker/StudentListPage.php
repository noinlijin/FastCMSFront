<?php /** @var \vk\Orm\Group $Group */ ?>
<?php /** @var \vk\Orm\Student[] $StudentList */ ?>
    <table>
        <tr>
            <td width="63px">
                <a class="btn btn-link" href="/?n=vk.Picker.GroupListPage">返回</a>
            </td>
            <td style="text-align: center;color: #fff">接送系统</td>
            <td width="63px"> </td>
        </tr>
    </table>
    <div class="main">
        <div class="className"><?= $Group->Name ?></div>
        <table class="table table-hover table-condensed">
            <?php foreach($StudentList as $s): ?>
                <tr>
                    <td><?= $s->Name ?></td>
                    <td><?= $s->Gender ?></td>
                    <td><a class="btn btn-info btn-xs" href="/?n=vk.Picker.OtherPage&StudentId=<?= $s->Id ?>&GroupId=<?= $Group->Id ?>">其他</a></td>
                    <td><a class="btn btn-success btn-xs" href="/?n=vk.Picker.ConfirmArriveSchoolPage&StudentId=<?= $s->Id ?>&GroupId=<?= $Group->Id ?>">接到</a></td>
                    <td><a class="btn btn-danger btn-xs" href="/?n=vk.Picker.ConfirmLeaveSchoolPage&StudentId=<?= $s->Id ?>&GroupId=<?= $Group->Id ?>">送走</a></td>
                </tr>
                <?php $patriarchList=$s->GetPatriarchList(); foreach($patriarchList as $p) { ?>
                    <?php
                    $ref = \vk\Orm\StudentPatriarchRef::createFromRow($p);
                    $patriarch = \vk\Orm\Patriarch::createFromRow($p);
                    ?>
                <tr>
                    <td><?= $patriarch->Name ?></td>
                    <td colspan="3" style="color:#333"><?= $patriarch->PhoneNumber ?></td>
                    <td><?= $ref->Relationship ?></td>
                </tr>
            <?php } ?>
            <?php endforeach; ?>
        </table>
    </div>
