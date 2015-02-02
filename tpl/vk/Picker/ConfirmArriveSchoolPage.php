<?php /** @var \vk\Orm\Student $Student */ ?>
    <table>
        <tr>
            <td width="63px">
                <a class="btn btn-link" href="/?n=vk.Picker.StudentListPage&GroupId=<?= $GroupId ?>">返回</a>
            </td>
            <td style="text-align: center;color: #fff">接送系统</td>
            <td width="63px"> </td>
        </tr>
    </table>
    <div class="main">
        <form class="form" data-action="/?n=vk.Picker.ArriveSchoolApi" method="POST">
            <input type="hidden" name="StudentId" value="<?php eh($Student->Id); ?>">
            <input type="hidden" name="GroupId" value="<?php eh($GroupId); ?>">
            <div class="selector">
                <p class="confirmNote">
                    从何处接到孩子？
                </p>
                <select name="Source" class="selected-deli form-control">
                    <option value="从学校处">从学校处</option>
                    <?php /** @var \vk\Orm\Patriarch[] $PatriarchList */ $PatriarchList = $Student->GetPatriarchList(); ?>
                    <?php foreach($PatriarchList as $patriarch): ?>
                        <?php $patriarch = \vk\Orm\Patriarch::createFromRow($patriarch); ?>
                        <option value="<?= $patriarch->Id ?>">家长：<?= $patriarch->Name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <p class="confirmNote">你确认已经接到了 <?= $Student->Name ?>（学号：<?= $Student->Id ?>）?</p>
            <button style="width:100%;"class="btn btn-primary">确认</button>
        </form>
    </div>
