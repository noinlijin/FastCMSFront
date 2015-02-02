<?php TbfView('FastCMS.Admin.Layout.Header',array('fullWidth'=>true)); ?>
<?php TbfView('FastCMS.Admin.Layout.HeadMenu',array('m'=>'Category')); ?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="col-sm-12" style="margin-top: 15px;">

            <div class="add-form">

                <form class="form-horizontal ajax-form"
                      action="<?php eh($postUrl);?>"
                      method="post" accept-charset="utf-8" role="form">

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <span class="fa  fa-edit"></span>
                                添加/编辑栏目
                            </h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $formContent;?>
                        </div>
                        <div class="panel-footer">
                            <center>
                                <button type="submit" class="btn btn-info btn-lg" style="width: 300px;">
                                    <span class="fa fa-check"></span>
                                    提交
                                </button>
                            </center>
                        </div>

                    </div><!--END panel-->

                </form>

            </div>

</div>
    </section>
</section>
<?php TbfView('FastCMS.Admin.Layout.Footer'); ?>
