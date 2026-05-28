(function($,v){
v=xe.getApp('validator')[0];if(!v)return;

v.cast('ADD_FILTER',['@insertMember', {'accept_agreement':{'if':[{test:'$act == \'procMemberInsert\'', attr:'required', value:'true'}]},'user_id':{required:true,rule:'userid',minlength:'3',maxlength:'20'},'password':{'if':[{test:'$act == \'procMemberInsert\'', attr:'required', value:'true'},{test:'$act == \'procMemberInsert\'', attr:'length', value:'4:20'}]},'password2':{'if':[{test:'$act == \'procMemberInsert\'', attr:'required', value:'true'},{test:'$act == \'procMemberInsert\'', attr:'equalto', value:'password'}]},'user_name':{required:true},'nick_name':{required:true,minlength:'2',maxlength:'20'},'email_address':{required:true,rule:'email'},'find_account_question':{required:true},'find_account_answer':{required:true,maxlength:'250'},'phone':{required:true}}]);
v.cast('ADD_MESSAGE',['accept_agreement','Agree']);
v.cast('ADD_MESSAGE',['user_id','User ID']);
v.cast('ADD_MESSAGE',['password','Password']);
v.cast('ADD_MESSAGE',['password2','Confirm Password']);
v.cast('ADD_MESSAGE',['user_name','User Name']);
v.cast('ADD_MESSAGE',['nick_name','Nick Name']);
v.cast('ADD_MESSAGE',['email_address','Email']);
v.cast('ADD_MESSAGE',['find_account_question','Question for a temporary password.']);
v.cast('ADD_MESSAGE',['find_account_answer','Answer for a temporary password.']);
v.cast('ADD_MESSAGE',['isnull','Please input a value for %s']);
v.cast('ADD_MESSAGE',['outofrange','Please align the text length of %s']);
v.cast('ADD_MESSAGE',['equalto','The value of %s is invalid']);
v.cast('ADD_MESSAGE',['invalid_email','The format of %s is invalid. ex) developers@xpressengine.com']);
v.cast('ADD_MESSAGE',['invalid_userid','The format of %s is invalid.\\nAll values should consist of alphabets, numbers or underscore(_) and the first letter should be alphabet']);
v.cast('ADD_MESSAGE',['invalid_user_id','The format of %s is invalid.\\nAll values should consist of alphabets, numbers or underscore(_) and the first letter should be alphabet']);
v.cast('ADD_MESSAGE',['invalid_homepage','The format of %s is invalid. ex) http://xpressengine.com/']);
v.cast('ADD_MESSAGE',['invalid_korean','The format of %s is invalid. Please input Korean only']);
v.cast('ADD_MESSAGE',['invalid_korean_number','The format of %s is invalid. Please input Korean or numbers']);
v.cast('ADD_MESSAGE',['invalid_alpha','The format of %s is invalid. Please input alphabets only']);
v.cast('ADD_MESSAGE',['invalid_alpha_number','The format of %s is invalid. Please input alphabets or numbers']);
v.cast('ADD_MESSAGE',['invalid_number','The format of %s is invalid. Please input numbers only']);
})(jQuery);