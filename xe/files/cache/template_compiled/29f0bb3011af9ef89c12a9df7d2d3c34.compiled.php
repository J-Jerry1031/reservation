<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_header.html') ?>
<?php if(__ZBXE_VERSION__>='1.7'){ ?>
	<h1><?php echo $__Context->module_config->member_menu_name ?></h1>
	<table class="table table-striped table-hover">
		<caption>Total: <?php echo number_format($__Context->total_count) ?>, Page: <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?></caption>
		<thead>
			<tr>
				<th style="white-space:nowrap"><?php echo $__Context->lang->date ?></th>			
				<th style="white-space:nowrap"><?php echo $__Context->lang->htype ?></th>
				<th class="title" style="white-space:nowrap"><?php echo $__Context->lang->content ?></th>
				<th style="white-space:nowrap"><?php echo $__Context->lang->point ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->pointhistory_list&&count($__Context->pointhistory_list))foreach($__Context->pointhistory_list as $__Context->no=>$__Context->val){ ?><tr>
				<td><?php echo zdate($__Context->val->regdate,"Y-m-d H:i:s") ?></td>		
				<td><?php if($__Context->val->htype=='A'){;
echo $__Context->lang->cmd_saving;
}elseif($__Context->val->htype=='M'){;
echo $__Context->lang->use;
} ?></td>
				<td class="title"><?php echo $__Context->val->content ?></td>
				<td><?php if($__Context->val->htype=='A'){ ?>+<?php };
echo number_format($__Context->val->point);
echo $__Context->module_config->point_unit_char ?></td>
			</tr><?php } ?>
		</tbody>
	</table>
	<div class="pagination pagination-centered">
		<ul>
			<li><a href="<?php echo getUrl('page','') ?>" class="direction">&laquo; <?php echo $__Context->lang->first_page ?></a></li> 
			<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
			<li<?php if($__Context->page == $__Context->page_no){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('page',$__Context->page_no) ?>"><?php echo $__Context->page_no ?></a></li> 
			<?php } ?>
			<li><a href="<?php echo getUrl('page',$__Context->page_navigation->last_page) ?>" class="direction"><?php echo $__Context->lang->last_page ?> &raquo;</a></li>
		</ul>
	</div>
<?php }elseif(__ZBXE_VERSION__>='1.5'){ ?>
	<h1 class="h1"><?php echo $__Context->module_config->member_menu_name ?></h1>
	<div class="table even">
		<table width="100%" border="1" cellspacing="0">
			<caption>
				Total: <?php echo number_format($__Context->total_count) ?>, Page <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?>
			</caption>
			<thead>
				<tr>
					<th><?php echo $__Context->lang->date ?></th>
					<th><?php echo $__Context->lang->htype ?></th>
					<th class="title"><?php echo $__Context->lang->content ?></th>
					<th><?php echo $__Context->lang->point ?></th>
				</tr>
			</thead>
			<tbody>
				<?php if($__Context->pointhistory_list&&count($__Context->pointhistory_list))foreach($__Context->pointhistory_list as $__Context->no=>$__Context->val){ ?><tr>
					<td><?php echo zdate($__Context->val->regdate,"Y-m-d H:i:s") ?></td>
					<td><?php if($__Context->val->htype=='A'){;
echo $__Context->lang->cmd_saving;
}elseif($__Context->val->htype=='M'){;
echo $__Context->lang->use;
} ?></td>
					<td class="title"><?php echo $__Context->val->content ?></td>
					<td><?php if($__Context->val->htype=='A'){ ?>+<?php };
echo number_format($__Context->val->point);
echo $__Context->module_config->point_unit_char ?></td>
				</tr><?php } ?>
			</tbody>
		</table>
	</div>
	<div class="pagination">
		<a href="<?php echo getUrl('page','') ?>" class="direction">&lsaquo; <?php echo $__Context->lang->first_page ?></a> 
		<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
			<?php if($__Context->page == $__Context->page_no){ ?>
				<strong><?php echo $__Context->page_no ?></strong> 
			<?php }else{ ?>
				<a href="<?php echo getUrl('page',$__Context->page_no) ?>"><?php echo $__Context->page_no ?></a> 
			<?php } ?>
		<?php } ?>
		<a href="<?php echo getUrl('page',$__Context->page_navigation->last_page) ?>" class="direction"><?php echo $__Context->lang->last_page ?> &rsaquo;</a>
	</div>
	
<?php }elseif(__ZBXE_VERSION__>='1.4'){ ?>
	<!--#Meta:modules/member/skins/default/js/member.js--><?php $__tmp=array('modules/member/skins/default/js/member.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	<!--#Meta:modules/member/skins/default/css/default.css--><?php $__tmp=array('modules/member/skins/default/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	<h3><?php echo $__Context->module_config->member_menu_name ?></h3>
	<table cellspacing="0" class="colTable">
	<caption>Total : <?php echo number_format($__Context->total_count) ?>, Page <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?></caption>
	<thead>
		<tr>
				<th class="title"><div><?php echo $__Context->lang->date ?></div></th>
				<th class="title"><div><?php echo $__Context->lang->htype ?></div></th>
				<th class="title"><div><?php echo $__Context->lang->content ?></div></th>
				<th class="title"><div><?php echo $__Context->lang->point ?></div></th>
			</tr>
		</tr>
	</thead>
	<tbody>
		<?php if($__Context->pointhistory_list&&count($__Context->pointhistory_list))foreach($__Context->pointhistory_list as $__Context->no => $__Context->val){ ?>
			<tr>
				<td class="nowrap"><?php echo zdate($__Context->val->regdate,"Y-m-d H:i:s") ?></td>		
				<td class="nowrap"><?php if($__Context->val->htype=='A'){;
echo $__Context->lang->cmd_saving;
}elseif($__Context->val->htype=='M'){;
echo $__Context->lang->use;
} ?></td>
				<td class="wide"><?php echo $__Context->val->content ?></td>
				<td class="nowrap"><?php if($__Context->val->htype=='A'){ ?>+<?php };
echo number_format($__Context->val->point);
echo $__Context->module_config->point_unit_char ?></td>
			</tr>
		<?php } ?>
	</tbody>
	</table>
	<div class="pagination a1">
		<a href="<?php echo getUrl('page','') ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
		<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
			<?php if($__Context->page == $__Context->page_no){ ?>
				<strong><?php echo $__Context->page_no ?></strong> 
			<?php }else{ ?>
				<a href="<?php echo getUrl('page',$__Context->page_no) ?>"><?php echo $__Context->page_no ?></a> 
			<?php } ?>
		<?php } ?>
		<a href="<?php echo getUrl('page',$__Context->page_navigation->last_page) ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
	</div>
	
<?php } ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_footer.html') ?>