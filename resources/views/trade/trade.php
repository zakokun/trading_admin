<form id="pagerForm" method="post" action="demo_page1.html">
    <input type="hidden" name="status" value="${param.status}">
    <input type="hidden" name="keywords" value="${param.keywords}"/>
    <input type="hidden" name="pageNum" value="1"/>
    <input type="hidden" name="numPerPage" value="${model.numPerPage}"/>
    <input type="hidden" name="orderField" value="${param.orderField}"/>
</form>

<div class="pageHeader">
    <form onsubmit="return navTabSearch(this);" action="demo_page1.html" method="post"
          onreset="$(this).find('select.combox').comboxReset()">
        <div class="searchBar">
            <!--<ul class="searchContent">
                <li>
                    <label>我的客户：</label>
                    <input type="text"/>
                </li>
                <li>
                <select class="combox" name="province">
                    <option value="">所有省市</option>
                    <option value="北京">北京</option>
                    <option value="上海">上海</option>
                    <option value="天津">天津</option>
                    <option value="重庆">重庆</option>
                    <option value="广东">广东</option>
                </select>
                </li>
            </ul>
            -->
            <table class="searchContent">
                <tr>
                    <td>
                        数字货币名称：<input type="text" name="keyword"/>
                    </td>
                    <td class="dateRange">
                        价格区间:
                        <input type="text" name="keyword"/>
                        <span class="limit">-</span>
                        <input type="text" name="keyword"/>
                    </td>
                    <td class="dateRange">
                        起止日期:
                        <input name="startDate" class="date readonly" readonly="readonly" type="text" value="">
                        <span class="limit">-</span>
                        <input name="endDate" class="date readonly" readonly="readonly" type="text" value="">
                    </td>
                    <td>
                        <select class="combox" name="province" ref="demo_combox_city"
                                refUrl="demo/combox/city_{value}.html" reset-value="bj">
                            <option value="all">所有状态</option>
                            <option value="bj">北京</option>
                            <option value="sh">上海</option>
                            <option value="zj">浙江省</option>
                        </select>
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
        <ul class="toolBar">
            <li><a class="add" href="/trade/showAdd" target="dialog"><span>下单交易</span></a></li>
            <li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab"
                   title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>
        </ul>
    </div>
    <table class="table" width="100%" layoutH="138">
        <thead>
        <tr>
            <th width="80"></th>
            <th width="120">货币名称</th>
            <th width="80">交易所名称</th>
            <th width="100">成交价</th>
            <th width="80">成交数量</th>
            <th width="80">状态</th>
            <th width="80">下单时间</th>
            <th width="80">完成时间</th>
        </tr>
        </thead>
        <tbody>
        <tr target="sid_user" rel="5">
            <td width="80"></td>
            <td>BTC/USDT</td>
            <td>火币网</td>
            <td>55471.23</td>
            <td>0.1234</td>
            <td>已成交</td>
            <td>2021-03-10 15:22:11</td>
            <td>2021-03-10 15:22:11</td>
        </tr>
        <tr target="sid_user" rel="5">
            <td width="80"></td>
            <td>BCH/USDT</td>
            <td>火币网</td>
            <td>112.23</td>
            <td>2.2234</td>
            <td>已成交</td>
            <td>2021-03-10 15:22:11</td>
            <td>2021-03-10 15:22:11</td>
        </tr>
        <tr target="sid_user" rel="5">
            <td width="80"></td>
            <td>BCH/USDT</td>
            <td>火币网</td>
            <td>112.23</td>
            <td>2.2234</td>
            <td>已撤销</td>
            <td>2021-03-10 15:22:11</td>
            <td>2021-03-10 15:22:11</td>
        </tr>
        </tbody>
    </table>
    <div class="panelBar">
        <div class="pages">
            <span>显示</span>
            <select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="150">150</option>
                <option value="200">200</option>
                <option value="250">250</option>
            </select>
            <span>条，共${totalCount}条</span>
        </div>

        <div class="pagination" targetType="navTab" totalCount="200" numPerPage="20" pageNumShown="10"
             currentPage="1"></div>

    </div>
</div>
