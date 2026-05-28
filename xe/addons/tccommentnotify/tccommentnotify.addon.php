<?php
    if(!defined("__ZBXE__")) exit();

    if(Context::getRequestMethod() == "XMLRPC" || Context::getResponseMethod() == "XMLRPC")
    {
        return;
    }

    if(Context::getRequestMethod() == "POST" && $called_position == 'before_module_init') {
        $mode = $_REQUEST['mode'];
        if(!$mode || $mode != "fb")
        {   
            return;
        }   
        $oController = &getController('tccommentnotify');
        if(!$oController) return;
        $site_module_info = Context::get('site_module_info');
        if($this->mid)
        {   
            $oModuleModel = &getModel('module');
            $module_info = $oModuleModel->getModuleInfoByMid($this->mid, $site_module_info->site_srl);
            $module_srl = $module_info->module_srl;
        }   
        else
        {   
            $module_srl = $site_module_info->module_srl;
        }   

        $oController->procNotifyReceived($module_srl);
        exit();
    }   

    if($called_position == "after_module_proc")
    {
        $oModel = &getModel('tccommentnotify');
		if(!$oModel) return;
        if($oModel->checkShouldNotify())
        {
            $scriptCode = <<<EndOfScript
        <script type="text/javascript">
        // <![CDATA[
            exec_xml("tccommentnotify", "procDoNotify");
        // ]]>
        </script>

EndOfScript;
            Context::addHtmlHeader($scriptCode);
        }
    }
?>
