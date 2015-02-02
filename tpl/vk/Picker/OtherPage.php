<?php TbfView('vk.Picker.Layout.Header'); ?>
    <table>
        <tr>
            <td width="63px">
                <a class="btn btn-link" href="/?n=vk.Picker.StudentListPage&GroupId=<?= $GroupId ?>">返回</a>
            </td>
            <td style="text-align: center;color: #fff">接送系统</td>
            <td width="63px"></td>
        </tr>
    </table>
    <div class="main">
        <form class="form" data-action="/?n=vk.Picker.OtherApi" method="POST">
            <p class="confirmNote">其他</p>
            <div class="othersInput">
                    <input name="StudentId" value="<?= $StudentId ?>" type="hidden"/>
                    <input name="GroupId" value="<?= $GroupId ?>" type="hidden"/>
                    <textarea name="OtherNote"></textarea>
            </div>
            <button type="submit" style="width:100%;" class="btn btn-primary">确认</button>
        </form>
    </div>
</div>

</body>
</html>