<!--right sidebar start-->
<div class="right-sidebar">
    <!--

<div class="search-row">
<input type="text" placeholder="Search" class="form-control">
    </div>
    -->

    <div class="right-stat-bar">
        <ul class="right-side-accordion">
            <?php /**
            <li class="widget-collapsible">
                <a href="#" class="head widget-head red-bg active clearfix">
                    <span class="pull-left right-side-title ">服务器参数</span>
                    <span class="pull-right widget-collapse"><i class="fa fa-minus"></i></span>
                </a>
                <ul class="widget-container">
                    <li>
                        <div class="prog-row side-mini-stat clearfix">
                            <div class="side-graph-info">
                                <h4>CPU使用率</h4>
                                <p>
                                    <?php use FastCMS\Admin\ServerUsage;
                                    echo ServerUsage::GetServerUsageAPI()['cpu_usage']."%";?>
                                </p>
                            </div>
                            <div class="side-mini-graph">
                                <canvas id="cpu-usage" width="40px" height="40px"><?php echo ServerUsage::GetServerUsageAPI()['cpu_usage']."%";?></canvas>
                            </div>
                        </div>
                        <div class="prog-row side-mini-stat">
                            <div class="side-graph-info">
                                <h4>内存使用情况</h4>
                                <p>
                                总内存<?php echo(ServerUsage::GetServerUsageAPI()['mem_total']);?>M,使用<?php echo(ServerUsage::GetServerUsageAPI()['mem_used']);?>M
                                </p>
                            </div>
                            <div class="side-mini-graph">
                                <div class="p-delivery">
                                    <canvas  id="ram-usage" width="40px" height="40px"><?php echo ServerUsage::GetServerUsageAPI()['mem_usage']."%";?></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="prog-row side-mini-stat clearfix">
                            <div class="side-graph-info">
                                <h4>CPU平均负载(1/5/15 min)</h4>
                                <p>
                                    统计时间:<?php echo(ServerUsage::GetServerUsageAPI()['time']);?>
                                </p>
                            </div>
                            <div class="side-mini-graph">
                                <div class="target-sell">
                                    <ul class="cpu-average-load clearfix">
                                        <li><span class="one-minute" data-percent="<?php echo(round(100*(ServerUsage::GetServerUsageAPI()['load_1']))."%")?>"></span></li>
                                        <li><span class="five-minute" data-percent="<?php echo(round(100*(ServerUsage::GetServerUsageAPI()['load_5']))."%")?>"></span></li>
                                        <li><span class="fiveteen-minute" data-percent="<?php echo(round(100*(ServerUsage::GetServerUsageAPI()['load_15']))."%")?>"></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="prog-row side-mini-stat">
                            <div class="side-graph-info">
                                <h4>主要磁盘空使用率</h4>
                                <p>
                                    <?php echo(ServerUsage::GetServerUsageAPI()['disk_usage']);?>
                                </p>
                            </div>
                            <div class="side-mini-graph">
                                <div class="d-pending">
                                    <canvas id="disk-usage" width="50px" height="50px"><?php echo(ServerUsage::GetServerUsageAPI()['disk_usage']);?></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="prog-row side-mini-stat">
                            <div class="col-md-12">
                                <h4>上、下行速率</h4>
                                <p>
                                上行:<?php echo(round((ServerUsage::GetServerUsageAPI()['uplink'])/3,2)." kbps" );?> ,下行:<?php echo(round((ServerUsage::GetServerUsageAPI()['downlink'])/3,2)." kbps"); ?>
                                </p>
                                <div class="progress progress-xs mtop10">
                                    <div style="width: <?php echo ServerUsage::GetServerUsageAPI()['link_percent']."%";?>" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                                        <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            */ ?>
            <?php
            use FastCMS\Admin\ServerUsage;
            ?>
            <li class="widget-collapsible">
                <a href="#" class="head widget-head purple-bg active">
                    <span class="pull-left right-side-title"> 管理员历史操作 </span>
                    <span class="pull-right widget-collapse"><i class="fa fa-minus"></i></span>
                </a>
                <ul class="widget-container">
                    <li>
                        <?php foreach(ServerUsage::GetAdminHistory() as $d1):?>
                        <div class="prog-row">
                            <div class="user-thumb rsn-activity">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="rsn-details ">
                                <p class="text-muted">
                                    <?php echo TbfTime::TimeToString($d1['Time']); ?>
                                </p>
                                <p>
                                    <a href="#"><?php echo $d1['AdminName'];?> </a><?php echo $d1['Msg']; ?>
                                </p>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </li>
                </ul>
            </li>
            <!--
            <li class="widget-collapsible">
                <a href="#" class="head widget-head yellow-bg active">
                    <span class="pull-left right-side-title"> shipment status</span>
                    <span class="pull-right widget-collapse"><i class="fa fa-minus"></i></span>
                </a>
                <ul class="widget-container">
                    <li>
                        <div class="col-md-12">
                            <div class="prog-row">
                                <p>
                                    Full sleeve baby wear (SL: 17665)
                                </p>
                                <div class="progress progress-xs mtop10">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="prog-row">
                                <p>
                                    Full sleeve baby wear (SL: 17665)
                                </p>
                                <div class="progress progress-xs mtop10">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                        <span class="sr-only">70% Completed</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            -->
        </ul>

    </div>

</div>
<!--right sidebar end-->
</section>

<?php TbfView('FastCMS.Admin.Layout.Js'); ?>


