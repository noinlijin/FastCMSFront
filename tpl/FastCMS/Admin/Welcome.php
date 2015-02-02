<!--mini statistics start-->
<div class="row">

    <div class="col-md-4">
        <section class="panel">
            <div class="panel-body">
                <div class="top-stats-panel">
                    <div class="daily-visit">
                        <h4 class="widget-h">付费日志</h4>
                        <div id="daily-visit-chart" style="width:100%; height: 100px; display: block">

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-4">
        <section class="panel">
            <div class="panel-body">
                <div class="top-stats-panel">
                    <h4 class="widget-h">各课程收入比例</h4>
                    <div class="sm-pie">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-4">
        <section class="panel">
            <div class="panel-body">
                <div class="top-stats-panel">
                    <h4 class="widget-h">每日收入</h4>
                    <div class="bar-stats">
                        <ul class="progress-stat-bar clearfix">
                            <li data-percent="50%"><span class="progress-stat-percent pink"></span></li>
                            <li data-percent="90%"><span class="progress-stat-percent"></span></li>
                            <li data-percent="70%"><span class="progress-stat-percent yellow-b"></span></li>
                        </ul>
                        <ul class="bar-legend">
                            <li><span class="bar-legend-pointer pink"></span> 辅导课</li>
                            <li><span class="bar-legend-pointer green"></span> 乐高</li>
                            <li><span class="bar-legend-pointer yellow-b"></span> 吉他</li>
                        </ul>
                        <div class="daily-sales-info">
                            <span class="sales-label">总共售出：</span> <span class="sales-count"> 1200￥ </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!--mini statistics end-->

<!--mini statistics start-->
<div class="row">
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon orange"><i class="fa fa-group"></i></span>
            <div class="mini-stat-info">
                <span><?php use FastCMS\Admin\ServerUsage;
                    echo (ServerUsage::GetAdminUserNum());?></span>
                管理员总数
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon green"><i class="fa fa-thumb-tack"></i></span>
            <div class="mini-stat-info">
                <span>20</span>
                用户行为
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
            <div class="mini-stat-info">
                <span>22450元</span>
                成本
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
            <div class="mini-stat-info">
                <span>34320元</span>
                营收总额
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                微信用户
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
            </header>
            <div class="panel-body">
                <div id="visitors-chart">
                    <div id="visitors-container" style="width: 100%;height:300px; text-align: center; margin:0 auto;">
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>