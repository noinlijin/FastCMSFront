<?php /*预约*/
/** @var \vk\Orm\Reservation $data */
?>
<?php TbfView('vk.Wechat.Layout.Header',array("title"=>"预约信息")); ?>


<!-- Introduce -->
<div class="main" id="ActiceList">

    <!-- item-active -->
    <div class="">

        <div>
            <p>
                <?php if(!empty($data->ThumbWechat)) {?>
                    <img style="max-width: 100%;" src="<?php eh($data->ThumbWechat);?>" alt=""/>
                <?php } ?>
            </p>
            <?php eh($data->Name);?> <br/><br/>
            <p class="profile">
                日期: <?php eh($data->GetStartTime());?> - <?php eh($data->GetEndTime());?>
            </p>
            <p class="profile">
                地址: <?php eh($data->Location);?>
            </p>
        </div>
        <div class="space40"></div>
        <div class="active-detail">

            <p class="profile">您的信息</p>
            <div class="space10"></div>
            <p class="profile">请您填写真实的数据，我们将会联系您。或者您可以直接拨打883882323</p>
            <div class="space20"></div>

            <form data-action="/?n=vk.Front.Reservation.AddNotMemberApi" method="post" class="form">
                <div class="form-group">
                    <label for="">姓名</label>

                    <input type="text" class="form-control" name="PatriarchName"/>
                    <input type="hidden" name="ReservationId" value="<?php eh($data->Id);?>"/>
                    <input type="hidden" name="Source" value="微信"/>
                </div>
                <div class="form-group">
                    <label for="">联系电话</label>
                    <input type="text" class="form-control" name="PatriarchPhoneNumber"/>
                </div>
                <div class="form-group">
                    <label for="">您孩子的名称</label>
                    <input type="text" name="StudentName" class="form-control"/>
                </div>
                <div class="space20"></div>
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
