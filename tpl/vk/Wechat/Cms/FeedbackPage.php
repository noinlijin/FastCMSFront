<?php /*反馈*/?>
<?php TbfView('vk.Wechat.Layout.Header',array("title"=>"反馈")); ?>


<!-- Introduce -->
<div class="main" id="ActiceList">

    <!-- item-active -->
    <div class="">

        <div class="active-detail">

            <p class="profile">留下您的宝贵意见，我们将为您提供更好的服务</p>
            <div class="space20"></div>

            <form data-action="/?n=vk.Wechat.FeedbackAction" method="post" class="form">
                <div class="form-group">
                    <label for="">反馈意见</label>

                    <input type="hidden" />
                    <input type="hidden" name="WechatId" value="<?php eh($WechatId); ?>"/>
                    <textarea type="text" class="form-control" name="Message"></textarea>
                </div>
                <?php
                    $Patriarch = \vk\Orm\Patriarch::GetOneByWechatId($WechatId);
                    if(empty($Patriarch)){
                ?>
                <div class="form-group">
                    <label for=""> <span style="color: red">*</span>手机号</label>
                    <input type="phone" name="VisitorPhone" class="form-control"/>
                </div>

                <?php } ?>
                <div>
                    <input type="submit" class="btn btn-default" value="提交"/>
                </div>
            </form>
            <div class="space20"></div>

        </div>

    </div>
    <!-- END item-active -->
    <div class="space20"></div>

</div>
<!--End Introduce-->

<?php TbfView('vk.Wechat.Layout.Footer'); ?>
