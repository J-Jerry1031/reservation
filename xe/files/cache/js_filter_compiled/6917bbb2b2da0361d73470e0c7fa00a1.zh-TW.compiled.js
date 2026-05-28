function input_password(form){ return legacy_filter('input_password', form, 'pointrush', 'procPointrushVerificationPassword', filterAlertMessage, ['error','message'], '', {}) };
(function($){
	var v=xe.getApp('validator')[0];if(!v)return false;
	v.cast("ADD_FILTER", ["input_password", {'document_srl': {required:true},'password': {required:true}}]);
	
	v.cast('ADD_MESSAGE',['document_srl','文章編號']);
	v.cast('ADD_MESSAGE',['password','密碼']);
	v.cast('ADD_MESSAGE',['mid','模組名稱']);
	v.cast('ADD_MESSAGE',['comment_srl','comment_srl']);
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