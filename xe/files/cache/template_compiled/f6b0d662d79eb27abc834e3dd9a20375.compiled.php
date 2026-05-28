<?php if(!defined("__XE__"))exit;?><script>//<<![CDATA[
	var uploaded_fileinfo = {};
	<?php if($__Context->uploaded_fileinfo->error==0){ ?>
	uploaded_fileinfo.error = 0;
	uploaded_fileinfo.file_srl = <?php echo $__Context->uploaded_fileinfo->get('file_srl') ?>;
	uploaded_fileinfo.file_size = <?php echo $__Context->uploaded_fileinfo->get('file_size') ?>;
	uploaded_fileinfo.sid = '<?php echo $__Context->uploaded_fileinfo->get('sid') ?>';
	uploaded_fileinfo.direct_download = '<?php echo $__Context->uploaded_fileinfo->get('direct_download') ?>';
	uploaded_fileinfo.source_filename = '<?php echo $__Context->uploaded_fileinfo->get('source_filename') ?>';
	uploaded_fileinfo.upload_target_srl = '<?php echo $__Context->uploaded_fileinfo->get('upload_target_srl') ?>';
	uploaded_fileinfo.uploaded_filename = '<?php echo $__Context->uploaded_fileinfo->get('uploaded_filename') ?>';
	<?php }else{ ?>
	uploaded_fileinfo.error = -1;
	uploaded_fileinfo.message = '<?php echo $__Context->uploaded_fileinfo->message ?>';
	<?php } ?>
	<?php if($__Context->callback){ ?>
		try{
			parent[<?php echo $__Context->callback ?>](uploaded_fileinfo);
		}catch(e){
		
		}
	<?php } ?>
//]]>>
</script>
