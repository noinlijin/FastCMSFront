<div class="video-player" data-url="<?= $VideoSrc ?>">
    <video width="320" height="240" style="display: none;" controls ></video>
    <div class="btn-group" role="group">
        <button class="btn btn-xs btn-warning" onclick="
        var player =this.parentElement.parentElement;
        var video = player.querySelector('video');
        video.src = player.dataset.url;
        video.style.display = 'block';
        video.play();
        ">播放视频</button>
        <button class="btn btn-xs btn-default" onclick="
        var player =this.parentElement.parentElement;
        var video = player.querySelector('video');
        video.style.display = 'none';
        video.src = '';
        ">关闭视频</button>
    </div>
</div>
