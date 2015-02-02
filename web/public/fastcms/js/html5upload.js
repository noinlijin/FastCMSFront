goog.provide("fastcms.js.Html5upload");
goog.require("plugin.jquery.Jquery");


$(function(){
function getFileExt(path){
    var extArr = path.split(".");
    var ext = extArr[extArr.length-1];
    return ext;
}
$(".uploadComponent").each(function(){
    var comp = $(this);
    var targetUrl = comp.attr("uploadUrl");
    var targetFieldName = comp.attr("uploadField");
    var allowExt = JSON.parse(comp.attr("allow-ext"));
    var fileInput = comp.find("[type=file]");
    var uploadValue = comp.find(".upload-value");
    var progress = comp.find("progress")[0];
    var messageDiv = comp.find('.upload-message');
    var imageBox = comp.find('[attr-box=image-box]');
    var delteBtn = comp.find(".btn-delete-img");
    $(delteBtn).on("click",function(){
        $(imageBox).addClass("hide");
        comp.find('.upload-set-input').val("");
        messageDiv.text("");
    });

    fileInput.on("change",function(){
        $(progress).removeClass("hide");
        messageDiv.text("");
        var file = this.files[0];
        var ext = getFileExt(file.name);
        // if (allowExt.indexOf(ext)==-1){
        //     messageDiv.text('不允许的扩展名 '+ext);
        //     return;
        // }
        var data = new FormData();
        data.append(targetFieldName,file);
        if (comp.attr('imageProcessorName')){
            data.append('ProcessorName',comp.attr('imageProcessorName'));
        }
        $.ajax({
            url: targetUrl,
            type: "POST",
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(respond) {
                $(progress).addClass("hide");
                if (respond.type==="error"){
                    messageDiv.text(respond.msg);
                    return;
                }
                progress.value = 1;
                messageDiv.text("上传成功");
                imageBox.removeClass("hide");
                $(uploadValue).attr("href",respond.data);
                $(uploadValue).text(respond.data);
                comp.find('.upload-set-input').val(respond.data);
                comp.find("img").attr("src",respond.data).removeClass("hide");
            },
            error: function (error) {
                messageDiv.text(error.responseText);
            },
            xhr: function () {
                _xhr = $.ajaxSettings.xhr();
                if ( _xhr.upload ) {
                    _xhr.upload.onprogress = function (event) {
                        if ( event.lengthComputable ) {
                            if(event.loaded/event.total>0.9){
                                return;
                            }
                            progress.value = ( event.loaded / event.total || 0 );
                        }
                    }
                }
                return _xhr;
            }
        });
    });
});
});

