<?php TbfView('FastCMS.Admin.Layout.Header'); ?>
<?php TbfView('FastCMS.Admin.Layout.HeadMenu',array('m'=>'AdminUser'));?>
<?php TbfView('FastCMS.Admin.Layout.sidebar',array('m'=>'AdminUser'));?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <!--mini statistics start-->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h4>
                            管理员列表
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <a class="btn btn-info btn-sm" style="margin-bottom: 15px " href="/?n=FastCMS.Admin.AdminUser.AddPage">
                                    <i class="fa fa-plus-square"></i>&nbsp;&nbsp;添加
                                </a>
                            </div>
                        </div>

                        <div class="contain-list">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>名称</th>
                                    <th>来源</th>
                                    <th>角色</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($data as $d1): ?>
                                    <tr>
                                        <td><?php eh($d1['Id']); ?></td>
                                        <td><?php eh($d1['Username']); ?></td>
                                        <td><?php eh($d1['Source']); ?></td>
                                        <td><?php eh($d1['Role']); ?></td>
                                        <td>
                                            <a href="/?n=FastCMS.Admin.AdminUser.EditPage&Id=<?php eurlv($d1['Id']); ?>"
                                               class="btn btn-success btn-xs" data-toggle="tooltip"
                                               data-placement="top"
                                               data-original-title="编辑"
                                                ><i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:;"
                                               data-url="/?n=FastCMS.Admin.AdminUser.DeleteApi&Id=<?php eurlv($d1['Id']); ?>"
                                               class="btn btn-danger btn-xs url-post"
                                               data-toggle="tooltip"
                                               data-placement="top"
                                               data-original-title="删除"
                                                ><i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!--mini statistics end-->

    </section>
</section>
<!--main content end-->
<?php TbfView('FastCMS.Admin.Layout.Footer'); ?>
