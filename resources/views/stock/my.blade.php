<div class="pageHeader">
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="/stock/myStar" method="get"
          onreset="$(this).find('select.combox').comboxReset()">
        <div class="searchBar">
            <table class="searchContent">
                <input type="hidden" name="page" value="{{$ls->currentPage()}}"/>
                <tr>
                    <td>
                        数字货币名称：<input type="text" value="{{$all['keyword']?? ""}}" name="keyword"/>
                    </td>
                    <td>
                        <div class="buttonActive">
                            <div class="buttonContent">
                                <button type="submit">检索</button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>

                </tr>
            </table>
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
            <th width="170">关注时间</th>
            <th width="150">关注以来涨跌幅</th>
            <th width="">动作</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($ls as $v)
            <tr target="sid_user" rel="5">
                <td>{{$v->myStock()->symbol}}</td>
                <td>{{$v->myStock()->open}}</td>
                <td>{{$v->myStock()->close}}</td>
                <td>{{$v->myStock()->low}}</td>
                <td>{{$v->myStock()->high}}</td>
                <td>{{$v->ctime}}</td>
                <td>{{$v->rateFromStar()*100}}%</td>
                <td>
                    <a title="查看详情" target="navTab" href="/stock/info?symbol={{$v->myStock()->symbol}}"
                       class="btnInfo">详情</a>
                    <a title="确定{{$v->myStock()->hasStar()?'取消关注':'关注'}}吗？" target="ajaxTodo"
                       href="/stock/star?symbol={{$v->symbol}}" class="{{$v->myStock()->hasStar()?'btnDel':'btnAdd'}}">关注</a>

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

<form id="pagerForm" action="/stock/myStar" method="get">
</form>
