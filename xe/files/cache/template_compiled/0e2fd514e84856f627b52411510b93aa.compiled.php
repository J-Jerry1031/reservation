<?php if(!defined("__XE__"))exit;?><form action="./" method="get" class="lb-bar lb-e" id="lb_search"<?php if(!$__Context->search_keyword){ ?> style="display: none"<?php } ?> onsubmit="return lb.se(this)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
	<div class="lb-bar-w"></div><div class="lb-bar-e"></div><div class="lb-bar-c"></div>
	<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
	<?php if($__Context->category){ ?><input type="hidden" name="category" value="<?php echo $__Context->category ?>" /><?php } ?>
	<?php if($__Context->vid){ ?><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><?php } ?>
	<?php if($__Context->sort_index){ ?><input type="hidden" name="sort_index" value="<?php echo $__Context->sort_index ?>" /><?php } ?>
	<?php if($__Context->order_type){ ?><input type="hidden" name="order_type" value="<?php echo $__Context->order_type ?>" /><?php } ?>
	<h2 class="lb-tl-title" title="<?php echo $__Context->lang->cmd_search ?>">
		<span class="lb-search lb-i"></span>
		<span class="lb-h">
			<?php echo $__Context->lang->cmd_search ?>
		</span>
	</h2>
	<dl class="lb-dl">
		<dt class="lb-h">
			<?php echo $__Context->lang->search_target ?>
		</dt>
		<dd class="lb-dd">
			<div class="lb-m lb-tl-m lb-sel lb-ina" title="<?php echo $__Context->lang->search_target ?>">
				<button class="lb-m-b" type="button">
					<span class="lb-m-b-p">
						<?php echo $__Context->lang->search_target ?>
					</span>
				</button>
				<ul class="lb-m-list">
					<?php if($__Context->search_option&&count($__Context->search_option))foreach($__Context->search_option as $__Context->key=>$__Context->val){ ?><li class="lb-m-li<?php echo $__Context->search_target == $__Context->key || (!$__Context->search_target && $__Context->key =='title_content') ? ' lb-sel' : '' ?>">
						<label class="lb-m-link lb-lbl" for="lb_<?php echo $__Context->lb->id ?>">
							<span class="lb-m-p">
								<?php echo $__Context->val ?>
							</span>
						</label>
						<input class="lb-m-r" id="lb_<?php echo $__Context->lb->id ?>" type="radio" name="search_target" value="<?php echo $__Context->key ?>"<?php if($__Context->search_target == $__Context->key || (!$__Context->search_target && $__Context->key == 'title_content')){ ?> checked="checked"<?php } ?> title="<?php echo $__Context->val ?>" />
						<?php  $__Context->lb->id++;  ?>
					</li><?php } ?>
				</ul>
			</div>
		</dd>
		<dt class="lb-h">
			<label class="lb-lbl" for="lb_<?php echo $__Context->lb->id ?>">
				<?php echo $__Context->lang->search_keyword ?>
			</label>
		</dt>
		<dd class="lb-dd">
			<input class="lb-txt" id="lb_<?php echo $__Context->lb->id ?>" type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" />
		</dd>
		<?php  $__Context->lb->id++;  ?>
	</dl>
	<button class="lb-l lb-b lb-submit lb-i" type="submit" title="<?php echo $__Context->lang->cmd_search ?>">
		<?php echo $__Context->lang->cmd_search ?>
	</button>
	<?php if($__Context->search_keyword){ ?><a class="lb-tl-b lb-b lb-cancel lb-i" href="<?php echo getUrl('search_target','','search_keyword','') ?>" title="<?php echo $__Context->lang->cmd_cancel ?>">
		<span class="lb-h">
			<?php echo $__Context->lang->cmd_cancel ?>
		</span>
	</a><?php } ?>
	<?php if(!$__Context->search_keyword){ ?><button class="lb-tl-b lb-b lb-cancel lb-i" onclick="jQuery('#lb_search').hide(); return false" title="<?php echo $__Context->lang->cmd_cancel ?>">
		<span class="lb-h">
			<?php echo $__Context->lang->cmd_cancel ?>
		</span>
	</button><?php } ?>	
</form>
<div class="lb-c"></div>
