(function($,v){
v=xe.getApp('validator')[0];if(!v)return;

v.cast('ADD_FILTER',['resendAuthMail', {'email_address':{required:true,rule:'email',minlength:'1',maxlength:'200'}}]);
v.cast('ADD_MESSAGE',['email_address','Email']);
v.cast('ADD_MESSAGE',['isnull','Please enter a value for %s']);
v.cast('ADD_MESSAGE',['outofrange','Please try to keep the text length of %s.']);
v.cast('ADD_MESSAGE',['equalto','The value of %s is invalid']);
v.cast('ADD_MESSAGE',['invalid','The value of %s is invalid.']);
v.cast('ADD_MESSAGE',['invalid_email','The format of %s is invalid. ex) developers@xpressengine.com']);
v.cast('ADD_MESSAGE',['invalid_userid','The format of %s is invalid. All values should consist of alphabets, numbers or underscore(_) and the first letter should be alphabet']);
v.cast('ADD_MESSAGE',['invalid_user_id','The format of %s is invalid. All values should consist of alphabets, numbers or underscore(_) and the first letter should be alphabet']);
v.cast('ADD_MESSAGE',['invalid_homepage','The format of %s is invalid. e.g.) http://xpressengine.com/']);
v.cast('ADD_MESSAGE',['invalid_url','The format of %s is invalid. e.g.) http://xpressengine.com/']);
v.cast('ADD_MESSAGE',['invalid_korean','The format of %s is invalid. Please enter Korean letters only.']);
v.cast('ADD_MESSAGE',['invalid_korean_number','The format of %s is invalid. Please enter Korean letters and numbers only.']);
v.cast('ADD_MESSAGE',['invalid_alpha','The format of %s is invalid. Please enter English alphabets only.']);
v.cast('ADD_MESSAGE',['invalid_alpha_number','The format of %s is invalid. Please enter English alphabets and numbers only.']);
v.cast('ADD_MESSAGE',['invalid_mid','The format of %s is invalid. Module ID should be begun with a letter. Subsequent characters may be letters, digits or underscore characters.']);
v.cast('ADD_MESSAGE',['invalid_number','The format of %s is invalid. Please enter numbers only.']);
})(jQuery);