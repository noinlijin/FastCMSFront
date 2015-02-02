goog.provide("vanke.picker.js.Picker");
goog.require("plugin.common.Common");

/**
 * Created by degas on 15/1/20.
 */
$(function () {
    /**
    //Run in this page
    $('.ajax-form').on('submit', function (event) {
        event.preventDefault();
        event.stopPropagation();
        AjaxRequestByForm(this);
        return false;
    });

    //Library
    function AjaxRequestByForm(formNode) {
        var elms = $(formNode).find('input,select,textarea');
        var data = {};
        elms.each(function () {
            var name = $(this).attr('name');
            if (name ==='') {
                return;
            }
            data[name] = $(this).attr(name);
        });
        $.ajax({
            url: $(formNode).attr('action'),
            type: $(formNode).attr('method'),
            data: data,
            success: SuccessHandle,
            error: ErrorHandle,
            dataType: 'JSON'
        });
    }
    function ErrorHandle (respond) {
        console.log(respond);
    }
    function SuccessHandle (respond) {
        console.log(respond);
    }
     */
});