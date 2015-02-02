<?php TbfView('FastCMS.Admin.Layout.Header',array('fullWidth'=>true)); ?>
<?php TbfView('FastCMS.Admin.Layout.HeadMenu',array('m'=>'Category')); ?>



<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="col-sm-12" style="padding:10px;">

            <div class="panel panel-default">
                <div class="panel-heading">
            <a class="btn btn-success btn-sm" href="/?n=FastCMS.Admin.Category.AddPage"> <i class="fa fa-plus-square"></i>&nbsp;&nbsp;添加新栏目</a>
            &#12288;<span style="color:red">注意: 当您要对栏目进行编辑和删除时，请确保您已知晓此操作带来的后果，千万要谨慎操作！</span>
        </div>
                <div class="panel-body">
                    <div class="contain-list">
                        <form action="/?n=FastCMS.Admin.Category.OrderFormAction" method="post">
                          <table class="table table-condensed table-hover tree">
                              <thead>
                                <tr>
                                    <th width="50">
                                        <button type="submit" class="btn btn-primary btn-xs">
                                            <span class="fa fa-sort-amount-desc"></span>
                                            排序
                                        </button>
                                    </th>
                                    <th>ID</th>
                                    <th>栏目名称</th>
                                    <th>类型</th>
                                    <th>操作</th>
                                </tr>
                              </thead>

                              <tbody>
                                <?php foreach(UeeCategory::getAll() as $cat): ?>
                                    <tr class="treegrid-<?php eh($cat['Id']);?> treegrid-parent-<?php if (!empty($cat['Parent'])){eh($cat['Parent']['Id']);}?>">
                                        <td>
                                            <input type="hidden" class="category-list-input" data-level="<?php eh($cat['Level']);?>"
                                                   name="Id[]" value="<?php eh($cat['Id'])?>">
                                            <center>
                                                <input class="form-control fastcms-small-input" type="text" name="Ord[]" value="<?php eh($cat['Ord'])?>">
                                            </center>
                                        </td>
                                        <td><?php eh($cat['Id'])?></td>
                                        <td style="text-align: left;">
                                            <?php eh($cat['IntentName']);?>
                                        </td>
                                        <td><?php if($cat['Type']==='目录'){eh($cat['Type'].'（'.$cat['TplType'].'）');}else{eh($cat['Type']);}?></td>
                                        <td>
                                            <?php if (!in_array($cat['Id'],$NotEditableList)): ?>
                                            <div style="text-align:center">
                                                <?php if ($cat['Type']==='目录'){ ?>
                                                <a href="/?n=FastCMS.Admin.Category.AddPage&Pid=<?php eh($cat['Id'])?>"
                                                   class="btn btn-warning btn-xs"
                                                   data-original-title="添加子栏目"
                                                   data-toggle="tooltip"
                                                   data-placement="top"
                                                    ><i class="fa fa-plus-square"></i>
                                                </a>
                                                <?php }else{ ?>
                                                <a href="/?n=FastCMS.Admin.Document.ListPage&CatId=<?php eh($cat['Id'])?>"
                                                   class="btn btn-default btn-xs"
                                                   data-original-title="修改内容"
                                                   data-toggle="tooltip"
                                                   data-placement="top"
                                                    ><i class="fa fa-pencil"></i>
                                                </a>
                                                <?php } ?>
                                                <a href="/?n=FastCMS.Admin.Category.EditPage&Id=<?php eh($cat['Id'])?>"
                                                   class="btn btn-success btn-xs"
                                                   data-toggle="tooltip"
                                                   data-placement="top"
                                                   data-original-title="编辑"
                                                    ><i class="fa fa-edit"></i>
                                                </a>
                                                <a href="javascript:;"
                                                    data-url="/?n=FastCMS.Admin.Category.DeleteApi&Id=<?php eh($cat['Id'])?>"
                                                    class="btn btn-danger btn-xs url-post"
                                                    data-toggle="tooltip"
                                                    data-placement="top"
                                                    data-original-title="删除"
                                                    ><i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                <?php endif;?>
                                        </td>
                        </tr>
                                <?php endforeach; ?>
                              </tbody>
                    </table>
                </form>
            </div>

        </div>

        <div class="panel-footer">
            <a class="btn btn-primary btn-sm" href="/?n=FastCMS.Admin.Category.AddPage">添加新栏目</a>
        </div>
    </div>

        </div>
    </section>
</section>
<?php TbfView('FastCMS.Admin.Layout.Footer'); ?>
