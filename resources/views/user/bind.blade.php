<div class="pageContent">
    <form method="post" action="/user/bindAppKey" class="pageForm required-validate"
          onsubmit="return validateCallback(this, dialogAjaxDone)">
        <div class="pageFormContent" layoutH="58">
            <div class="unit">
                <label>appKey：</label>
                <input type="text" name="app_key" size="30" value="{{$user['app_key']}}"
                       class="required alphanumeric" alt="请输入交易所appKey"/>
            </div>
            <div class="unit">
                <label>Secret：</label>
                <input type="password" name="secret" size="30" alt="请输入交易所secret"
                       value="{{$user['secret']}}" class="required alphanumeric"/>
            </div>
        </div>
        <div class="formBar">
            <ul>
                <li>
                    <div class="buttonActive">
                        <div class="buttonContent">
                            <button type="submit">提交</button>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="button">
                        <div class="buttonContent">
                            <button type="button" class="close">取消</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </form>

</div>
