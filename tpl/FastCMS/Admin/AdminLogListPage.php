<?php TbfView('FastCMS.Admin.Layout.Header'); ?>
<?php TbfView('FastCMS.Admin.Layout.HeadMenu',array('m'=>'AdminUser'));?>

<?php TbfView('FastCMS.Admin.Layout.sidebar',array('m'=>'AdminLog'));?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--mini statistics start-->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-body">
                        <div class="adv-table">
                            <table class="display table table-bordered table-striped" id="dynamic-table">
                            <thead>
                                <tr>
                                    <th>时间</th>
                                    <th>操作者</th>
                                    <th>消息</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($data as $d1): ?>
                                    <tr class="gradeX">
                                        <td><?php eh($d1['Time']); ?></td>
                                        <td><?php eh($d1['AdminName']); ?></td>
                                        <td><?php eh($d1['Msg']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </section>
</section>
<?php TbfView('FastCMS.Admin.Layout.Footer',array('data'=>$data)); ?>
