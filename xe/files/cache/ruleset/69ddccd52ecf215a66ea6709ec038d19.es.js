(function($,v){
v=xe.getApp('validator')[0];if(!v)return;

v.cast('ADD_FILTER',['@find_member_account_by_question', {'user_id':{required:true,rule:'userid'},'email_address':{required:true,rule:'email'},'find_account_question':{required:true},'find_account_answer':{required:true,maxlength:'250'}}]);
v.cast('ADD_MESSAGE',['user_id','ID de Usuario']);
v.cast('ADD_MESSAGE',['email_address','Correo electrónico']);
v.cast('ADD_MESSAGE',['find_account_question','Question for a temporary password.']);
v.cast('ADD_MESSAGE',['find_account_answer','Answer for a temporary password.']);
v.cast('ADD_MESSAGE',['isnull','Introduzca valor en el %s']);
v.cast('ADD_MESSAGE',['outofrange','Se ha excedido el máximo número de letras permitido en el %s']);
v.cast('ADD_MESSAGE',['equalto','Valor inválido en el %s']);
v.cast('ADD_MESSAGE',['invalid','The value of %s is invalid.']);
v.cast('ADD_MESSAGE',['invalid_email','Formato email inválido en el %s(ej. developers@xpressengine.com)']);
v.cast('ADD_MESSAGE',['invalid_userid','Formato inválido en el %s. Sólo pueden introducir los alfabetos o los dígitos númericos o el guión bajo(_). Además, el primer valor sólo puede ser una letra de alfabeto']);
v.cast('ADD_MESSAGE',['invalid_user_id','Formato inválido en el %s. Sólo pueden introducir los alfabetos o los dígitos númericos o el guión bajo(_). Además, el primer valor sólo puede ser una letra de alfabeto']);
v.cast('ADD_MESSAGE',['invalid_homepage','Formato url inválido en el %s(ej: http://xpressengine.com/)']);
v.cast('ADD_MESSAGE',['invalid_url','The format of %s is invalid. e.g.) http://xpressengine.com/']);
v.cast('ADD_MESSAGE',['invalid_korean','Sólo puede introducir los caracteres coreanos en el %s']);
v.cast('ADD_MESSAGE',['invalid_korean_number','Sólo puede introducir los caracteres coreanos o números en el %s']);
v.cast('ADD_MESSAGE',['invalid_alpha','Sólo puede introducir los alfabetos en el %s']);
v.cast('ADD_MESSAGE',['invalid_alpha_number','Sólo puede introducir los alfanuméricos en el %s es inválido']);
v.cast('ADD_MESSAGE',['invalid_mid','The format of %s is invalid. Module ID should be begun with a letter. Subsequent characters may be letters, digits or underscore characters.']);
v.cast('ADD_MESSAGE',['invalid_number','Sólo puede introducir los dígitos numéricos en el %s']);
})(jQuery);