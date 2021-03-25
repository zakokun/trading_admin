<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>数字货币交易平台</title>
    <link href="/dwz/themes/css/login.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div id="login">
    <div id="login_header">
        <div class="login_headerContent">
            <h2 class="login_title">用户登录</h2>
        </div>
    </div>
    <div id="login_content">
        <div class="loginForm">
            <form action="/login/login" method="post">
                <p>
                    <label>用户名：</label>
                    <input type="text" name="username" size="20" class="login_input"/>
                </p>
                <p>
                    <label>密码：</label>
                    <input type="password" name="password" size="20" class="login_input"/>
                </p>
                <p>
                    <label>验证码：</label>
                    <input class="code" name="captcha" type="text" size="5"/>
                    <span>
<img class="captcha-img" src="/login/captcha" onclick="this.src='/login/captcha?'+Math.random()">
                    </span>
                </p>
                <div class="login_bar">
                    <input class="sub" type="submit" value=" 登录 "/>
                </div>
            </form>
            <label style="margin-top: 10px"><a href="/login/reg">点此注册</a></label>
        </div>

        <div class="login_banner"><img src="/dwz/themes/default/images/login_banner.jpg"/></div>

    </div>
</div>
</body>
</html>