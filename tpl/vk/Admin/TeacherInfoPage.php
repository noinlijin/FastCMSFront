<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">当前栏目:<?php eh(FastCMS\Admin\Document::$currentCat['Name']);?>
            /
            <?php /** @var \vk\Orm\Teacher $Teacher */ ?>
            <?= $Teacher->Name ?>
            所授课程
        </h3>
    </div>
</div>

<div class="contain-list">
    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>班级</th>
            <th>课程安排</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php /** @var \vk\Orm\Group[] $GroupList */
        foreach($GroupList as $group): ?>
            <tr>
                <td>
                    <?= TbfTemplate::Render('vk.Admin.GroupBaseInfoSegment',array('Group'=>$group)) ?>
                </td>
                <td>
                    <?= TbfTemplate::Render('vk.Admin.GroupLessonInfoSegment',array('LessonList'=>$Teacher->GetLessonList(\vk\Enum\LessonStatus::Enabled,$group->Id))) ?>
                </td>
                <td></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
