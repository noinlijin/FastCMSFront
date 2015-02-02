<div class="footer-wrapper">
    <footer class="footer footer-global container" role="contentinfo" data-analytics-region="global footer">

        <p  class="friend-link-list">
            <?php $slideList=\FastCMS\Helper::GetLists(array('CatId'=>12,'Offset'=>0,'Limit'=>8)) ;
            foreach($slideList as $row) {?>
            <a target="_blank" href="<?php eh($row['Url']);?>"><?php eh($row['Name']);?></a>
            <?php }  ?>

        </p>
        <p style="text-align: center">
            copyright 2014 weplus.Allright Reserved.我们+版权所有 备案号123456 / 地址：魅力之城三期原售楼部一楼 / 电话：028-84346698
        </p>
    </footer>
</div>

<!--end Footer-->

<?php TbfView('vk.Front.Layout.Js'); ?>

</body>
</html>
