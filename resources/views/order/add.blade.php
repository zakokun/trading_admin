<div class="pageContent">
    <form method="post" action="/order/add" class="pageForm required-validate"
          onsubmit="return validateCallback(this, dialogAjaxDone)">
        <div class="pageFormContent" layoutH="58">
            <div class="unit">
                <label>货币名称：</label>
                <select class="combox" name="symbol" id="combox_test_demo">
                    @foreach ($stocks as $v)
                    <option value={{$v->symbol}}> {{$v->symbol}} </option>
                    @endforeach
                </select>
            </div>
            <div class="unit">
                <label>动作：</label>
                <select class="combox" name="act" id="combox_test_demo">
                    <option value="1">买入</option>
                    <option value="2">卖出</option>
                </select>
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
