<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/bulkmsg/tpl','header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<div class="table even">
	<table class="table table-striped table-hover">
		<caption>
			Total: <?php echo number_format($__Context->total_count) ?>, Page: <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?>
		</caption>
		<thead>
			<tr>
				<th><?php echo $__Context->lang->no ?></th>
		        <th><?php echo $__Context->lang->target_type ?></th>
				<th><?php echo $__Context->lang->title ?></th>
		        <th><?php echo $__Context->lang->reception ?></th>
		        <th><?php echo $__Context->lang->cmd_stop ?></th>
		        <th><?php echo $__Context->lang->cmd_modify ?></th>
				<th><?php echo $__Context->lang->cmd_delete ?></th>
		    </tr>
		</thead>
		<tbody>
		    <?php if($__Context->message_list&&count($__Context->message_list))foreach($__Context->message_list as $__Context->no => $__Context->oMessage){ ?>
			<tr>
				<td><?php echo $__Context->no ?></td>
				<td><?php echo $__Context->lang->target_type_array[$__Context->oMessage->target_type] ?></td>
				<td><?php echo $__Context->oMessage->title ?></td>
		        <td><?php echo $__Context->oMessage->reception_cnt ?></td>
		        <td><a href="#" onclick="doUpdateMessage('<?php echo $__Context->oMessage->document_srl ?>','<?php echo $__Context->oMessage->is_stop ?>'); return false;"><?php echo $__Context->oMessage->is_stop == "N" ? $__Context->lang->cmd_stop : $__Context->lang->cmd_start ?></a></td>
				<td><a href="<?php echo getUrl('act','dispBulkmsgAdminInsert','document_srl',$__Context->oMessage->document_srl) ?>"><?php echo $__Context->lang->cmd_modify ?></a></td>
				<td><a href="#" onclick="doDeleteMessage('<?php echo $__Context->oMessage->document_srl ?>'); return false;"><?php echo $__Context->lang->cmd_delete ?></a></td>
		    </tr>
		    <?php } ?>
		</tbody>
	</table>
</div>
<div class="x_clearfix btnArea">
	<div class="x_pull-right">
		<a class="x_btn x_btn-primary" href="<?php echo getUrl('act','dispBulkmsgAdminInsert','message_srl','') ?>"><?php echo $__Context->lang->cmd_make ?></a>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/bulkmsg/tpl','_paging.html') ?>
<script type="text/javascript">
	var cmd_do_delete_message = '<?php echo $__Context->lang->cmd_do_delete_message ?>';
	var cmd_do_start_message = '<?php echo $__Context->lang->cmd_do_start_message ?>';
	var cmd_do_stop_message = '<?php echo $__Context->lang->cmd_do_stop_message ?>';
</script>