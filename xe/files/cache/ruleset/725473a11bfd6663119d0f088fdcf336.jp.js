(function($,v){
v=xe.getApp('validator')[0];if(!v)return;

v.cast('ADD_FILTER',['@insertMember', {'accept_agreement':{'if':[{test:'$act == \'procMemberInsert\'', attr:'required', value:'true'}]},'user_id':{required:true,rule:'userid',minlength:'3',maxlength:'20'},'password':{'if':[{test:'$act == \'procMemberInsert\'', attr:'required', value:'true'},{test:'$act == \'procMemberInsert\'', attr:'length', value:'4:20'}]},'password2':{'if':[{test:'$act == \'procMemberInsert\'', attr:'required', value:'true'},{test:'$act == \'procMemberInsert\'', attr:'equalto', value:'password'}]},'user_name':{required:true},'nick_name':{required:true,minlength:'2',maxlength:'20'},'email_address':{required:true,rule:'email'},'find_account_question':{required:true},'find_account_answer':{required:true,maxlength:'250'},'phone':{required:true}}]);
v.cast('ADD_MESSAGE',['accept_agreement','利用規約に同意する']);
v.cast('ADD_MESSAGE',['user_id','ユーザーＩＤ']);
v.cast('ADD_MESSAGE',['password','パスワード']);
v.cast('ADD_MESSAGE',['password2','パスワード確認']);
v.cast('ADD_MESSAGE',['user_name','名前']);
v.cast('ADD_MESSAGE',['nick_name','ニックネーム']);
v.cast('ADD_MESSAGE',['email_address','メールアドレス']);
v.cast('ADD_MESSAGE',['find_account_question','秘密質問']);
v.cast('ADD_MESSAGE',['find_account_answer','秘密質問の答え']);
v.cast('ADD_MESSAGE',['isnull','%sに値を入力してください。']);
v.cast('ADD_MESSAGE',['outofrange','%sの文字の長さを合わせてください。']);
v.cast('ADD_MESSAGE',['equalto','%sが正しくありません。']);
v.cast('ADD_MESSAGE',['invalid','%sの値が正しくありません。']);
v.cast('ADD_MESSAGE',['invalid_email','%sのメール形式が正しくありません。(例: developers@xepressengine.com)']);
v.cast('ADD_MESSAGE',['invalid_userid','%sの形式が正しくありません。半角の英数字と記号「_」を組み合わせて入力してください。頭文字は半角英文字でなければなりません。']);
v.cast('ADD_MESSAGE',['invalid_user_id','%sの形式が正しくありません。半角の英数字と記号「_」を組み合わせて入力してください。頭文字は半角英文字でなければなりません。']);
v.cast('ADD_MESSAGE',['invalid_homepage','%sの形式が正しくありません。(例: http://www.xepressengine.com)']);
v.cast('ADD_MESSAGE',['invalid_url','%sの形式が正しくありません。例) http://xpressengine.com/']);
v.cast('ADD_MESSAGE',['invalid_korean','%sの形式が正しくありません。ハングルで入力してください。']);
v.cast('ADD_MESSAGE',['invalid_korean_number','%sの形式が正しくありません。ハングルと半角数字で入力してください。']);
v.cast('ADD_MESSAGE',['invalid_alpha','%sの形式が正しくありません。半角英字で入力してください。']);
v.cast('ADD_MESSAGE',['invalid_alpha_number','%sの形式が正しくありません。半角英数字で入力してください。']);
v.cast('ADD_MESSAGE',['invalid_mid','%sの形式が正しくありません。 最初の文字は英文から始め、「英文＋数字＋_」組合せで入力が必要です。']);
v.cast('ADD_MESSAGE',['invalid_number','%sの形式が正しくありません。半角数字で入力してください。']);
})(jQuery);