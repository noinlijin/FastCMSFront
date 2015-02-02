goog.provide("vanke.front.js.Index");
goog.require("plugin.common.Common");
goog.require("plugin.unslider.Unslider");
goog.require("plugin.fancybox.JqueryFancybox");
$(function(){
    //slider
    var unslider = $('.banner').unslider({
        speed: 500,               //  The speed to animate each slide (in milliseconds)
        delay: 3000,              //  The delay between slide animations (in milliseconds)
        complete: function() {},  //  A function that gets called after every slide animation
        keys: true,               //  Enable keyboard (left, right) arrow shortcuts
        //dots: true,               //  Display dot navigation
        fluid: false              //  Support responsive design. May break non-responsive designs
    });
    $('.unslider-arrow').click(function() {
        var fn = this.className.split(' ')[1];

        //  Either do unslider.data('unslider').next() or .prev() depending on the className
        unslider.data('unslider')[fn]();
    });

    $(".slider-one").on("click",function(){
        if($(this).attr("data-url") != "#"){
            window.open($(this).attr("data-url"));
            return;
        }
        return;
    })


    //scorll 二级栏目滑动
    $(".lateral-nav-item").on("click",function(){
        id = $(this).attr('data-id');
        var scroll_offset = $("#"+id).offset();
        $("body,html").animate({
            scrollTop: scroll_offset.top
        }, 1000);
    })

    //返回顶部
    var back = $(".back-top-btn");
    $(window).scroll(function(e) {
        //若滚动条离顶部大于100元素
        if($(window).scrollTop()>100){
            back.show();
            $(".bread").css("top",0);
        }
        else{
            var scrollNum =$(window).scrollTop();
            $(".bread").css("top",100-scrollNum);
            back.hide();
        }
    });
    back.on("click",function(){
        $('body,html').animate({scrollTop:0},1000);
    })

    //fancybox
    $(".video-val").fancybox({
        maxWidth	: 800,
        maxHeight	: 480,
        fitToView	: false,
        width		: '70%',
        height		: '70%',
        autoSize	: false,
        closeClick	: false,
        openEffect	: 'none',
        closeEffect	: 'none',
        type		: 'iframe'
    });


    //active
    $("#ActiceList").on("click",".detail-btn",function(){

        var item = $(this).closest(".item-active");

        if(item.hasClass("active")){
            item.removeClass("active");
            item.find(".detail").slideUp();
            console.log(1);
        }else{
            console.log(2);
            $("#ActiceList").find(".item-active").removeClass("active");
            $("#ActiceList").find(".detail").stop().slideUp();
            item.addClass("active");
            item.find(".detail").slideDown();
        }



    })
});

