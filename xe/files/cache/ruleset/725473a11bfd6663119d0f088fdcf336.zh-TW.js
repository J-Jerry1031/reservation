(function($,v){
v=xe.getApp('validator')[0];if(!v)return;

v.cast('ADD_FILTER',['@insertMember', {'accept_agreement':{'if':[{test:'$act == \'procMemberInsert\'', attr:'required', value:'true'}]},'user_id':{required:true,rule:'userid',minlength:'3',maxlength:'20'},'password':{'if':[{test:'$act == \'procMemberInsert\'', attr:'required', value:'true'},{test:'$act == \'procMemberInsert\'', attr:'length', value:'4:20'}]},'password2':{'if':[{test:'$act == \'procMemberInsert\'', attr:'required', value:'true'},{test:'$act == \'procMemberInsert\'', attr:'equalto', value:'password'}]},'user_name':{required:true},'nick_name':{required:true,minlength:'2',maxlength:'20'},'email_address':{required:true,rule:'email'},'find_account_question':{required:true},'find_account_answer':{required:true,maxlength:'250'},'phone':{required:true}}]);
v.cast('ADD_MESSAGE',['accept_agreement','同意條款']);
v.cast('ADD_MESSAGE',['user_id','帳號']);
v.cast('ADD_MESSAGE',['password','密碼']);
v.cast('ADD_MESSAGE',['password2','確認密碼']);
v.cast('ADD_MESSAGE',['user_name','姓名']);
v.cast('ADD_MESSAGE',['nick_name','暱稱']);
v.cast('ADD_MESSAGE',['email_address','電子郵件']);
v.cast('ADD_MESSAGE',['find_account_question','密碼提示問答']);
v.cast('ADD_MESSAGE',['find_account_answer','忘記密碼提示']);
v.cast('ADD_MESSAGE',['isnull','請輸入%s']);
v.cast('ADD_MESSAGE',['outofrange','請確認 %s 字數']);
v.cast('ADD_MESSAGE',['equalto','%s值有誤。']);
v.cast('ADD_MESSAGE',['invalid','%s值有誤。']);
v.cast('ADD_MESSAGE',['invalid_email','%s E-mail格式有誤。(例：developers@xpressengine.com)']);
v.cast('ADD_MESSAGE',['invalid_userid','%s只允許使用英文，數字和底線，開頭必須是英文。']);
v.cast('ADD_MESSAGE',['invalid_user_id','%s只允許使用英文，數字和底線，開頭必須是英文。']);
v.cast('ADD_MESSAGE',['invalid_homepage','%s格式有誤。(例： http://xpressengine.com/)']);
v.cast('ADD_MESSAGE',['invalid_url','%s 格式錯誤。 例) http://xpressengine.com/']);
v.cast('ADD_MESSAGE',['invalid_korean','%s只能輸入中文']);
v.cast('ADD_MESSAGE',['invalid_korean_number','%s只能輸入中文或數字']);
v.cast('ADD_MESSAGE',['invalid_alpha','%s只能輸入英文字母']);
v.cast('ADD_MESSAGE',['invalid_alpha_number','%s只能輸入英文或數字']);
v.cast('ADD_MESSAGE',['invalid_mid','%s 格式錯誤。 模組名稱只能使用英文、數字及底線，開頭必須是英文。']);
v.cast('ADD_MESSAGE',['invalid_number','%s只能輸入數字']);
})(jQuery);