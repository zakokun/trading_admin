<div class="pageHeader">
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="/stock/list" method="get"
          onreset="$(this).find('select.combox').comboxReset()">
        <div class="searchBar">
            <table class="searchContent">
                <input type="hidden" name="page"/>
                <tr>
                    <td>
                        数字货币名称：<input type="text" value="{{$all['keyword']?? ""}}" name="keyword"/>
                    </td>
                    <td class="dateRange">
                        建档日期:
                        <input name="startDate" class="date readonly textInput" readonly="readonly" type="text"
                               value=""/>
                        <span class="limit">-</span>
                        <input name="endDate" class="date readonly textInput" readonly="readonly" type="text" value=""/>
                    </td>
                    <td>
                        <div class="buttonActive">
                            <div class="buttonContent">
                                <button type="submit">检索</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </form>
</div>

<div class="pageContent">
    <div id="stock_info" style="height: 400px;"></div>
    <script type="text/javascript">
        (function ($) {
            var myChart = echarts.init(document.getElementById('stock_info'));
            // 指定图表的配置项和数据
            var option = {
                title: {
                    text: '价格走势图',
                    subtext: ''
                },
                tooltip: {
                    trigger: 'axis'
                },
                legend: {
                    data: ['btcusdt', 'bchusdt']
                },
                toolbox: {
                    show: true,
                    feature: {
                        mark: {show: true},
                        dataView: {show: true, readOnly: false},
                        magicType: {show: true, type: ['line', 'bar']},
                        restore: {show: true},
                        saveAsImage: {show: true}
                    }
                },
                calculable: true,
                xAxis: [
                    {
                        type: 'category',
                        boundaryGap: false,
                        data: ['周一', '周二', '周三', '周四', '周五', '周六', '周日']
                    }
                ],
                yAxis: [
                    {
                        type: 'value',
                        axisLabel: {
                            formatter: '{value} °C'
                        }
                    }
                ],
                series: [
                    {
                        name: 'btcusdt',
                        type: 'line',
                        data: [11, 11, 15, 13, 12, 13, 10],
                        markPoint: {
                            data: [
                                {type: 'max', name: '最大值'},
                                {type: 'min', name: '最小值'}
                            ]
                        },
                        markLine: {
                            data: [
                                {type: 'average', name: '平均值'}
                            ]
                        }
                    },
                    {
                        name: 'bchusdt',
                        type: 'line',
                        data: [1, -2, 2, 5, 3, 2, 0],
                        markPoint: {
                            data: [
                                {name: '周最低', value: -2, xAxis: 1, yAxis: -1.5}
                            ]
                        },
                        markLine: {
                            data: [
                                {type: 'average', name: '平均值'}
                            ]
                        }
                    }
                ]
            };
            // 使用刚指定的配置项和数据显示图表。
            myChart.setOption(option);
        })(jQuery);
    </script>
</div>
<form id="pagerForm" action="/stock/list" method="get">
</form>