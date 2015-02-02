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
        <p class="confirmNote">接走<span><?= $Student->Name ?></span>的人是</p>
        <form class="form" data-action="/?n=vk.Picker.LeaveSchoolApi" method="POST">
            <input name="StudentId" value="<?= $Student->Id ?>" type="hidden"/>
            <input name="GroupId" value="<?= $GroupId ?>" type="hidden"/>
            <div class="selector">
                <select name="PatriarchId" class="selected-deli form-control">
                    <?php /** @var \vk\Orm\Patriarch[] $PatriarchList */ $PatriarchList = $Student->GetPatriarchList(); ?>
                    <?php foreach($PatriarchList as $patriarch): ?>
                        <?php $patriarch = \vk\Orm\Patriarch::createFromRow($patriarch); ?>
                        <option value="<?= $patriarch->Id ?>"><?= $patriarch->Name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button style="width:100%;"class="btn btn-primary">确认</button>
        </form>
    </div>
