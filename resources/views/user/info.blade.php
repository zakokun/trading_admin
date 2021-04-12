<div class="pageContent">
    <form method="post" action="/user/info" class="pageForm required-validate"
          onsubmit="return validateCallback(this, dialogAjaxDone)">
        <div class="pageFormContent" layoutH="58">

            <div class="unit">
                <label>用户名：</label>
                <label>{{$user->username}}</label>
            </div>
            <div class="unit">
                <label>上次登录时间：</label>
                <label style="width: 200px">{{$user->last_login_time}}</label>
            </div>
            <div class="unit">
                <label>Appkey状态：</label>
                <label>{{$user->app_key?"已绑定":"未绑定"}}</label>
            </div>
            <div class="unit">
                <label>总收益：</label>
                <label>{{$user->app_key?"已绑定":"未绑定"}}</label>
            </div>
        </div>
        {{--        <div class="formBar">--}}
        {{--            <ul>--}}
        {{--                <li>--}}
        {{--                    <div class="buttonActive">--}}
        {{--                        <div class="buttonContent">--}}
        {{--                            <button type="submit">提交</button>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </li>--}}
        {{--                <li>--}}
        {{--                    <div class="button">--}}
        {{--                        <div class="buttonContent">--}}
        {{--                            <button type="button" class="close">取消</button>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </li>--}}
        {{--            </ul>--}}
        {{--        </div>--}}
    </form>

</div>
