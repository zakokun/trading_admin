<div class="pageContent">
    <form method="post" action="/order/add" class="pageForm required-validate"
          onsubmit="return validateCallback(this, dialogAjaxDone)">
        <div class="pageFormContent" layoutH="58">
            <div class="unit">
                <label>货币名称：</label>
                <input type="text" name="symbol" size="30" value=""
                       class="required" alt="请输入货币名称"/>
            </div>
            <div class="unit">
                <label>价格：</label>
                <input type="text" name="secret" size="30" alt="价格"
                       value="" class="required number"/>
            </div>
            <div class="unit">
                <label>数量：</label>
                <input type="text" name="secret" size="30" alt="数量"
                       value="" class="required number"/>
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
