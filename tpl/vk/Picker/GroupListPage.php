    <table>
        <tr>
            <td width="63px">
            </td>
            <td style="text-align: center;color: #fff">接送系统</td>
            <td width="63px"> </td>
        </tr>
    </table>
    <div class="main">
        <ul class="list-group">
            <?php /** @var \vk\Orm\Group[] $GroupList */ ?>

            <?php foreach ($GroupList as $g ): ?>
                <li class="list-group-item">
                    <a href="/?n=vk.Picker.StudentListPage&GroupId=<?= urlv($g->Id); ?>"></a>
                    <span class="badge"><?= count($g->GetStudyingStudentList()) ?></span>
                    <?= $g->Name ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
