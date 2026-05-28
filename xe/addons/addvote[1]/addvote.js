(function($){$(function(){ 
	var c=$('.xe_content[class*=document_]').eq(0);
	if(c.attr('class'))
	{
		var document_srl=c.attr('class').replace(/.*document_([0-9]+).*/,'$1');
		c.append(addon_addvote_var).find('.wgtRv.addon_addvote button').click(function(){
			if(addon_addvote_logged) doCallModuleAction('document',(($(this).is('.btn_voted'))?'procDocumentVoteUp':(($(this).is('.btn_declared'))?'procDocumentDeclare ':'procDocumentVoteDown')),document_srl);
			else alert(xe.lang.msg_not_logged);
			return false;
		});
	}
}); })(jQuery);
