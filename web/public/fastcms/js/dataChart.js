goog.provide("fastcms.js.DataChart");
goog.require("plugin.jquery.Jquery");

/**
 * 侧边栏系统数据监测
 * Created by joy on 15-1-13.
 */
$(document).ready(function(){
    var text = $("#cpu-usage").text();
    var process = text.substring(0, text.length-1);
    var canvas = document.getElementById("cpu-usage");
    var context = canvas.getContext('2d');
    context.clearRect(0, 0, 40, 40);
    // ***开始画一个灰色的圆
    context.beginPath();
    // 坐标移动到圆心
    context.moveTo(20, 20);
    // 画圆,圆心是x,x,半径x,从角度0开始,画到2PI结束,最后一个参数是方向顺时针还是逆时针
    context.arc(20, 20, 20, 0, Math.PI * 2, false);
    context.closePath();
    // 填充颜色
    context.fillStyle = '#ddd';
    context.fill();
    // ***灰色的圆画完
    // 画进度
    context.beginPath();
    // 画扇形的时候这步很重要,画笔不在圆心画出来的不是扇形
    context.moveTo(20, 20);
    // 跟上面的圆唯一的区别在这里,不画满圆,画个扇形
    context.arc(20, 20, 20, Math.PI, Math.PI + Math.PI * 2 * process / 100, false);
    context.closePath();
    context.fillStyle = '#e74c3c';
    context.fill();

    // 画内部空白
    context.beginPath();
    context.moveTo(20, 20);
    context.arc(20, 20, 18, 0, Math.PI * 2, true);
    context.closePath();
    context.fillStyle = 'rgba(255,255,255,1)';
    context.fill();

    // 画一条线
    context.beginPath();
    context.arc(20, 20, 16.5, 0, Math.PI * 2, true);
    context.closePath();
    // 与画实心圆的区别,fill是填充,stroke是画线
    context.strokeStyle = '#ddd';
    context.stroke();

    //在中间写字
    context.font = "bold 9pt Arial";
    context.fillStyle = '#e74c3c';
    context.textAlign = 'center';
    context.textBaseline = 'middle';
    context.moveTo(20, 20);
    context.fillText(text, 20, 20);
});

var c = document.getElementById("ram-usage");
var ctx = c.getContext("2d");
var ram_text = $("#ram-usage").text();
var ram_process = ram_text.substring(0,ram_text.length-1);
function drew(){
    ctx.clearRect(0,0,40,40);
    //画背景
    ctx.beginPath();
    ctx.arc(20,20,20,0,Math.PI,true);
    ctx.fillStyle="#ddd";
    ctx.fill();
    //画进度
    ctx.beginPath();
    ctx.moveTo(20,20);
    ctx.arc(20,20,20,Math.PI,Math.PI+Math.PI * ram_process/100,false);
    ctx.fillStyle="#1fb5ad"
    ctx.fill();
    //画中间扇形
    ctx.beginPath();
    ctx.arc(20,20,10,0,Math.PI,true);
    ctx.closePath();
    ctx.fillStyle="#333";
    ctx.fill();
    //中间的字
    ctx.font = "bold 9pt Arial";
    ctx.fillStyle = '#1fb5ad';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.translate(20,30);
    ctx.fillText(ram_text, 0, 0);
}
drew();

var disk = document.getElementById("disk-usage");
var disk_context = disk.getContext("2d");
function drew_disk_usage(){
    disk_context.clearRect(0,0,50,50);
    //画小时时刻
    disk_context.beginPath();
    disk_context.translate(25,25);
    for(var i = 0; i < 60 ; i += 5){
        disk_context.fillRect(20, 0, 3, 1);
        disk_context.fillStyle="#fff";
        disk_context.rotate(Math.PI/6);
    }
    disk_context.closePath();
    disk_context.beginPath();
    for(var j = 0; j < 60 ; j += 15){
        disk_context.fillRect(20,0,5,1);
        disk_context.fillStyle="#fff";
        disk_context.rotate(Math.PI/2);
    }
    disk_context.closePath();
    //画进度条
    var disk_usage = $("#disk-usage").text();
    var disk_process = disk_usage.substring(0,disk_usage.length-1);
    disk_context.beginPath();
    disk_context.moveTo(0,0);
    disk_context.arc(0,0,16,Math.PI,Math.PI + Math.PI * 2 * disk_process / 100,false);
    disk_context.closePath();
    disk_context.fillStyle="#1fb5ad";
    disk_context.fill();
    disk_context.beginPath();
    disk_context.arc(0,0,13,0,Math.PI * 2,false);
    disk_context.closePath();
    disk_context.fillStyle="#3C3C44";
    disk_context.fill();

    //中间的字
    disk_context.font = "bold 9pt Arial";
    disk_context.fillStyle = '#1fb5ad';
    disk_context.textAlign = 'center';
    disk_context.textBaseline = 'middle';
    disk_context.fillText(disk_usage, 0, 0);
}
drew_disk_usage();

//ajax请求
function getServerData()
{
    $.ajax({url:"/?n=FastCMS.Admin.Category.GetServerRamUsageAction",success:function(result){
        console.log(result);
    }});
}
/*setInterval(getServerData,1000);*/
//扇形
CanvasRenderingContext2D.prototype.sector = function (x, y, radius, sDeg, eDeg) {
    // 初始保存
    this.save();
    // 位移到目标点
    this.translate(x, y);
    this.beginPath();
    // 画出圆弧
    this.arc(0,0,radius,sDeg, eDeg);
    // 再次保存以备旋转
    this.save();
    // 旋转至起始角度
    this.rotate(eDeg);
    // 移动到终点，准备连接终点与圆心
    this.moveTo(radius,0);
    // 连接到圆心
    this.lineTo(0,0);
    // 还原
    this.restore();
    // 旋转至起点角度
    this.rotate(sDeg);
    // 从圆心连接到起点
    this.lineTo(radius,0);
    this.closePath();
    // 还原到最初保存的状态
    this.restore();
    return this;
}

// 画cpu的平均负载率
function drawCpuAverageLoad(){
    var one = $(".one-minute").data('percent');
    var five = $(".five-minute").data('percent');
    var fiveteen = $(".fiveteen-minute").data('percent');
    $(".one-minute").css({"height":one,"background":changeBackground(one)});
    $(".five-minute").css({"height":five,"background":changeBackground(five)});
    $(".fiveteen-minute").css({"height":fiveteen,"background":changeBackground((fiveteen))});
}
drawCpuAverageLoad();

// 判定背景颜色
function changeBackground(averageLoad){
    var background = "#aec785";
    var percent = parseInt(averageLoad.substring(0,averageLoad.length-1));
    if( percent < 20 && percent >= 10) {
        background = "#a4ce5f";
    }else if( 20 <= percent && percent < 30 ) {
        background = "#87d20b";
    }else if( 30 <= percent && percent < 50) {
        background = "#5e9405";
    }else if( percent >= 50 && percent < 80 ) {
        background = "#fdd752";
    }else if ( percent >= 80 && percent < 100) {
        background = "#fda852";
    }else if ( percent >= 100 && percent < 150) {
        background = "#fd8652";
    }else if ( percent >= 150 ) {
        background = "#fd5b52";
    }
    return background;
}

