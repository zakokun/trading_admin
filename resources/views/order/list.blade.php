<div class="pageHeader">
    <form rel="pagerForm" onsubmit="return navTabSearch(this);" action="/order/list" method="get"
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
        <ul class="toolBar">
            <li><a class="add" href="/order/showAdd" target="dialog"><span>下单</span></a></li>
        </ul>
    </div>
    <table class="table" width="100%" layoutH="138">
        <thead>
        <tr>
            <th width="80">货币名称</th>
            <th width="80">成交价</th>
            <th width="80">数量</th>
            <th width="80">成交数量</th>
            <th width="110">订单状态</th>
            <th width="170">下单时间</th>
            <th width="">动作</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($ls as $v)
            <tr target="sid_user" rel="5">
                <td>{{$v->symbol}}</td>
                <td>{{$v->low}}</td>
                <td>{{$v->high}}</td>
                <td>{{$v->volume}}</td>
                <td>{{$v->ftime}}</td>
                <td>{{$v->ftime}}</td>
                <td>
                    <a title="确定取消订单吗？" target="ajaxTodo"
                       href="/order/reset?id={{$v->id}}" class="btnAttach">取消订单</a>
                    <a title="确定删除订单吗？" target="ajaxTodo"
                       href="/order/delete?id={{$v->id}}" class="btnDel">删除订单</a>
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
