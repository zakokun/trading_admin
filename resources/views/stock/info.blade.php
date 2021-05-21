<div class="pageHeader">
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="/stock/info" method="get"
          onreset="$(this).find('select.combox').comboxReset()">
        <div class="searchBar">
            <table class="searchContent">
                <input type="hidden" name="page"/>
                <tr>
                    <td>
                        数字货币名称：<input type="text" value="{{$symbol??""}}" name="symbol"/>
                    </td>
                    <td class="dateRange">
                        建档日期:
                        <input name="start" class="date readonly textInput" readonly="readonly" type="text"
                               value="{{$start?? ""}}"/>
                        <span class="limit">-</span>
                        <input name="end" class="date readonly textInput" readonly="readonly" type="text"
                               value="{{$end?? ""}}"/>
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
                    data: ['{{$symbol}}']
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
                        data: [
                            @foreach ($ls as $k=> $v)
                                    @if($k!=0)
                                    {{","}}
                                    @endif
                            '{{date("m-d",intval($v->ts))}}'
                            @endforeach
                        ]
                    }
                ],
                yAxis: [
                    {
                        type: 'value',
                        axisLabel: {
                            formatter: '{value} 💲 '
                        }
                    }
                ],
                series: [
                    {
                        name: '{{$symbol}}',
                        type: 'line',
                        data: [@foreach ($ls as $k=> $v)
                                @if($k!=0)
                                {{","}}
                                @endif
                            '{{$v->open}}'
                            @endforeach],
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
<form id="pagerForm" action="/stock/info" method="get">
</form>