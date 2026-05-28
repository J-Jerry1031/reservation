function search(form){ return legacy_filter('search', form, 'board', '', completeSearch, ['error','message'], '', {}) };
(function($){
	var v=xe.getApp('validator')[0];if(!v)return false;
	v.cast("ADD_FILTER", ["search", {'search_target': {required:true},'search_keyword': {required:true,minlength:2,maxlength:40}}]);
	
	v.cast('ADD_MESSAGE',['search_target','Champ à Rechercher']);
	v.cast('ADD_MESSAGE',['search_keyword','Mot-clé à Rechercher']);
	v.cast('ADD_MESSAGE',['mid','Nom']);
	v.cast('ADD_MESSAGE',['isnull','Entrez une valeur pour %s']);
	v.cast('ADD_MESSAGE',['outofrange','Aligner la longueur du texte de %s']);
	v.cast('ADD_MESSAGE',['equalto','La valeur de %s est invalide.']);
	v.cast('ADD_MESSAGE',['invalid','The value of %s is invalid.']);
	v.cast('ADD_MESSAGE',['invalid_email','Le format de %s est invalide. ex) developers@xpressengine.com']);
	v.cast('ADD_MESSAGE',['invalid_userid','La format de %s n\'est pas convenable. Toutes les lettres devraient se composer des alphabets, des chiffres ou du soulignage(_) Et la première lettre doit être un de l\'alphabet.']);
	v.cast('ADD_MESSAGE',['invalid_user_id','La format de %s n\'est pas convenable. Toutes les lettres devraient se composer des alphabets, des chiffres ou du soulignage(_) Et la première lettre doit être un de l\'alphabet.']);
	v.cast('ADD_MESSAGE',['invalid_homepage','La format de %s n\'est pas convenable. ex) http://xpressengine.com/']);
	v.cast('ADD_MESSAGE',['invalid_url','The format of %s is invalid. e.g.) http://xpressengine.com/']);
	v.cast('ADD_MESSAGE',['invalid_korean','La format de %s n\'est pas convenable. Entrez seulement en coréen, S.V.P.']);
	v.cast('ADD_MESSAGE',['invalid_korean_number','La format de %s n\'est pas convenable. Entrez seulement des lettres d\'alphabet coréen ou des chiffres, S.V.P.']);
	v.cast('ADD_MESSAGE',['invalid_alpha','La format de %s n\'est pas convenable. Entrez seulement en alphabet, S.V.P.']);
	v.cast('ADD_MESSAGE',['invalid_alpha_number','La format de %s n\'est pas convenable. Entrez seulement des lettres d\'alphabet ou des chiffres.']);
	v.cast('ADD_MESSAGE',['invalid_mid','The format of %s is invalid. Module ID should be begun with a letter. Subsequent characters may be letters, digits or underscore characters.']);
	v.cast('ADD_MESSAGE',['invalid_number','La format de %s n\'est pas convenable. Entrez seulement des chiffres.']);
})(jQuery);