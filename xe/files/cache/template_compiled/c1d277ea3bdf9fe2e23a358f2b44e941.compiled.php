<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/kin/tpl/css/kin.css--><?php $__tmp=array('modules/kin/tpl/css/kin.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<h3 class="xeAdmin"><?php echo $__Context->lang->kin ?> <span class="gray"><?php echo $__Context->lang->cmd_management ?></span></h3>
<div class="infoText"><?php echo nl2br($__Context->lang->about_kin) ?> </div>
<?php if($__Context->module_info){ ?><div class="header4">
    <?php if(!empty($__Context->module_srl)){ ?><h4 class="xeAdmin">
        <?php echo $__Context->module_info->mid ?>
        <span class="vr">|</span>
        <a href="<?php echo getSiteUrl($__Context->module_info->domain,'','mid',$__Context->module_info->mid) ?>" onclick="window.open(this.href); return false;" class="view">View</a>
    </h4><?php } ?>
    <ul class="localNavigation">
        <?php if($__Context->module=='admin'){ ?><li<?php if($__Context->act=='dispKinAdminList'){ ?> class="on"<?php } ?>><a href="<?php echo getUrl('act','dispKinAdminList','module_srl','') ?>"><?php echo $__Context->lang->cmd_list ?></a></li><?php } ?>
        <?php if($__Context->module!='admin'){ ?><li><a href="<?php echo getUrl('act','') ?>"><?php echo $__Context->lang->cmd_back ?></a></li><?php } ?>
        <li<?php if($__Context->act=='dispKinAdminInsert'){ ?> class="on"<?php } ?>><a href="<?php echo getUrl('act','dispKinAdminInsert') ?>"><?php if(empty($__Context->module_srl)){;
echo $__Context->lang->cmd_new;
}else{;
echo $__Context->lang->module_info;
} ?></a></li>
        <?php if(!empty($__Context->module_srl)){ ?><li<?php if($__Context->act=='dispKinAdminCategory'){ ?> class="on"<?php } ?>><a href="<?php echo getUrl('act','dispKinAdminCategory') ?>"><?php echo $__Context->lang->cmd_manage_category ?></a></li><?php } ?>
        <?php if(!empty($__Context->module_srl)){ ?><li<?php if($__Context->act=='dispKinAdminAdditions'){ ?> class="on"<?php } ?>><a href="<?php echo getUrl('act','dispKinAdminAdditions') ?>"><?php echo $__Context->lang->cmd_addition_setup ?></a></li><?php } ?>
		<li<?php if($__Context->act=='dispKinAdminSkinInfo'){ ?> class="on"<?php } ?>><a href="<?php echo getUrl('act','dispKinAdminSkinInfo') ?>"><?php echo $__Context->lang->cmd_manage_skin ?></a></li>
    </ul>
</div><?php } ?>
