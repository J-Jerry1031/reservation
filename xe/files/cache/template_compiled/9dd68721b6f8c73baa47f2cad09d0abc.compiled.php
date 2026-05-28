<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sosi_memo','_header.html') ?>
<?php if($__Context->oDocument->isExists()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sosi_memo','_read.html');
} ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sosi_memo','_style.memo.html') ?>
<div class="list_footer <?php echo $__Context->module_info->infi_page ?>">
    <?php if($__Context->document_list || $__Context->notice_list){ ?><div class="elise-pagination cfix" id="pagess">
        <a href="<?php echo getUrl('page','','document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" class="page-direction page-prev"><span class="arrow-prev">←</span>First Page</a> 
        <div class="page-list">
        	<?php while($__Context->page_no=$__Context->page_navigation->getNextPage()){ ?>
            	<?php if($__Context->page==$__Context->page_no){ ?><span class="page page-current"><span class="page-current-mark"></span><?php echo $__Context->page_no ?></span><?php } ?>
                <?php if($__Context->page!=$__Context->page_no){ ?><a class="page page-link" href="<?php echo getUrl('page',$__Context->page_no,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>"><?php echo $__Context->page_no ?></a><?php } ?>
			<?php } ?>
        </div>
        <a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division) ?>" class="page-direction page-next">Last Page<span class="arrow-next">→</span></a>
    </div><?php } ?><!-- .elise-pagination -->
   
</div><!-- .list-footer -->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sosi_memo','_footer.html') ?>