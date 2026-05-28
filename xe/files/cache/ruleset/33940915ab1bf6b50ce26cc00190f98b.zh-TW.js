(function($,v){
v=xe.getApp('validator')[0];if(!v)return;

v.cast('ADD_FILTER',['@login', {'user_id':{required:true,rule:'userid'},'password':{required:true}}]);
v.cast('ADD_MESSAGE',['user_id','帳號']);
v.cast('ADD_MESSAGE',['password','密碼']);
v.cast('ADD_MESSAGE',['isnull','請輸入%s']);
v.cast('ADD_MESSAGE',['outofrange','請確認%s字數']);
v.cast('ADD_MESSAGE',['equalto','%s值有誤。']);
v.cast('ADD_MESSAGE',['invalid_email','%s格式有誤。(例：developers@xpressengine.com)']);
v.cast('ADD_MESSAGE',['invalid_userid','%s只允許使用英文，數字和底線，開頭必須是英文。']);
v.cast('ADD_MESSAGE',['invalid_user_id','%s只允許使用英文，數字和底線，開頭必須是英文。']);
v.cast('ADD_MESSAGE',['invalid_homepage','%s格式有誤。(例： http://xpressengine.com/)']);
v.cast('ADD_MESSAGE',['invalid_korean','%s只能輸入中文']);
v.cast('ADD_MESSAGE',['invalid_korean_number','%s只能輸入中文或數字']);
v.cast('ADD_MESSAGE',['invalid_alpha','%s只能輸入英文字母']);
v.cast('ADD_MESSAGE',['invalid_alpha_number','%s只能輸入英文或數字']);
v.cast('ADD_MESSAGE',['invalid_number','%s只能輸入數字']);
})(jQuery);