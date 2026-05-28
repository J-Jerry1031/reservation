(function($,v){
v=xe.getApp('validator')[0];if(!v)return;

v.cast('ADD_FILTER',['@login', {'user_id':{required:true,rule:'userid'},'password':{required:true}}]);
v.cast('ADD_MESSAGE',['user_id','Compte']);
v.cast('ADD_MESSAGE',['password','Mot de Passe']);
v.cast('ADD_MESSAGE',['isnull','Entrez une valeur pour %s']);
v.cast('ADD_MESSAGE',['outofrange','Aligner la longueur du texte de %s']);
v.cast('ADD_MESSAGE',['equalto','La valeur de %s est invalide.']);
v.cast('ADD_MESSAGE',['invalid_email','Le format de %s est invalide. ex) developers@xpressengine.com']);
v.cast('ADD_MESSAGE',['invalid_userid','La format de %s n\\\'est pas convenable.\\nToutes les lettres devraient se composer des alphabets, des chiffres ou du soulignage(_) Et la première lettre doit être un de l\\\'alphabet.']);
v.cast('ADD_MESSAGE',['invalid_user_id','La format de %s n\\\'est pas convenable.\\nToutes les lettres devraient se composer des alphabets, des chiffres ou du soulignage(_) Et la première lettre doit être un de l\\\'alphabet.']);
v.cast('ADD_MESSAGE',['invalid_homepage','La format de %s n\\\'est pas convenable. ex) http://xpressengine.com/']);
v.cast('ADD_MESSAGE',['invalid_korean','La format de %s n\\\'est pas convenable. Entrez seulement en coréen, S.V.P.']);
v.cast('ADD_MESSAGE',['invalid_korean_number','La format de %s n\\\'est pas convenable. Entrez seulement des lettres d\\\'alphabet coréen ou des chiffres, S.V.P.']);
v.cast('ADD_MESSAGE',['invalid_alpha','La format de %s n\\\'est pas convenable. Entrez seulement en alphabet, S.V.P.']);
v.cast('ADD_MESSAGE',['invalid_alpha_number','La format de %s n\\\'est pas convenable. Entrez seulement des lettres d\\\'alphabet ou des chiffres.']);
v.cast('ADD_MESSAGE',['invalid_number','La format de %s n\\\'est pas convenable. Entrez seulement des chiffres.']);
})(jQuery);