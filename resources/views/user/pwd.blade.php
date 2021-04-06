<div class="pageContent">
    <form method="post" action="/user/changePassword" class="pageForm required-validate"
          onsubmit="return validateCallback(this, dialogAjaxDone)">
        <div class="pageFormContent" layoutH="58">
            <div class="unit">
                <label>原密码：</label>
                <input type="password" name="password" size="30"
                       class="required alphanumeric" alt="请输入原密码"/>
            </div>
            <div class="unit">
                <label>新密码：</label>
                <input type="password" name="newPassword" size="30" alt="请输入新密码"
                       class="required alphanumeric"/>
            </div>
            <div class="unit">
                <label>重复新密码：</label>
                <input type="password" name="rnewPassword" size="30" alt="请重新输入新密码" equalTo="#cp_newPassword"
                       class="required alphanumeric"/>
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
