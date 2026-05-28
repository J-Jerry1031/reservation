(function($,v){
v=xe.getApp('validator')[0];if(!v)return;

v.cast('ADD_FILTER',['@find_member_account_by_question', {'user_id':{required:true,rule:'userid'},'email_address':{required:true,rule:'email'},'find_account_question':{required:true},'find_account_answer':{required:true,maxlength:'250'}}]);
v.cast('ADD_MESSAGE',['user_id','用户名']);
v.cast('ADD_MESSAGE',['email_address','电子邮件']);
v.cast('ADD_MESSAGE',['find_account_question','密码提示问答']);
v.cast('ADD_MESSAGE',['find_account_answer','忘记密码提示']);
v.cast('ADD_MESSAGE',['isnull','请输入%s']);
v.cast('ADD_MESSAGE',['outofrange','请确认%s字数']);
v.cast('ADD_MESSAGE',['equalto','%s值有误。']);
v.cast('ADD_MESSAGE',['invalid','%s值有误。']);
v.cast('ADD_MESSAGE',['invalid_email','%s格式有误。（例：developers@xpressengine.com)']);
v.cast('ADD_MESSAGE',['invalid_userid','%s只能用英文，数字和 _，首个字符必须是英文字母。']);
v.cast('ADD_MESSAGE',['invalid_user_id','%s只能用英文，数字和 _，首个字符必须是英文字母。']);
v.cast('ADD_MESSAGE',['invalid_homepage','%s格式有误。（例： http://xpressengine.com/)']);
v.cast('ADD_MESSAGE',['invalid_url','%s 格式错误。 例）http://xpressengine.com/']);
v.cast('ADD_MESSAGE',['invalid_korean','%s只能输入中文']);
v.cast('ADD_MESSAGE',['invalid_korean_number','%s只能输入中文或数字']);
v.cast('ADD_MESSAGE',['invalid_alpha','%s只能输入英文字母']);
v.cast('ADD_MESSAGE',['invalid_alpha_number','%s只能输入英文或数字']);
v.cast('ADD_MESSAGE',['invalid_mid','%s 格式错误。 模块名称只能用英文、数字及下划线，开头必须是英文。']);
v.cast('ADD_MESSAGE',['invalid_number','%s只能输入数字']);
})(jQuery);