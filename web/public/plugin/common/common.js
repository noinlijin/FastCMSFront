goog.provide("plugin.common.Common");
goog.require("plugin.jquery.Jquery");

/*
 jQuery serializeJson

 by lijin
 time 2013-5-28

 example

 var jsonval = $("form").serializeJson()
 */
$(function(){

    return $.fn.serializeJson = function() {
        var indexed_array, str, unindexed_array;
        unindexed_array = $(this).serializeArray();
        unindexed_array = unindexed_array.concat(
            $(this).find('input[type=checkbox]:has(:checked)').map(
                function() {
                    return {"name": this.name, "value": this.value}
                }).get()
        );
        str = $(this).serialize();
        indexed_array = {};
        $.map(unindexed_array, function(val, key) {
            if (indexed_array[val['name']]) {
                if ($.isArray(indexed_array[val['name']])) {
                    return indexed_array[val['name']].push(val['value']);
                } else {
                    return indexed_array[val['name']] = [indexed_array[val.name], val.value];
                }
            } else {
                return indexed_array[val['name']] = val['value'];
            }
        });
        return indexed_array;
    };

})

/**
 * Created by lijin on 14/12/9.
 *
 * 功能： 封装ajax，form，post提交
 *
 * 必要条件： jquery.js  jquery.serializeJson.js
 *
 * 示例
 * 1.Html格式:
 <form  class="form" data-action="/admin.php/ResellerAdminLogin/LoginAction"  method="post">
 <input class="form-control " name="username" type="text" placeholder="" >
 <input  type="submit"  value="提交">
 </form>
 *
 * 2.php提交示例：
 * TbfApi::AjaxSuccesRequest($msg,$url)
 * TbfApi::AjaxErrorRequest($msg,$url)
 */
$(function(){

    //ajax 提交
    var actionUrl = $(".form").attr("data-action");
    //$(".form").attr("action",actionUrl);
    $(".form").on("submit",function(){
        if($("this").attr("action") === ""){
            return;
        }
        $("[type='submit']").attr("disabled","disabled");
        HTTP(actionUrl,$(this).serializeJson());
        return false;
    })

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
                    alert(jqXHR.responseText);
                }
            });
        }catch(err){
            $("[type='submit']").removeAttr("disabled");
            console.log(err);
        }
    }

    function GetAjaxReturn(res){
        if(res.err){
            alert(res.msg);
            return false;
        }else{
            if(res.msg != null){
                alert(res.msg);
            }
            if(res.url == null){
                return;
            }
            location.href=res.url;
        }
    }

})