
<script src="/public/plugin/closure/closure/goog/base.js"></script>
<script src="/public/plugin/jquery/jquery.js"></script>


<div style="margin: 0 auto">
    <div id="video-info" data-video="<?php eh($data['Attach'])?>" data-img="<?php eh($data['Thumb'])?>"></div>
</div>
<script src="/public/plugin/jwplayer/jwplayer.js"></script>
<script src="/public/plugin/jwplayer/jwplayer.html5.js"></script>
<script>
    var video = $("#video-info").attr("data-video");
    var img = $("#video-info").attr("data-img");
    jwplayer("video-info").setup({
        width: 784,
        flashplayer: "/public/plugin/jwplayer/jwplayer.flash.swf",
        height: 450,
        autostart: true,
        file: video,
        image:img,
        primary: "flash"
    });
</script>


