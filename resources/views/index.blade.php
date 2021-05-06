<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>简单实用国产jQuery UI框架 - DWZ富客户端框架(J-UI.com)</title>

    <link href="/dwz/themes/default/style.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="/dwz/themes/css/core.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="/dwz/themes/css/print.css" rel="stylesheet" type="text/css" media="print"/>
    <!--[if IE]>
    <link href="/dwz/themes/css/ieHack.css" rel="stylesheet" type="text/css" media="screen"/>
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="/dwz/js/speedup.js" type="text/javascript"></script>
    <script src="/dwz/js/jquery-1.12.4.js" type="text/javascript"></script><![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="/dwz/js/jquery-3.4.1.js" type="text/javascript"></script><!--<![endif]-->
    <script src="/dwz/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="/dwz/js/jquery.validate.js" type="text/javascript"></script>
    <!--<script src="/dwz/js/jquery.bgiframe.js" type="text/javascript"></script>-->
    {{--    <script src="xheditor/xheditor-1.2.2.min.js" type="text/javascript"></script>--}}
    {{--    <script src="xheditor/xheditor_lang/zh-cn.js" type="text/javascript"></script>--}}
    {{--    <script src="uploadify/scripts/jquery.uploadify.js" type="text/javascript"></script>--}}

    <script type="text/javascript" src="/dwz/js/echarts.min.js"></script>
    <script type="text/javascript" src="//api.map.baidu.com/api?v=2.0&ak=6PYkS1eDz5pMnyfO0jvBNE0F"></script>
    <script type="text/javascript" src="//api.map.baidu.com/library/Heatmap/2.0/src/Heatmap_min.js"></script>

    <script src="/dwz/js/dwz.core.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.util.date.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.validate.method.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.barDrag.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.drag.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.tree.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.accordion.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.ui.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.theme.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.switchEnv.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.alertMsg.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.contextmenu.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.navTab.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.tab.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.resize.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.dialog.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.dialogDrag.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.sortDrag.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.cssTable.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.stable.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.taskBar.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.ajax.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.pagination.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.database.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.selectedLoad.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.datepicker.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.effects.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.panel.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.checkbox.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.history.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.combox.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.file.js" type="text/javascript"></script>
    <script src="/dwz/js/dwz.print.js" type="text/javascript"></script>

    <!-- 可以用dwz.min.js替换前面全部dwz.*.js (注意：替换时下面dwz.regional.zh.js还需要引入)
    <script src="bin/dwz.min.js" type="text/javascript"></script>
    -->
    <script src="/dwz/js/dwz.regional.zh.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(function () {
            DWZ.init("/dwz/bin/dwz.frag.xml", {
                loginUrl: "login_dialog.html", loginTitle: "登录",	// 弹出登录对话框
//		loginUrl:"login.html",	// 跳到登录页面
                statusCode: {ok: 200, error: 300, timeout: 301}, //【可选】
                pageInfo: {
                    pageNum: "page",
                    numPerPage: "numPerPage",
                    orderField: "orderField",
                    orderDirection: "orderDirection"
                }, //【可选】
                keys: {statusCode: "code", message: "message"}, //【可选】
                ui: {hideMode: 'offsets'}, //【可选】hideMode:navTab组件切换的隐藏方式，支持的值有’display’，’offsets’负数偏移位置的值，默认值为’display’
                debug: false,	// 调试模式 【true|false】
                callback: function () {
                    initEnv();
                    $("#themeList").theme({themeBase: "themes"}); // themeBase 相对于index页面的主题base路径
                }
            });
        });

    </script>

</head>

<body>
<div id="layout">
    <div id="header">
        <div class="headerNav">
            <a class="logo" href="http://j-ui.com">标志</a>
            <ul class="nav">
                <li><a href="#">欢迎你：{{$_SESSION['username']}}</a></li>

                <li><a href="/login/out">退出</a></li>
            </ul>
            <ul class="themeList" id="themeList">
                <li theme="default">
                    <div class="selected">蓝色</div>
                </li>
                <li theme="green">
                    <div>绿色</div>
                </li>
                <!--<li theme="red"><div>红色</div></li>-->
                <li theme="purple">
                    <div>紫色</div>
                </li>
                <li theme="silver">
                    <div>银色</div>
                </li>
                <li theme="azure">
                    <div>天蓝</div>
                </li>
            </ul>
        </div>

        <!-- navMenu -->

    </div>

    <div id="leftside">
        <div id="sidebar_s">
            <div class="collapse">
                <div class="toggleCollapse">
                    <div></div>
                </div>
            </div>
        </div>
        <div id="sidebar">
            <div class="toggleCollapse"><h2>主菜单</h2>
                <div>收缩</div>
            </div>
            <div class="accordion" fillSpace="sidebar">
                <div class="accordionContent">
                    <ul class="tree treeFolder">
                        <li><a href="#">资产管理</a>
                            <ul>
                                <li><a href="/stock/list" target="navTab" refresh="false" rel="stockList">资产列表</a></li>
                                <li><a href="/stock/myStar" target="navTab" rel="myStock">我的关注</a></li>
                                <li><a href="/stock/info" target="navTab" rel="stockInfo">行情走势</a></li>
                            </ul>
                        </li>
                        <li><a href="#">订单管理</a>
                            <ul>
                                <li><a href="/order/list" target="navTab" refresh="false" rel="orderList">我的订单</a></li>
                                <li><a href="/order/income" target="navTab" rel="income">收益详情</a></li>
                            </ul>
                        </li>
                        <li><a href="#">用户管理</a>
                            <ul>
                                <li><a href="/user/info" target="navTab" refresh="false"  rel="stockList">基本信息</a></li>
                                <li><a href="/user/showChangePassword" target="navTab" rel="w_validation">修改密码</a></li>
                                <li><a href="/user/showBind" target="navTab" rel="orderList">绑定交易所账户</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="container">
        <div id="navTab" class="tabsPage">
            <div class="tabsPageHeader">
                <div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
                    <ul class="navTab-tab">
                        <li tabid="main" class="main"><a href="javascript:;"><span><span
                                            class="home_icon">我的主页</span></span></a></li>
                    </ul>
                </div>
                <div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
                <div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
                <div class="tabsMore">more</div>
            </div>
            <ul class="tabsMoreList">
                <li><a href="javascript:;">我的主页</a></li>
            </ul>
            <div class="navTab-panel tabsPageContent layoutBox">
                <div class="page unitBox">
                    <div style="width:230px;position: absolute;top:60px;right:0" layoutH="80">
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<div id="footer">Copyright &copy; 2020 <a href="demo_page2.html" target="dialog">DWZ团队</a> 京ICP备15053290号-2</div>

</body>
</html>
