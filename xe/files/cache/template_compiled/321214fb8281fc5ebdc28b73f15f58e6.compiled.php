<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/bannermgm/tpl/filter','banner_delete.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/bannermgm/tpl/js/bannermgm_admin.js--><?php $__tmp=array('modules/bannermgm/tpl/js/bannermgm_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/bannermgm/tpl','header.html') ?>
<!-- 삭제를 위한 임시 form -->
<form id="fo_delete" action="./" method="get"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="bannermgm_srl" value="" />
</form>
<!-- 정보 -->
<div class="summary">
    <strong>Total</strong> <em><?php echo number_format($__Context->total_count) ?></em>, Page <strong><?php echo number_format($__Context->page) ?></strong>/<?php echo number_format($__Context->total_page) ?>
</div>
<!-- 목록 -->
<table cellspacing="0" class="rowTable">
<thead>
    <tr>
        <th scope="col"><div><?php echo $__Context->lang->no ?></div></th>
        <th scope="col" class="half_wide"><div><?php echo $__Context->lang->banner_name ?></div></th>
        <th scope="col" class="half_wide"><div><?php echo $__Context->lang->target_url ?></div></th>
        <th scope="col"><div><?php echo $__Context->lang->regdate ?></div></th>
	<th scope="col"><div><?php echo $__Context->lang->last_bannerupdate ?></div></th>
        <th scope="col" colspan="2"><div>&nbsp;</div></th>
    </tr>
</thead>
<tbody>
    <?php if($__Context->bannermgm_list&&count($__Context->bannermgm_list))foreach($__Context->bannermgm_list as $__Context->no => $__Context->val){ ?>
    <tr>
        <td class="center number"><?php echo $__Context->val->bannermgm_srl ?></td>
	<td><?php echo htmlspecialchars($__Context->val->banner_name) ?></td>
        <td><?php echo htmlspecialchars($__Context->val->link_url) ?></td>		
        <td><?php echo zdate($__Context->val->regdate,"Y-m-d") ?></td>
		<td>
			<?php if($__Context->val->updatedate!=null && $__Context->val->updatedate > 0){ ?>
				<?php echo zdate($__Context->val->updatedate,"Y-m-d") ?>
			<?php } ?>
		</td>
        <td><a href="<?php echo getUrl('act','dispBannermgmAdminInfo','bannermgm_srl',$__Context->val->bannermgm_srl) ?>" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_setup ?></span></a></td>
        <td><a href="#" onClick="doDeleteBannermgm(<?php echo $__Context->val->bannermgm_srl ?>); return false;" class="buttonSet buttonDelete"><span><?php echo $__Context->lang->cmd_delete ?></span></a></td>
    </tr>
    <?php } ?>
</tbody>
</table>
<div class="clear">
    <div class="fr">
        <a href="<?php echo getUrl('act','dispBannermgmAdminInsert','bannermgm_srl','') ?>" class="button black strong"><span><?php echo $__Context->lang->cmd_make ?></span></a>
    </div>
</div>
<!-- 페이지 네비게이션 -->
<div class="pagination a1">
    <a href="<?php echo getUrl('page','','module_srl','') ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
    <?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
        <?php if($__Context->page == $__Context->page_no){ ?>
            <strong><?php echo $__Context->page_no ?></strong> 
        <?php }else{ ?>
            <a href="<?php echo getUrl('page',$__Context->page_no,'module_srl','') ?>"><?php echo $__Context->page_no ?></a> 
        <?php } ?>
    <?php } ?>
    <a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'module_srl','') ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
</div>
