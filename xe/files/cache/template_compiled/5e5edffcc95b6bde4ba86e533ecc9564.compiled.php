<?php if(!defined("__XE__"))exit;?><!--#Meta:addons/aa_add_vote_list/tpl/default.css--><?php $__tmp=array('addons/aa_add_vote_list/tpl/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:addons/aa_add_vote_list/tpl/default.js--><?php $__tmp=array('addons/aa_add_vote_list/tpl/default.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php  if($__Context->response_size > 7) $__Context->response_size = 7; ?>
<div id="vote_member_list_wrap">
	<?php if($__Context->member_info){ ?><div id="vote_member_list" class="add_vote_list ss_<?php echo $__Context->response_size ?>">
		<div class="subject_wrap">
			<a><?php echo $__Context->user_text1 ?></a>
			<a class="total_count"><?php echo $__Context->total_count->count ?></a>
			<a><?php echo $__Context->user_text2 ?></a>
			<span class="vote_list_more_btn">더보기</span>
		</div>
		<div class="list_wrap">
			<ul id="normal_vote_member_list">
				<?php  $__Context->idx = 0; ?>
				<?php if($__Context->member_info&&count($__Context->member_info))foreach($__Context->member_info as $__Context->key=>$__Context->info){ ?><li>
					<?php if($__Context->idx < $__Context->list_limit){ ?>
						<?php if($__Context->profile_img_use == 'yes'){ ?>
							<?php 	$__Context->oMemberModel = getModel('member'); $__Context->profile_info = $__Context->oMemberModel->getProfileImage($__Context->info->member_srl);  ?>
							<?php if($__Context->profile_info->src){ ?>
							<img src="<?php echo $__Context->profile_info->src ?>" alt="profile_img" class="profile_img_user" />
							<?php }else{ ?>
							<img src="/xe/addons/aa_add_vote_list/tpl/user.png" alt="profile_img" class="profile_img_copy" />
							<?php } ?>
						<?php } ?>
						<?php  $__Context->user_vote_time = date("Y년 m월 d일에 추천", strtotime($__Context->info->regdate));  ?>
						<a href="#popup_menu_area" class="member_<?php echo $__Context->info->member_srl ?>" onclick="return false" title="<?php echo $__Context->user_vote_time ?>"><?php echo $__Context->info->nick_name; ?></a>
					<?php  $__Context->idx++ ?>
					<?php } ?>
				</li><?php } ?>
			</ul>
			<ul id="plus_vote_member_list">
				<?php if($__Context->member_info&&count($__Context->member_info))foreach($__Context->member_info as $__Context->key=>$__Context->info){ ?><li>
					<?php if($__Context->profile_img_use == 'yes'){ ?>
						<?php 	$__Context->oMemberModel = getModel('member'); $__Context->profile_info = $__Context->oMemberModel->getProfileImage($__Context->info->member_srl);  ?>
						<?php if($__Context->profile_info->src){ ?>
						<img src="<?php echo $__Context->profile_info->src ?>" alt="profile_img" class="profile_img_user" />
						<?php }else{ ?>
						<img src="/xe/addons/aa_add_vote_list/tpl/user.png" alt="profile_img" class="profile_img_copy" />
						<?php } ?>
					<?php } ?>
					<?php  $__Context->user_vote_time = date("Y년 m월 d일에 추천", strtotime($__Context->info->regdate));  ?>
					<a href="#popup_menu_area" class="member_<?php echo $__Context->info->member_srl ?>" onclick="return false" title="<?php echo $__Context->user_vote_time ?>"><?php echo $__Context->info->nick_name; ?></a>
				</li><?php } ?>
			</ul>
		</div>
	</div><?php } ?>
</div>