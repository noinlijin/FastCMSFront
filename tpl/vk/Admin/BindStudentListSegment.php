<table class="table table-bordered table-striped" >
    <thead>
    <tr>
        <th>关系</th>
        <th>Id</th>
        <th>姓名</th>
        <th>年龄</th>
        <th>性别</th>
    </tr>
    </thead>
    <tbody>
    <?php /** @var vk\Orm\Student $Student */ ?>
    <?php foreach ( $StudentList as $key=>$Student ): ?>
        <tr>
            <td><?= $RelationshipList[$key]->Relationship ?></td>
            <td><?= $Student->Id ?></td>
            <td><?= $Student->Name ?></td>
            <td><?= $Student->Age ?></td>
            <td><?= $Student->Gender ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
