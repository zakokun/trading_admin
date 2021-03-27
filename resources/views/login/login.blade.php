<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>量化交易系统</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/login/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="/login/css/main.css">
</head>
<body data-new-gr-c-s-check-loaded="14.1001.0" data-gr-ext-installed="">
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(/login/img/bg-01.jpeg);">
                <span class="login100-form-title-1">登 录</span>
            </div>

            <form class="login100-form validate-form" action="/login/login" method="post">
                <div class="wrap-input100 validate-input m-b-26" data-validate="用户名不能为空">
                    <span class="label-input100">用户名</span>
                    <input class="input100" type="text" name="username" placeholder="请输入用户名">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate="密码不能为空">
                    <span class="label-input100">密码</span>
                    <input class="input100" type="password" name="password" placeholder="请输入密码">
                    <span class="focus-input100"></span>
                </div>

                <div class="flex-sb-m w-full p-b-30">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    </div>

                    <div>
                        <a href="/login/reg" class="txt1">注册账号</a>
                    </div>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">登 录</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/login/js/jquery-3.2.1.min.js"></script>
<script src="/login/js/main.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        @isset($msg)
        alert('{{$msg}}');
        @endisset
    });
</script>
</body>
</html>