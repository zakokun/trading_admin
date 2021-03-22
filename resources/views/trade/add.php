<div class="pageContent">
    <form method="post" action="demo/common/ajaxDone.html" class="pageForm"
          onsubmit="return validateCallback(this, dialogAjaxDone)">
        <div class="pageFormContent" layoutH="58">
            <div class="unit">
                <label>资产名称：</label>
                <input type="text" name="username" size="30" class="required"/>
            </div>
            <div class="unit">
                <label>数量：</label>
                <input type="password" name="password" size="30" class="required"/>
            </div>
            <div class="unit">
                <label>价格：</label>
                <input type="password" name="password" size="30" class="required"/>
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

