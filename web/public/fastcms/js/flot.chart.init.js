goog.provide("fastcms.js.FlotChartInit");
goog.require("plugin.jquery.Jquery");
goog.require("puging.floatChat.JqueryFlot");
goog.require("plugin.floatChart.JqueryFlotPieResize");


var data7_1 = [
    [1354586000000, 253],
    [1354587000000, 465],
    [1354588000000, 498],
    [1354589000000, 383],
    [1354590000000, 280],
    [1354591000000, 108],
    [1354592000000, 120],
    [1354593000000, 474],
    [1354594000000, 623],
    [1354595000000, 479],
    [1354596000000, 788],
    [1354597000000, 836]
];
var data7_2 = [
    [1354586000000, 253],
    [1354587000000, 465],
    [1354588000000, 498],
    [1354589000000, 383],
    [1354590000000, 280],
    [1354591000000, 108],
    [1354592000000, 120],
    [1354593000000, 474],
    [1354594000000, 623],
    [1354595000000, 479],
    [1354596000000, 788],
    [1354597000000, 836]
];
$(function() {
    if($("#visitors-chart #visitors-container").length<1){
        return;
    }
    $.plot($("#visitors-chart #visitors-container"), [{
        data: data7_2,
        label: "新增人数",

        points: {
            show: true
        },
        lines: {
            show: true
        },
        yaxis: 2
    }
    ],
        {
            series: {
                lines: {
                    show: true,
                    fill: false
                },
                points: {
                    show: true,
                    lineWidth: 2,
                    fill: true,
                    fillColor: "#ffffff",
                    symbol: "circle",
                    radius: 5
                },
                shadowSize: 0
            },
            grid: {
                hoverable: true,
                clickable: true,
                tickColor: "#f9f9f9",
                borderWidth: 1,
                borderColor: "#eeeeee"
            },
            colors: ["#79D1CF", "#E67A77"],
            tooltip: true,
            tooltipOpts: {
                defaultTheme: false
            },
            xaxis: {
                mode: "time"
            },
            yaxes: [{
                /* First y axis */
            }, {
                /* Second y axis */
                position: "left" /* left or right */
            }]
        }
    );
});
