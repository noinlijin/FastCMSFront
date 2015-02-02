<?php /*学生课表*/
/** @var \vk\Orm\Student $student */
?>
<?php TbfView('vk.Wechat.Layout.Header',array("title"=>"宝贝课表")); ?>


<!-- 学生课表 -->
<div id="student-course">
    <!-- coursr-item -->
    <div class="coursr-item">
        <h3>本周课表</h3>
        <ul>
            <?php foreach($student->GetCurriculumThisWeek() as $course){ ?>
            <li>
                <?php eh($course->WeekDayType."  ".$course->StartTime."-".$course->EndTime."  ".$course->Subject."  ".$course->GetTeacher()->Name);?>
            </li>

            <?php }?>

        </ul>
    </div>
    <!-- End coursr-item -->

    <!-- coursr-item -->
    <div class="coursr-item">
        <h3>下周课表</h3>
        <ul>
            <?php foreach($student->GetCurriculumNextWeek() as $course){ ?>
                <li>
                    <?php eh($course->WeekDayType."  ".$course->StartTime."-".$course->EndTime."  ".$course->Subject."  ".$course->GetTeacher()->Name);?>
                </li>

            <?php }?>
        </ul>
    </div>
    <!-- End coursr-item -->

</div>
<!-- End 学生课表 -->

<?php TbfView('vk.Wechat.Layout.Footer'); ?>
