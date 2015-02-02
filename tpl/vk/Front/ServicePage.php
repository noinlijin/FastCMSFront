<?php TbfView('vk.Front.Layout.Header',array("pageName"=>"社区服务")); ?>

<div class="container">
    <div class="bread">
        <ul>
            <?php foreach(\FastCMS\Helper::GetAllSinglePageByCatId(38) as $d){ ?>
                <li>
                    <a href="javascript:;" class="lateral-nav-item" data-id="page-<?php eh($d['CatId'])?>">
                        <?php eh($d['Title'])?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>


<?php foreach(\FastCMS\Helper::GetAllSinglePageByCatId(38) as $d){ ?>
    <!-- Introduce -->
    <div class="container main" id="introduce">

        <div class="article" id="page-<?php eh($d['CatId'])?>">
            <?php  echo($d['Content']); ?>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--End Introduce-->

<?php } ?>

<?php TbfView('vk.Front.Layout.FooterBg'); ?>


<?php TbfView('vk.Front.Layout.Footer'); ?>
