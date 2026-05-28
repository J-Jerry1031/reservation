<?php if(!defined("__XE__"))exit;?>
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board','header.html') ?>
    <?php if($__Context->oDocument->isExists() && $__Context->module_info->default_style != 'blog'){ ?>
    <div class="viewDocument">
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board','view_document.html') ?>
    </div>
    <?php } ?>
    <?php if($__Context->module_info->default_style == 'webzine'){ ?>
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board','style.webzine.html') ?>
    <?php }elseif($__Context->module_info->default_style == 'gallery'){ ?>
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board','style.gallery.html') ?>
    <?php }elseif($__Context->module_info->default_style == 'forum'){ ?>
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board','style.forum.html') ?>
    <?php }elseif($__Context->module_info->default_style == 'blog'){ ?>
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board','style.blog.html') ?>
    <?php }else{ ?>
        <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board','style.list.html') ?>
    <?php } ?>
    <div class="boardBottom">
    <!-- 글쓰기, 목록 버튼 -->
        <div class="leftButtonBox">
            <?php if($__Context->grant->manager){ ?>
                <a href="<?php echo getUrl('','module','document','act','dispDocumentManageDocument') ?>" onclick="popopen(this.href,'manageDocument'); return false;" class="button <?php echo $__Context->btn_class ?>"><span><?php echo $__Context->lang->cmd_manage_document ?></span></a>
            <?php } ?>
            <?php if($__Context->module_info->default_style != 'blog'){ ?>
            <a href="<?php echo getUrl('','mid',$__Context->mid,'page',$__Context->page,'document_srl','','listStyle',$__Context->listStyle) ?>" class="button <?php echo $__Context->btn_class ?>"><span><?php echo $__Context->lang->cmd_list ?></span></a>
            <?php } ?>
        </div>
        <div class="rightButtonBox">
            <a href="<?php echo getUrl('act','dispBoardWrite','document_srl','') ?>" class="button <?php echo $__Context->btn_class ?>"><span><?php echo $__Context->lang->cmd_write ?></span></a>
        </div>
    <!-- 페이지 네비게이션 -->
        <div class="pagination a1">
            <a href="<?php echo getUrl('page','','document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
            <?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
                <?php if($__Context->page == $__Context->page_no){ ?>
                    <strong><?php echo $__Context->page_no ?></strong> 
                <?php }else{ ?>
                    <a href="<?php echo getUrl('page',$__Context->page_no,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>"><?php echo $__Context->page_no ?></a>
                <?php } ?>
            <?php } ?>
            <a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'document_srl','','division',$__Context->division,'last_division',$__Context->last_division,'entry','') ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
        </div>
    <!-- 검색 -->
        <?php if($__Context->grant->view && $__Context->module_info->default_style != 'blog'){ ?>
        <div class="boardSearch">
            <form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" id="fo_search"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
                <?php if($__Context->vid){ ?>
                <input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
                <?php } ?>
                <input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
                <input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
                <select name="search_target">
                    <?php if($__Context->search_option&&count($__Context->search_option))foreach($__Context->search_option as $__Context->key => $__Context->val){ ?>
                    <option value="<?php echo $__Context->key ?>" <?php if($__Context->search_target==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val ?></option>
                    <?php } ?>
                </select>
                <input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" class="inputTypeText"/>
                <?php if($__Context->last_division){ ?>
                    <a href="<?php echo getUrl('page',1,'document_srl','','division',$__Context->last_division,'last_division','','entry','') ?>" class="button <?php echo $__Context->btn_class ?>"><span><?php echo $__Context->lang->cmd_search_next ?></span></a>
                <?php } ?>
                <a href="#" onclick="xGetElementById('fo_search').submit();return false;" class="button <?php echo $__Context->btn_class ?>"><span><?php echo $__Context->lang->cmd_search ?></span></a>
                <a href="<?php echo getUrl('','mid',$__Context->mid,'listStyle',$__Context->listStyle) ?>" class="button <?php echo $__Context->btn_class ?>"><span><?php echo $__Context->lang->cmd_cancel ?></span></a>
            </form>
        </div>
        <?php } ?>
    </div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/xe_board','footer.html') ?>
