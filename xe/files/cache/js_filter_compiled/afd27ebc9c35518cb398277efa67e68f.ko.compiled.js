function insert_coupon(form){ return legacy_filter('insert_coupon', form, 'coupon', 'procCouponAdminInsertCoupon', completeInsertCoupon, ['error','message'], '등록하시겠습니까?', {}) };
(function($){
	var v=xe.getApp('validator')[0];if(!v)return false;
	v.cast("ADD_FILTER", ["insert_coupon", {'title': {required:true,maxlength:250},'coupon_code': {required:true,maxlength:5},'coupon_code2': {required:true,maxlength:5},'coupon_code3': {required:true,maxlength:5},'member_srl': {rule:'number'},'coupon_limit': {rule:'number'}}]);
	
	v.cast('ADD_MESSAGE',['title','제목']);
	v.cast('ADD_MESSAGE',['coupon_code','쿠폰 코드']);
	v.cast('ADD_MESSAGE',['coupon_code2','쿠폰 코드']);
	v.cast('ADD_MESSAGE',['coupon_code3','쿠폰 코드']);
	v.cast('ADD_MESSAGE',['member_srl','member_srl']);
	v.cast('ADD_MESSAGE',['coupon_limit','사용 제한 횟수']);
	v.cast('ADD_MESSAGE',['isnull','%s 값은 필수입니다.']);
	v.cast('ADD_MESSAGE',['outofrange','%s의 글자 수를 맞추어 주세요.']);
	v.cast('ADD_MESSAGE',['equalto','%s이(가) 잘못되었습니다.']);
	v.cast('ADD_MESSAGE',['invalid','%s의 값이 올바르지 않습니다.']);
	v.cast('ADD_MESSAGE',['invalid_email','%s의 값은 올바른 메일 주소가 아닙니다.']);
	v.cast('ADD_MESSAGE',['invalid_userid','%s의 값은 영문, 숫자, _만 가능하며 첫 글자는 영문이어야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_user_id','%s의 값은 영문, 숫자, _만 가능하며 첫 글자는 영문이어야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_homepage','%s의 형식이 잘못되었습니다.(예: http://www.xpressengine.com)']);
	v.cast('ADD_MESSAGE',['invalid_url','%s의 형식이 잘못되었습니다.(예: http://www.xpressengine.com)']);
	v.cast('ADD_MESSAGE',['invalid_korean','%s의 형식이 잘못되었습니다. 한글로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_korean_number','%s의 형식이 잘못되었습니다. 한글과 숫자로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_alpha','%s의 형식이 잘못되었습니다. 영문으로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_alpha_number','%s의 형식이 잘못되었습니다. 영문과 숫자로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_mid','%s의 형식이 잘못되었습니다. 첫 글자는 영문으로 시작해야 하며 \'영문+숫자+_\'로만 입력해야 합니다.']);
	v.cast('ADD_MESSAGE',['invalid_number','%s의 형식이 잘못되었습니다. 숫자로만 입력해야 합니다.']);
})(jQuery);