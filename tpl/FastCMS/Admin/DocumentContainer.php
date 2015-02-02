<?php TbfView('FastCMS.Admin.Layout.Header'); ?>
<?php TbfView('FastCMS.Admin.Layout.HeadMenu',array('m'=>\vk\Admin\Helper::GetM())); ?>

<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">

            <div class=" sidebar">
                <ul class="sidebar-menu category-tree-list" id="nav-accordion">
                    <script>
                        var allCategory = <?php ejson(UeeCategory::getCategoryTreeJson());?>;
                        var currentCategoryId = <?php ejson(\FastCMS\Admin\Document::$currentCatId);?>;
                    </script>
                </ul>
            </div>


        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <?php echo $innerContent; ?>
    </section>
</section>


<?php TbfView('FastCMS.Admin.Layout.Footer'); ?>
