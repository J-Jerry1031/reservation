<?php if(!defined("__XE__"))exit;
echo $__Context->lang->msg_confirm_account_info ?><br />
<div class="border">
<hr noshade="noshade" />
<ul>
    <li>Site : <a href="<?php echo getUrl() ?>" target="_blank"><?php echo getUrl() ?></a></li>
    <?php if($__Context->memberInfo&&count($__Context->memberInfo))foreach($__Context->memberInfo as $__Context->name=>$__Context->value){;
if(!is_object($__Context->value)&&!is_array($__Context->value)){ ?><li><?php echo $__Context->name ?> : <?php echo $__Context->value ?></li><?php }} ?>
</ul>
<hr noshade="noshade" />
<?php echo $__Context->lang->msg_confirm_account_comment ?><br />
<a href="<?php echo $__Context->auth_url ?>"><?php echo $__Context->auth_url ?></a>
</div>