<?php if(!defined("__XE__"))exit;?><!--#Meta:/popup.css--><?php $__tmp=array('/popup.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/coupon/tpl/js/coupon_popup.js--><?php $__tmp=array('modules/coupon/tpl/js/coupon_popup.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div id="popHeader">
    <h1 class="h1"><?php echo $__Context->lang->cmd_find_member ?></h1>
</div>
<div id="popBody">
    <form action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	    <input type="hidden" name="act" value="dispCouponAdminFindMember" />
	    <input type="hidden" name="page" value="" />
	    <input type="hidden" name="target" value="<?php echo $__Context->target ?>" />
	    <select name="search_target">
	        <option value="nick_name"><?php echo $__Context->lang->nick_name ?></option>
	        <option value="email_address"><?php echo $__Context->lang->email_address ?></option>
	        <option value="user_name"><?php echo $__Context->lang->user_name ?></option>
	        <option value="user_id"><?php echo $__Context->lang->user_id ?></option>
	    </select>
	    <input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" class="inputTypeText" />
	    <span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></span>
	    <br />
	    <table class="rowTable" cellspacing="0">
	    	<thead>
			    <tr>
			        <th><div><?php echo $__Context->lang->nick_name ?></div></th>
			        <th><div><?php echo $__Context->lang->email_address ?></div></th>
			        <th><div><?php echo $__Context->lang->user_id ?></div></th>
			        <th><div><?php echo $__Context->lang->user_name ?></div></th>
			        <th><div><?php echo $__Context->lang->cmd_select ?></div></th>
			    </tr>
	    	</thead>
		    <tbody>
			    <?php if($__Context->member_list){ ?>
			    <?php if($__Context->member_list&&count($__Context->member_list))foreach($__Context->member_list as $__Context->key => $__Context->val){ ?>
			    <tr>
			        <td><?php echo $__Context->val->nick_name ?></td>
			        <td><?php echo $__Context->val->email_address ?></td>
			        <td><?php echo $__Context->val->user_id ?></td>
			        <td><?php echo $__Context->val->user_name ?></td>
			        <td><a href="#" onclick="insertMember('<?php echo Context::get('target') ?>', <?php echo $__Context->val->member_srl ?>); return false;" class="button green"><span><?php echo $__Context->lang->cmd_select ?></span></a></td>
			    </tr>
			    <?php } ?>
			    <?php }else{ ?>
			    <tr>
			        <td colspan="5">
			        <?php if($__Context->search_keyword && $__Context->search_target){ ?>
			        <?php echo $__Context->lang->msg_no_result ?>
			        <?php }else{ ?>
			        <?php echo $__Context->lang->msg_no_keyword ?>
			        <?php } ?>
			        </td>
			    </tr>
			    <?php } ?>
		    </tbody>
	    </table>
    </form>
</div>