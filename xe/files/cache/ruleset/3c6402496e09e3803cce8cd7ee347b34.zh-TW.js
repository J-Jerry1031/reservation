(function($,v){
v=xe.getApp('validator')[0];if(!v)return;

v.cast('ADD_FILTER',['findAccount', {'email_address':{required:true,rule:'email',minlength:'1',maxlength:'200'}}]);
v.cast('ADD_MESSAGE',['email_address','電子郵件']);
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