<?php TbfView('vk.Front.Layout.Header',array("pageName"=>"师资介绍")); ?>


<div class="bread">
    <div class="container">
        <ul>
            <li>
                <a href="javascript:;" class="lateral-nav-item">
                    教师介绍
                </a>
            </li>
        </ul>
    </div>
</div>


<!--course-list-->
<div class="main" id="course-list">

    <?php
    foreach($data as $row) {?>

        <!--course-item-->
        <div class="course-item" id="page-<?php eh($row['CatId'])?>-<?php eh($row['Id'])?>">
            <div class="container">
                <div >
                    <?php  if(!empty($row['Avatar'])) {?>
                        <img style="max-width: 476px" src="<?php eh($row['Avatar']);?>" alt=""/>
                    <?php } ?>
                </div>

            </div>

            <div class="container">
                <div class="article">
                    <?php echo($row['Profile']);?>
                </div>
            </div>

        </div>
        <br/>
        <!--end course-item-->
    <?php } ?>

</div>
<!--end course-list-->

<?php TbfView('vk.Front.Layout.FooterBg'); ?>

<?php TbfView('vk.Front.Layout.Footer'); ?>
