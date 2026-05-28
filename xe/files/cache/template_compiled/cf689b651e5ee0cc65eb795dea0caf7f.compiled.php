<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/iconshop/tpl/js/iconshop_admin.js--><?php $__tmp=array('modules/iconshop/tpl/js/iconshop_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->iconshop_info){ ?>
<div class="header4">
    <ul class="localNavigation">
        <li <?php if($__Context->act=='dispIconshopAdminConfig'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispIconshopAdminConfig') ?>"><?php echo $__Context->lang->cmd_module_config ?></a></li>
        <li <?php if($__Context->act=='dispIconshopAdminAddConfig'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispIconshopAdminAddConfig') ?>"><?php echo $__Context->lang->cmd_addition_setup ?></a></li>
        <li <?php if($__Context->act=='dispIconshopAdminAddConfig'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispIconshopAdminSkinConfig') ?>"><?php echo $__Context->lang->skin_config ?></a></li>
        <li <?php if($__Context->act=='dispIconshopAdminIconList'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispIconshopAdminIconList') ?>"><?php echo $__Context->lang->iconList ?></a></li>
        <li <?php if($__Context->act=='dispIconshopAdminIconInsert'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispIconshopAdminIconInsert') ?>"><?php echo $__Context->lang->iconInsert ?></a></li>
        <li <?php if($__Context->act=='dispIconshopAdminMemberIconList'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispIconshopAdminMemberIconList') ?>"><?php echo $__Context->lang->memberIconList ?></a></li>
        <li <?php if($__Context->act=='dispIconshopAdminMemberIconInsert'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispIconshopAdminMemberIconInsert') ?>"><?php echo $__Context->lang->memberIconInsert ?></a></li>
        <li <?php if($__Context->act=='dispIconshopAdminLogList'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispIconshopAdminLogList') ?>"><?php echo $__Context->lang->iconshopLogList ?></a></li>
    </ul>
</div>
<?php } ?>
