<form class="form-horizontal ajax-form" autocomplete="off" role="form" action="<?php eh($postUrl);?>" method="post">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php if (empty($innerTitle)): ?>
                当前栏目: <?php eh(\FastCMS\Admin\Document::$currentCat['Name']);?>
                <?php else:
                    eh($innerTitle);
                    endif ?>
            </h3>
        </div>

        <div class="panel-body">
            <?php echo $formContent;?>
        </div>

        <div class="panel-footer">
            <center>
                <button type="submit" class="btn btn-primary btn-lg" style="width: 300px;">
                    <span class="fa fa-check"></span>
                    提交
                </button>
            </center>
        </div>

    </div>
</form>