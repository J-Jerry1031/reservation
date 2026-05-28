<?php
    if(!defined("__ZBXE__")) exit();

    /**
     * @file addvote.addon.php
     * @author sol (ngleader@gmail.com)
     * @brief 추천 버튼 노출 애드온
     **/

    if($called_position == 'after_module_proc' && Context::getResponseMethod()!="XMLRPC") {
		$document_srl = Context::get('document_srl');
		if($document_srl){
			$oDocumentModel = &getModel('document');
			$oDocument = $oDocumentModel->getDocument($document_srl);
			
			$var->blamed_count = $oDocument->get('blamed_count');
			$var->voted_count = $oDocument->get('voted_count');
			$var->document_srl = $document_srl;
			Context::set('var',$var);
			$oTemplate_ = &TemplateHandler::getInstance();
			$output_ = $oTemplate_->compile('./addons/addvote/tpl','addvote');
			Context::addHtmlHeader(sprintf("<script type=\"text/javascript\"> var addon_addvote_var='%s';var addon_addvote_logged=%s;xe.lang.msg_not_logged='%s';</script>", trim($output_),(Context::get('logged_info')?'true':'false'), Context::getLang('msg_not_logged')));
			Context::addJsFile('./addons/addvote/addvote.js');
			Context::addCSSFile('./addons/addvote/tpl/addvote.css');
			$con = Context::getInstance();
			unset($oDocument,$var,$output_);
		}
    }
?>
