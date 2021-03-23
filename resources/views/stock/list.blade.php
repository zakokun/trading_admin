<div class="pageHeader">
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="/stock/list" method="get"
          onreset="$(this).find('select.combox').comboxReset()">
        <div class="searchBar">
            <table class="searchContent">
                <input type="hidden" name="pageNum" value="{{$ls->currentPage()}}"/>
                <tr>
                    <td>
                        数字货币名称：<input type="text" value="{{$all['keyword']?? ""}}" name="keyword"/>
                    </td>
                </tr>
            </table>
            <div class="subBar">
                <ul>
                    <li>
                        <div class="button">
                            <div class="buttonContent">
                                <button type="reset">重置</button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="buttonActive">
                            <div class="buttonContent">
                                <button type="submit">检索</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </form>
</div>

<div class="pageContent">
    <div class="panelBar">
    </div>
    <table class="table" width="100%" layoutH="138">
        <thead>
        <tr>
            <th width="80">货币名称</th>
            <th width="80">开盘价</th>
            <th width="80">收盘价</th>
            <th width="80">最高价</th>
            <th width="80">最低价</th>
            <th width="110">成交量</th>
            <th width="170">时间</th>
            <th width="">动作</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($ls as $v)
            <tr target="sid_user" rel="5">
                <td>{{$v->symbol}}</td>
                <td>{{$v->open}}</td>
                <td>{{$v->close}}</td>
                <td>{{$v->low}}</td>
                <td>{{$v->high}}</td>
                <td>{{$v->volume}}</td>
                <td>{{$v->ftime}}</td>
                <td>
                    <a title="确定加入自选吗？" target="ajaxTodo" href="/stock/star?symbol={{$v->symbol}}" class="btnAdd">关注</a>
                    <a title="查看详情" target="navTab" href="demo_page4.html?id=xxx" class="btnInfo">详情</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="panelBar">
        <div class="pagination" targetType="navTab" totalCount="{{$ls->total()}}" numPerPage="{{$ls->perPage()}}"
             pageNumShown="10"
             currentPage="{{$ls->currentPage()}}">
        </div>
    </div>
</div>

<form id="pagerForm" action="/stock/list" method="get">
</form>
