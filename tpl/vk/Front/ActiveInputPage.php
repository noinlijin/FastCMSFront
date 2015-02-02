<?php
/** @var \vk\Orm\Reservation $data */
?>
<?php TbfView('vk.Front.Layout.Header',array("pageName"=>"")); ?>

<div class="bread ">
    <div class="container">
        <ul>
                <li>
                    <a href="javascript:;" class="lateral-nav-item" data-id="page-1">
                       预约课程
                    </a>
                </li>
        </ul>
    </div>
</div>


<!-- Introduce -->
<div class="main" id="ActiceList">

    <!-- item-active -->
    <div class="">
        <table style="margin: 0 auto;">
            <tr>
                <td>
                    <img src="<?php eh($data->ThumbFront);?>" alt="" style="max-width: 140px;max-height: 140px"/>
                </td>
                <td>
                    <?php eh($data->Name);?> <br/><br/>
                    <p class="profile">
                        日期: <?php eh($data->GetStartTime());?> - <?php eh($data->GetEndTime());?>
                    </p>
                    <p class="profile">
                        地址: <?php eh($data->Location);?>
                    </p>
                </td>
            </tr>

        </table>
        <div class="space40"></div>
        <div class="active-detail">

                <p class="profile">您的信息</p>
                <div class="space10"></div>
                <p class="profile">请您填写真实的数据，我们将会联系您。或者您可以直接拨打028-84346698</p>
                <div class="space20"></div>

                <form class="form" data-action="/?n=vk.Front.Reservation.AddNotMemberApi" method="post">
                    <p class="profile">姓名</p>
                    <div class="space10"></div>
                    <div>
                        <input type="text" name="PatriarchName"/>
                        <input type="hidden" name="ReservationId" value="<?php eh($data->Id);?>"/>
                        <input type="hidden" name="Source" value="网站"/>
                    </div>
                    <div class="space20"></div>
                    <p class="profile">联系电话</p>
                    <div class="space10"></div>
                    <div>
                        <input type="text" name="PatriarchPhoneNumber"/>
                    </div>
                    <div class="space20"></div>
                    <p class="profile">您孩子的名称</p>
                    <div class="space10"></div>
                    <div>
                        <input type="text" name="StudentName"/>
                    </div>
                    <div class="space20"></div>
                    <div>
                        <input type="submit" class="" value="提交"/>
                    </div>
                </form>
                <div class="space20"></div>

        </div>

    </div>
    <!-- END item-active -->
    <div class="space20"></div>

</div>
<!--End Introduce-->


<?php TbfView('vk.Front.Layout.FooterBg'); ?>


<?php TbfView('vk.Front.Layout.Footer'); ?>
