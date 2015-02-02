<?php TbfView('FastCMS.Admin.Layout.Header'); ?>
<?php TbfView('FastCMS.Admin.Layout.HeadMenu',array('m'=>'AdminUser')); ?>

<?php TbfView('FastCMS.Admin.Layout.sidebar',array('m'=>'AdminUser'));?>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <div class="  main">

            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <h4>
                            <span class="fa  fa-edit"></span>
                            编辑/添加管理员信息
                        </h4>

                    </h3>
                </div>
                <div class="panel-body">

                <form autocomplete="off" class="form-horizontal ajax-form"
                      action="<?php eh($postUrl);?>"
                      method="post" accept-charset="utf-8" role="form" >
                        <?php echo $formContent; ?>
                    <div class="panel-footer">
                        <center>
                            <button type="submit" class="btn btn-info btn-lg" style="width: 300px;">
                                <span class="fa fa-check"></span>
                                提交
                            </button>
                        </center>
                    </div>

                </form>
            </div><!--END panel-->

        </div>

    </section>
</section>

<?php TbfView('FastCMS.Admin.Layout.Footer'); ?>
