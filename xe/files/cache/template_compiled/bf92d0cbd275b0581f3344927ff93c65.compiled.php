<?php if(!defined("__XE__"))exit;?>
<h3 class="xeAdmin"><?php echo $__Context->lang->bannermgm ?> <span class="gray"><?php echo $__Context->lang->cmd_management ?></span></h3>
<div class="infoText"><?php echo nl2br($__Context->lang->about_bannermgm) ?></div>
<?php if($__Context->module_info){ ?>
<div class="header4">
    <ul class="localNavigation">
        <li <?php if($__Context->act=='dispBannermgmAdminContent'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('act','dispBannermgmAdminContent','module_srl','') ?>"><?php echo $__Context->lang->cmd_bannermgm_list ?></a></li>
        <li <?php if($__Context->act=='dispBannermgmAdminInfo'||$__Context->act=='dispBannermgmAdminInsert'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('act','dispBannermgmAdminInfo') ?>"><?php if($__Context->bannermgm_srl){;
echo $__Context->lang->cmd_view_info;
}else{;
echo $__Context->lang->cmd_create_bannermgm;
} ?></a></li>
    </ul>
</div>
<?php } ?>
