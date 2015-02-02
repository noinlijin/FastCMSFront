<?php /*课程体系首页*/?>
<?php TbfView('vk.Wechat.Layout.Header',array("title"=>"课程与体系介绍")); ?>

<!-- Home -->
<div style="text-align: center;padding: 40px 0" id="home">
    <img src="/public/image/logo.png" alt="" style="margin-bottom: 40px;max-width: 210px"/>
    <br/>

    <a href="<?php echo(\FastCMS\Helper::GetLists(array('CatId'=>20,'Offset'=>0,'Limit'=>5))[0]['Url'] )?>">
        <img data-src="holder.js/89*89" class="img-circle" alt="课程体系" src="/public/image/system-list-bg.png"
             data-holder-rendered="true" style="width: 89px; height: 89px;margin-bottom: 10px">
    </a>

    <br/>
    <a href="/?n=vk.Wechat.Cms.Course.ListPage">
        <img data-src="holder.js/89*89" class="img-circle" alt="课程介绍" src="/public/image/course-list-bg.png"
             data-holder-rendered="true" style="width: 89px; height: 89px;margin-bottom: 10px">
    </a>
    <br/>
    <!--
    <a href="/?n=vk.Wechat.Cms.Teacher.ListPage">
        <img data-src="holder.js/89*89" class="img-circle" alt="师资介绍" src="/public/image/teacher-list-bg.png"
             data-holder-rendered="true" style="width: 89px; height: 89px;margin-bottom: 10px">
    </a>
    -->
</div>

<!-- End home -->

<?php TbfView('vk.Wechat.Layout.Footer'); ?>
