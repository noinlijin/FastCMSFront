<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">当前栏目:<?php eh(FastCMS\Admin\Document::$currentCat['Name']);?>
            &#12288;
        </h3>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-sm-12">
                <a style="color:#fff" class="btn btn-success btn-sm" href="/?n=FastCMS.Admin.Document.AddPage&CatId=<?php eh(FastCMS\Admin\Document::$currentCatId); ?>"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;添加新内容</a>
                <a class="btn btn-info btn-sm" href="/?n=FastCMS.Admin.Export.ToExcelAction&CatId=<?= h(FastCMS\Admin\Document::$currentCatId) ?>">
                    <span class="fa fa-cloud-download"></span>
                    导出数据
                </a>
                <form style="float:right;" action="/" method="GET" >
                    <input name="n" value="FastCMS.Admin.Search.SearchAction" type="hidden"/>
                    <input name="CatId" type="hidden" value="<?= FastCMS\Admin\Document::$currentCatId ?>"/>
                    <div class="input-group input-group-sm pull-right" style="width: 300px;">
                        <input class="form-control" name="Keyword" type="text" placeholder="搜索当前列表" value="<?php if(!empty($_REQUEST['Keyword'])){eh($_REQUEST['Keyword']);} ?>"/>
                        <div class="input-group-btn">
                            <button class="btn btn-primary">
                                <span class="fa fa-search"></span>
                                搜索
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="space20"></div>
        <?php if (!empty($StatusList)): ?>
            <ul class="nav nav-tabs">
                <?php foreach($StatusList as $thisStatus): ?>
                    <li <?php if ($CurrentStatus==$thisStatus): ?>class="active"<?php endif; ?>>
                        <a href="/?n=FastCMS.Admin.Document.ListPage&CatId=<?php eh(FastCMS\Admin\Document::$currentCatId);?>&Status=<?php eh($thisStatus);?>"
                            ><?php eh($thisStatus);?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="space20"></div>
        <div class="contain-list">
            <table class="table table-condensed table-hover <?php if($Cat['Type']=='图片列表'){ ?>image-album<?php } ?>">
                <thead>
                <tr>
                    <?php if (!empty($OrderList)): ?>
                        <th width="50">
                            <button type="submit" class="btn btn-primary btn-xs" id="list-order-btn"
                                    postUrl="/?n=FastCMS.Admin.Document.OrderApi&CatId=<?php eh(FastCMS\Admin\Document::$currentCatId);?>">
                                <span class="fa  fa-sort-amount-desc"></span>
                                排序
                            </button>
                        </th>
                    <?php endif; ?>
                    <?php foreach($TitleList as $d1): ?>
                        <th><?php eh($d1); ?></th>

                    <?php endforeach; ?>
                    <th width="300px">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($RowList as $i=>$row): ?>
                    <tr>
                        <?php if (!empty($OrderList)): ?>
                            <td>
                                <center>
                                    <input class="form-control fastcms-small-input list-order-row" type="text"
                                           data-id="<?php eh($IdList[$i]);?>"
                                           value="<?php eh($OrderList[$i]);?>">
                                </center>
                            </td>
                        <?php endif; ?>
                        <?php foreach($row as $k1=>$d1): ?>
                            <td <?php if($IsAlignLeftList[$k1]){ echo "style='text-align:left;width:400px'";}?> >
                                <?php if ( !empty($ShowFieldList[$k1]['Type']) && $ShowFieldList[$k1]['Type'] === "Image" ){ ?>
                                    <img style="max-width: 200px;max-height: 200px;" class="thumb" src="<?= $d1?>" alt=""/>
                                <?php } elseif($ShowFieldList[$k1]['Name'] === '_') { ?>
                                    <?= $d1 ?>
                                <?php } else { ?>
                                    <?php eh($d1); ?>
                                <?php } ?>
                            </td>
                        <?php endforeach; ?>
                        <td>
                            <div >
                                <?php foreach($OperateList[$i] as $opt): ?>
                                    <a class="btn btn-xs <?php echo implode(' ',$opt['AddClass']);?>" href="javascript:;"
                                       data-url="<?php eh($opt['Url']);?>"
                                       data-original-title="<?php eh($opt['Name']);?>"
                                       data-toggle="tooltip"
                                       data-placement="top"
                                        ><?php eh($opt['Name']);?>
                                        <!--<i class="fa <?php //eh($opt['Icon'])?>"></i>-->
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <ul class="pagination">
                <li class="disabled">
                    <a href="">
                        共<?php eh($Pager->GetTotalPage()); ?>页
                    </a>
                </li>
                <li <?php if (!$Pager->IsBeforePageActive()): ?>class="disabled"<?php endif; ?> >
                    <a href="<?php eh($Pager->GetBeforePageUrl()); ?>">&laquo;</a>
                </li>
                <?php foreach($Pager->GetShowPageArray() as $v1): ?>
                    <li <?php if ($v1['IsCurrent']): ?>class="active" <?php endif; ?>>
                        <a href="<?php eh($v1['Url']); ?>"><?php eh($v1['PageNum']); ?>
                            <span class="sr-only">(current)</span></a>
                    </li>
                <?php endforeach; ?>
                <li <?php if (!$Pager->IsAfterPageActive()): ?>class="disabled"<?php endif; ?> >
                    <a href="<?php eh($Pager->GetAfterPageUrl()); ?>">&raquo;</a>
                </li>
                <li>
                    <form action="<?php eh($Pager->baseUrl); ?>" method="GET" style="position: relative;margin-left:10px;float:left;">
                        <?php foreach(TbfUrl::getUrlQueryArray($Pager->baseUrl) as $key=>$value): ?>
                            <input type="hidden" name="<?php eh($key)?>" value="<?php eh($value);?>"/>
                        <?php endforeach; ?>
                        <input type="text" class="form-control"
                               style="width:30px;height: 29px;padding: 2px 2px;display:inline;text-align:center;position: relative;top:1px;"
                               name="<?php eh($Pager->pageKeyName);?>" value="<?php eh($Pager->CurrentPage);?>"/>
                        <input type="submit" class="btn btn-primary" style="padding: 5px 12px" value="跳转至该页"/>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

