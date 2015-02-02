<table class="table table-bordered table-striped" >
    <?php /** @var vk\Orm\Lesson $Lesson */ ?>
    <?php foreach ( $LessonList as $Lesson ): ?>
        <tr>
            <td> <?= $Lesson->WeekDayType ?></td>
            <td> <?= $Lesson->StartTime ?>-<?= $Lesson->EndTime ?> </td>
            <td>「<?= $Lesson->Subject ?>」</td>
            <td><?= \vk\Orm\Teacher::GetOneById($Lesson->TeacherId)->Name ?></td>
        </tr>
    <?php endforeach; ?>
</table>
