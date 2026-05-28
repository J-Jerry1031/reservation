function widget_login(form){ return legacy_filter('widget_login', form, 'member', 'procMemberLogin', completeLogin, ['error','message'], '', {}) };
(function($){
	var v=xe.getApp('validator')[0];if(!v)return false;
	v.cast("ADD_FILTER", ["widget_login", {'user_id': {required:true,rule:'user_id'},'password': {required:true}}]);
	
	v.cast('ADD_MESSAGE',['user_id','ユーザーＩＤ']);
	v.cast('ADD_MESSAGE',['password','パスワード']);
	v.cast('ADD_MESSAGE',['isnull','%sを入力して下さい。']);
	v.cast('ADD_MESSAGE',['outofrange','%sの文字の長さを合わせて下さい。']);
	v.cast('ADD_MESSAGE',['equalto','%sが正しくありません。']);
	v.cast('ADD_MESSAGE',['invalid_email','%sのパターンが正しくありません。 (例: zbxe@xepressengine.com)']);
	v.cast('ADD_MESSAGE',['invalid_userid','%sの形式が正しくありません。\\n半角の英数と記号「_」を組み合わせて入力して下さい。頭字は半角英文字でなければなりません。']);
	v.cast('ADD_MESSAGE',['invalid_user_id','%sの形式が正しくありません。\\n半角の英数と記号「_」を組み合わせて入力して下さい。頭字は半角英文字でなければなりません。']);
	v.cast('ADD_MESSAGE',['invalid_homepage','%sの形式が正しくありません。 (例: http://www.xepressengine.com)']);
	v.cast('ADD_MESSAGE',['invalid_korean','%sの形式が正しくありません。ハングルのみ入力して下さい。']);
	v.cast('ADD_MESSAGE',['invalid_korean_number','%sの形式が正しくありません。ハングルと半角数字で入力して下さい。']);
	v.cast('ADD_MESSAGE',['invalid_alpha','%sの形式が正しくありません。半角英文字のみ入力して下さい。']);
	v.cast('ADD_MESSAGE',['invalid_alpha_number','%sの形式が正しくありません。半角英数で入力して下さい。']);
	v.cast('ADD_MESSAGE',['invalid_number','%sの形式が正しくありません。半角数字で入力して下さい。']);
})(jQuery);