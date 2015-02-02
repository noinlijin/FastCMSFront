goog.provide("fastcms.js.FastCMS");
goog.require("plugin.jquery.Jquery");

goog.require("plugin.common.Common");
goog.require("plugin.bootstrap.js.Bootstrap");
goog.require("fastcms.js.BootstrapDatetimepicker");


goog.require("plugin.ueditor.UeditorAll");
goog.require("plugin.ueditor.lang.cn.ZhCn");

goog.require("plugin.ueditor.AddIn");

goog.require("fastcms.js.JqueryTreeGrid");
goog.require("plugin.mustache.Mustache");


$(".textarea-editor").each(function(i){
    var editor = UE.getEditor($(this).attr("id"));
});

$(function(){
    //tree table
    if($('.tree').length>0){
        $('.tree').treegrid({
            'treeColumn': 2,
            'expanderExpandedClass': 'fa fa-angle-down',
            'expanderCollapsedClass': 'fa fa-angle-right'
        });
    }

    var actionUrl = $("#login-form").attr("data-action");
    $("#login-form").attr("action",actionUrl);

    $(".ajax-form").on("submit",function(){
        if($("this").attr("action") === ""){
            return;
        }
        $("[type='submit']").attr("disabled","disabled");
        HTTP($(this).attr("action"),$(this).serializeJson());
        return false;
    })

    //if(!isChorme()){
    //    location.href="/downloadChrome.html";
    //}
    $("[data-toggle=tooltip]").tooltip();

    if ( $("#editor")[0] ) {
        UE.getEditor('editor').addListener("contentChange",function(){
            $("#editor").val(UE.getEditor('editor').getContent());
        });
    }

    //栏目树
    var liTemplate = "<li node-id='{{Id}}' p-id='{{Pid}}' node-type='{{Type}}' class='sub-menu dcjq-parent-li'><a href='javascript:;'><span>{{Name}}</span></a></li>";
    var toggleHandle = "<span class='fa  fa-plus'></span><span class='fa fa-minus'></span>&nbsp;";
    if ( $(".category-tree-list")[0] ) {
        $(".category-tree-list").each(function(){
            var treeWrap = $(this);
            for ( var i = 0; i < allCategory.length; i++ ) {
                GenerateChildNode(treeWrap, allCategory[i]);
            }
        });
        ActiveNode(window.currentCategoryId);
    }

    $(".category-tree-list li a").on("click",function(event){
        if ( !$(this).parent().hasClass("has-child") ) {
            return;
        }
        event.stopPropagation();
        toggleNode($(this).parent());
    });

    $("#category-tree-open-all").on("click",function(){
        var node = $(this);
        $(".category-tree-list").find("li").each(function(){
            if ( $(this).hasClass("node-close") ) {
                $(this).removeClass("node-close").addClass("node-open");
                node.html("全部展开");
            } else {
                $(this).addClass("node-close").removeClass("node-open");
                node.html("全部折叠");
            }
        })
    });

    function GenerateChildNode ( father, nodeData ) {
        father.append(Mustache.render(liTemplate,nodeData));
        var node = father.find("li[node-id="+nodeData.Id+"]");
        if ( nodeData.Type != "目录" ) {
            var a = node.find("a").eq(0);
            //a.attr("href","/admin.php/Document/ListPage?CatId="+nodeData.Id);
            a.attr("href","/?n=FastCMS.Admin.Document.ListPage&CatId="+nodeData.Id);
            a.prepend("<span class='fa "+GetNodeClass(nodeData.Type)+"'></span>  ");
            return;
        }
        node.addClass("has-child node-close");
        node.find(">a").eq(0).prepend(toggleHandle);
        node.append("<ul class='sub'></ul>");
        var subTreeWrap= node.find("ul");
        if ( nodeData.Children == null ) {
            return;
        }
        for ( var i = 0; i < nodeData.Children.length; i++ ) {
            GenerateChildNode(subTreeWrap, nodeData.Children[i]);
        }
    }

    function GetNodeClass(nodeDataType){

        if ( nodeDataType == "单页面" ) {
            return "fa-file";
        }else  if ( nodeDataType == "单链接" ) {
            return "fa-link";
        }else{
            return "fa-list-alt";
        }
    }

    function ActiveNode (id) {
        $(".category-tree-list").each(function(){
            $(this).find(".active").each(function(){
                $(this).removeClass("active");
            });
            var targetNode = $(this).find("li[node-id="+id+"]");
            targetNode.find(">a").eq(0).focus();
            targetNode.addClass("active");
            targetNode.parents("li").each(function(){
                toggleNode(this);
            });
        });
    }

    function toggleNode (target) {
        if ( $(target).hasClass("node-close") ) {
            $(target).removeClass("node-close").addClass("node-open");
        } else {
            $(target).addClass("node-close").removeClass("node-open");
        }
    }

    function OpenAllNode () {
        $(".category-tree-list").find(".node-close").each(function(){
            $(this).removeClass("node-close").addClass("node-open");
        });
    }
    
    function CloseAllNode () {
        $(".category-tree-list").find(".node-close").each(function(){
            $(this).removeClass("node-open").addClass("node-close");
        });
    }
    //排序
    if ($('#list-order-btn')[0]){
        $('#list-order-btn').on('click',function(){
            var data = {};
            $(".list-order-row").each(function(){
                var $self = $(this);
                data[$self.attr('data-id')] = $self.val();
            });
            $.post($('#list-order-btn').attr('postUrl'),{"data":JSON.stringify(data)},function(){
                location.reload();
            });
        });
    }

    //date-time-picker
    if($('.date-time-picker-input').length>0){
        $('.date-time-picker-input').datetimepicker({

            language:  'zh-CN',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 1,
            forceParse: 0,
            showMeridian: 1,
            minView: 0
        });
    }


    $(".url-get").on("click",function(){
        $(this).attr("disabled","disabled");
        var url = $(this).attr("data-url");
        if($(this).hasClass("new-window")){
            window.open(url,"_blank")
            $(this).removeAttr("disabled");
            return ;
        }
        location.href = url; 
    });

    $(".url-post").on("click",function(){
        $(this).attr("disabled","disabled");
        var url = $(this).attr("data-url");
        HTTP(url,"");
    });

    function reloadCaptch(){
        var url = $('#login-captcha-img').attr("data-url");
        $('#login-captcha-img').attr('src',url+"nocache="+Math.random());
    }
    if ($('.login-captcha-reload')[0]){
        $(".login-captcha-reload").on("click",reloadCaptch);
        reloadCaptch();
    }

    $('.select-post select').on('change',function(){
        var _this = this;
        var select = $(this);
        var msg = $(this).parent().find('.msg');
        var targetUrl = select.attr('targetUrl');
        var targetKey = select.attr('name');
        var data = {};
        data[targetKey] = select.val();
        var cacheValue = select.attr('data-cache');
        if ( $(this).attr('isBusy') === 'true' ) {
            return;
        }
        $(this).attr('isBusy','true');
        msg.text('...');
        $.post(targetUrl,data, function (responed) {
            msg.text('');
            if ( responed.type === "error" && responed.msg !== '' ) {
                $(_this).removeAttr('isBusy');
                select.val(cacheValue);
                alert(responed.msg);
            } else {
                select.attr('data-cache',data[targetKey]);
                msg.addClass('fa fa-check');
                setTimeout(function () {
                    $(_this).removeAttr('isBusy');
                    msg.removeClass('fa fa-check');
                },800);
            }
        },'json');
    });

    if ($('#Select2Level-1')[0]){
        var select2LevelOptionTemplate = "{{#op}}<option value='{{Name}}'>{{ShowName}}</option>{{/op}}";
        $("#Select2Level-1").on("change",function(){
            var value1 = $(this).val();
            for ( var i = 0; i < select2LevelOptionList.length; i++ ) {
                if (select2LevelOptionList[i]['Name']==value1){
                    var optionList = select2LevelOptionList[i]['OptionList'];
                    var html = Mustache.render(select2LevelOptionTemplate,{"op":optionList});
                    $('#Select2Level-2').html(html);
                }
            }
        });
    }

    //Vanke 选择课-班级
    if ( $('#LessonInGroup')[0] ) {
        var cellTpl = (function () {/*
<tr class="LessonInGroup-cell" data-lesson-id="{{LessonId}}">
<td>
<select class="LessonInGroup-WeekDayType form-control input-sm">
<option seleced="selected" value="周一">周一</option>
<option value="周二">周二</option>
<option value="周三">周三</option>
<option value="周四">周四</option>
<option value="周五">周五</option>
<option value="周六">周六</option>
<option value="周日">周日</option>
</select>
</td>
<td>
<select class="LessonInGroup-TeacherId form-control input-sm">
{{#TeacherList}}
<option value="{{Id}}">{{Name}}</option>
{{/TeacherList}}
</select>
</td>
<td>
<input value="{{Subject}}" class="LessonInGroup-Subject form-control input-sm" type="text" />
</td>
<td>
<center>
<input value="{{StartTime}}" class="LessonInGroup-StartTime form-control input-sm" type="text" />
</center>
</td>
<td>
<center>
<input value="{{EndTime}}" class="LessonInGroup-EndTime form-control input-sm" type="text" />
</center>
</td>
<td style="width: 140px;">
<a href="javascript:;" class="LessonInGroup-Edit btn btn-xs btn-primary"> <i class="fa fa-check-circle"></i> 提交修改</a>
<a href="javascript:;" class="LessonInGroup-Delete btn btn-xs btn-danger">
<span class="fa  fa-minus-square-o"></span>
删除
</a>
</td>
</tr>
     */}).toString().match(/[^]*\/\*([^]*)\*\/}$/)[1];
        //提交修改
        $('#LessonInGroup').on('click','.LessonInGroup-Edit', function () {
            if ( $(this).attr('isBusy') === 'true' ) {
                return;
            }
            $(this).attr('isBusy','true');
            $(this).text('...');
            var _this = this;
            var cell = $(this).parents('tr')[0];
            $.post('/?n=vk.Admin.Lesson.EditApi',{
                LessonId: $(cell).attr('data-lesson-id'),
                Subject: $(cell).find('.LessonInGroup-Subject').val(),
                StartTime: $(cell).find('.LessonInGroup-StartTime').val(),
                EndTime: $(cell).find('.LessonInGroup-EndTime').val(),
                WeekDayType: $(cell).find('.LessonInGroup-WeekDayType').val(),
                GroupId: window.GroupId,
                TeacherId: $(cell).find('.LessonInGroup-TeacherId').val()
            }, function (responed) {
                if ( responed.type === "error" ) {
                    $(_this).text('提交修改');
                    $(_this).removeAttr('isBusy');
                    alert(responed.msg);
                } else {
                    $(cell).attr('data-lesson-id',responed.data.LessonId);
                    $(_this).html('<span class="fa fa-check"></span>');
                    $(_this).removeClass('btn-primary');
                    $(_this).addClass('btn-success');
                    setTimeout(function () {
                        $(_this).text('提交修改');
                        $(_this).removeAttr('isBusy');
                        $(_this).addClass('btn-primary');
                        $(_this).removeClass('btn-success');
                    },800);
                }
            },'json');
        });

        //自动提交
        $('#LessonInGroup').on('change','input,select', function () {
            var cell = $(this).parents('tr')[0];
            $(cell).find('.LessonInGroup-Edit').trigger('click');
        });

        //删除课程
        $('#LessonInGroup').on('click','.LessonInGroup-Delete', function () {
            if ( $(this).attr('isBusy') === 'true' ) {
                return;
            }
            $(this).attr('isBusy','true');
            $(this).text('...');
            var _this = this;
            var cell = $(this).parents('tr')[0];
            $.post('/?n=vk.Admin.Lesson.DeleteGroupRefApi', {
                    LessonId:$(cell).attr('data-lesson-id')
            }, function (responed) {
                if ( responed.msg !== "" ) {
                    $(_this).html('<span class="fa fa-minus-circle"></span>删除');
                    $(_this).removeAttr('isBusy');
                    alert(responed.msg);
                } else {
                    $(_this).html('<span class="fa fa-check"></span>');
                    $(cell).hide('fast');
                }
            },'json');
        });

        //添加新课程
        $("#LessonInGroup-AddNew").on('click', function () {
            if ( $(this).attr('isBusy') === 'true' ) {
                return;
            }
            $(this).attr('isBusy','true');
            $(this).text('...');
            var _this = this;
            var cell = $(this).parents('tr')[0];
            var request = {
                Subject: '学科',
                StartTime: '9:30',
                EndTime: '10:30',
                WeekDayType: '周一',
                GroupId: window.GroupId,
                TeacherId: window.TeacherList[0].Id,
                TeacherList: window.TeacherList
            };
            $.post('/?n=vk.Admin.Lesson.AddNewToGroupRefApi',request, function (responed) {
                if ( responed.type === "error" ) {
                    $(_this).text('新增课程');
                    $(_this).removeAttr('isBusy');
                    alert(responed.msg);
                } else {
                    $(_this).html('<span class="fa fa-check"></span>');
                    setTimeout(function () {
                        $(_this).text('新增课程');
                        $(_this).removeAttr('isBusy');
                    },800);
                    request.LessonId = responed.data.LessonId;
                    var t = Mustache.render(cellTpl,request);
                    $(cell).before(t);
                }
            },'json');
        })
    }


    function HTTP(url,data){
        try{
            $.ajax({
                url:url,
                data: data,
                dataType: "json",
                type: "post",
                success: function(res){
                    $("[type='submit']").removeAttr("disabled");
                    GetAjaxReturn(res);
                },
                error: function(jqXHR,textStatus,errorThrown ){
                    $("[type='submit']").removeAttr("disabled");
                    console.log(jqXHR.responseText);
                }
            });
        }catch(err){
            $("[type='submit']").removeAttr("disabled");
            console.log(err);
        }
    }


    function GetAjaxReturn(res){
        if (res.type===undefined){
            alert("协议错误229");
            return ;
        }
        if (res.type === "error"){
            alert(res.msg);
            return ;
        }
        if (res.type === "redirect"){
            location.href=res.url;
            return ;
        }
        return;
    }

    //identicon
    window.onload = function () {
        if($("#headimg").length>0){
            new Identicon('headimg', $("#headimg").attr("data-id"), 33);
        }
    }
});


/**
 * 系统cpu，内存数据，网络上行，下行.
 */
$(document).ready(function(){
    var className = $("#GroupListSelect").find("option:selected").data('select');
    var StudyStartTime = $("#GroupListSelect").find("option:selected").data('starttime');
    var StudyEndTime = $("#GroupListSelect").find("option:selected").data('endtime');
    $("#GroupListSelect").change(function(){
        className = $("#GroupListSelect").find("option:selected").data('select');
        StudyStartTime = $("#GroupListSelect").find("option:selected").data('starttime');
        StudyEndTime = $("#GroupListSelect").find("option:selected").data('endtime');
        if(className == "兴趣班"){
            InputDefaultTime(StudyStartTime,StudyEndTime);
            return;
        }
        ClearDefaultTime();
    });
    if(className == "兴趣班"){
        InputDefaultTime(StudyStartTime,StudyEndTime);
        return;
    }
    ClearDefaultTime();
})

function InputDefaultTime(startTime,endTime){
    $("#StudyStartTime").val(startTime);
    $("#StudyEndTime").val(endTime);
}

function ClearDefaultTime(){
    $("#StudyStartTime").val("");
    $("#StudyEndTime").val("");
}
