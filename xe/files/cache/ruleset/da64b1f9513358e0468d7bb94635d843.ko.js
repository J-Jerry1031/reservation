(function($,v){
v=xe.getApp('validator')[0];if(!v)return;

v.cast('ADD_FILTER',['sitelock', {'use_sitelock':{required:true},'sitelock_whitelist':{'if':[{test:'$use_sitelock == \'Y\'', attr:'required', value:'true'}]},'sitelock_title':{'if':[{test:'$use_sitelock == \'Y\'', attr:'required', value:'true'}]},'sitelock_message':{'if':[{test:'$use_sitelock == \'Y\'', attr:'required', value:'true'}]}}]);
v.cast('ADD_MESSAGE',['use_sitelock','사이트 잠금 사용']);
v.cast('ADD_MESSAGE',['sitelock_whitelist','접근 허용 IP']);
v.cast('ADD_MESSAGE',['sitelock_title','안내문 제목']);
v.cast('ADD_MESSAGE',['sitelock_message','안내문 내용']);
v.cast('ADD_MESSAGE',['isnull','%s을 입력해주세요.']);
v.cast('ADD_MESSAGE',['outofrange','%s의 글자 수를 맞추어 주세요.']);
v.cast('ADD_MESSAGE',['equalto','%s이 잘못되었습니다.']);
v.cast('ADD_MESSAGE',['invalid_email','%s의 형식이 잘못되었습니다. (예: xe@xpressengine.com)']);
v.cast('ADD_MESSAGE',['invalid_userid','%s의 형식이 잘못되었습니다.\\n영문, 숫자와 _로 만드실 수 있으며, 첫 글자는 영문이어야 합니다.']);
v.cast('ADD_MESSAGE',['invalid_user_id','%s의 형식이 잘못되었습니다.\\n영문, 숫자와 _로 만드실 수 있으며, 첫 글자는 영문이어야 합니다.']);
v.cast('ADD_MESSAGE',['invalid_homepage','%s의 형식이 잘못되었습니다. (예: http://www.xpressengine.com)']);
v.cast('ADD_MESSAGE',['invalid_korean','%s의 형식이 잘못되었습니다. 한글로만 입력하셔야 합니다.']);
v.cast('ADD_MESSAGE',['invalid_korean_number','%s의 형식이 잘못되었습니다. 한글과 숫자로만 입력하셔야 합니다.']);
v.cast('ADD_MESSAGE',['invalid_alpha','%s의 형식이 잘못되었습니다. 영문으로만 입력하셔야 합니다.']);
v.cast('ADD_MESSAGE',['invalid_alpha_number','%s의 형식이 잘못되었습니다. 영문과 숫자로만 입력하셔야 합니다.']);
v.cast('ADD_MESSAGE',['invalid_number','%s의 형식이 잘못되었습니다. 숫자로만 입력하셔야 합니다.']);
})(jQuery);