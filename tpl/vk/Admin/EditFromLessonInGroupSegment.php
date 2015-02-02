<style>
    #LessonInGroup input {
        border: none;
        box-shadow: none;
    }

    #LessonInGroup input:focus {
        border: none;
        border-bottom: 1px solid #00b0ff;
        box-shadow: none;
    }
    .LessonInGroup-StartTime {
        width: 75px;
    }
    .LessonInGroup-EndTime {
        width: 75px;
    }
    .LessonInGroup-WeekDayType {
        width: 65px;
    }
</style>
<div class="form-group ">
    <label class="col-sm-2 control-label"><?php eh($config['ShowName']); ?></label>
    <div class="col-sm-8">
        <table class="table" id="LessonInGroup">
            <thead>
            <tr>
                <th></th>
                <th>学科</th>
                <th>教师</th>
                <th>上课时间</th>
                <th>下课时间</th>
                <th width="180px"></th>
            </tr>
            </thead>
            <tbody>
            <?php /** @var vk\Orm\Lesson $lesson */ ?>
            <?php foreach ( $LessonList as $lesson ): ?>
            <tr class="LessonInGroup-cell" data-lesson-id="<?= $lesson->Id ?>">
                <td>
                    <select class="LessonInGroup-WeekDayType form-control input-sm">
                        <option <?php if ($lesson->WeekDayType === '周一') { ?>selected="selected"<?php } ?> value="周一">周一</option>
                        <option <?php if ($lesson->WeekDayType === '周二') { ?>selected="selected"<?php } ?> value="周二">周二</option>
                        <option <?php if ($lesson->WeekDayType === '周三') { ?>selected="selected"<?php } ?> value="周三">周三</option>
                        <option <?php if ($lesson->WeekDayType === '周四') { ?>selected="selected"<?php } ?> value="周四">周四</option>
                        <option <?php if ($lesson->WeekDayType === '周五') { ?>selected="selected"<?php } ?> value="周五">周五</option>
                        <option <?php if ($lesson->WeekDayType === '周六') { ?>selected="selected"<?php } ?> value="周六">周六</option>
                        <option <?php if ($lesson->WeekDayType === '周日') { ?>selected="selected"<?php } ?> value="周日">周日</option>
                    </select>
                </td>
                <td>
                    <select class="LessonInGroup-TeacherId form-control input-sm">
                        <?php /** @var \vk\Orm\Teacher[] $TeacherList */ ?>
                        <?php foreach ($TeacherList as $teacher): ?>
                            <option <?php if ($lesson->TeacherId === $teacher->Id) { ?>selected="selected"<?php } ?> value="<?= $teacher->Id ?>"><?= $teacher->Name ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td>
                    <input value="<?= $lesson->Subject ?>" class="LessonInGroup-Subject form-control input-sm" type="text" />
                </td>
                <td>
                    <center>
                        <input value="<?= $lesson->StartTime ?>" class="LessonInGroup-StartTime form-control input-sm" type="text" />
                    </center>
                </td>
                <td>
                    <center>
                        <input value="<?= $lesson->EndTime ?>" class="LessonInGroup-EndTime form-control input-sm" type="text" />
                    </center>
                </td>
                <td style="width: 140px;">
                    <a href="javascript:;" class="LessonInGroup-Edit btn btn-xs btn-primary">
                        <i class="fa fa-check-circle"></i>
                        提交修改
                    </a>
                    <a href="javascript:;" class="LessonInGroup-Delete btn btn-xs btn-danger">
                        <span class="fa fa-minus"></span>
                        删除
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="6">
                    <a id="LessonInGroup-AddNew" class="btn button-xs btn-primary" href="javascript:;">
                        <i class="fa fa-plus-circle"></i>
                        新增课程
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    var GroupId = "<?= $GroupId ?>";
    var TeacherList = <?= TbfSecurity::XssJsonEncode($TeacherList) ?>;
</script>
