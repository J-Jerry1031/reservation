<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/rank_activity/skins/default/css/widget.css--><?php $__tmp=array('widgets/rank_activity/skins/default/css/widget.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__Context->id = rand(0, 9999); ?>
<div class="widget-wrapper default">
<div id="activity<?php echo $__Context->id ?>" class="activity">
	<div class="activity-section">
        <span class="widget-title"><?php echo $__Context->widget_info->Set_array[title] ?></span>
	</div>
<div class="ks_activity">
	<div class="bottom_mid">
		<div class="box_mid_left">
			<div class="box_mid_right">
				<div class="bottom_left">
					<div class="bottom_right">
						<div class="top_left">
							<div class="top_right">
	<div class="activity-section">
		<a class="activity-section-title active" href="#activity<?php echo $__Context->id ?>-0">글&nbsp;등록&nbsp;횟수</a>
		<div id="activity<?php echo $__Context->id ?>-0" class="activity-section-content open" style="display:block">
			<?php  $__Context->img_count=1 ?>
			<table width="100%" align="center" valign="middle" border="0"  bordercolor="#F9F9F9" cellspacing="0" cellpadding="0">
				<?php if($__Context->widget_info->ActivityDocCount&&count($__Context->widget_info->ActivityDocCount))foreach($__Context->widget_info->ActivityDocCount as $__Context->val){ ?>
				<tr>
					<td width="5%" >&nbsp;</td>
					<td width="63%" align="left" valign="middle" height="25">
						<?php if($__Context->img_count < 4){ ?>
							<img src="/xe/widgets/rank_activity/skins/default/normal/num<?php echo $__Context->img_count ?>.gif" align="absmiddle">&nbsp;<span class="member_<?php echo $__Context->val->member_srl ?>"><font style="FONT-SIZE: 8.5pt;" face=돋움 color="#747474"><?php echo $__Context->val->nick_name ?></font></span>
						<?php }else{ ?>
							<img src="/xe/widgets/rank_activity/skins/default/normal/num<?php echo $__Context->img_count ?>.gif" align="absmiddle">&nbsp;<span class="member_<?php echo $__Context->val->member_srl ?>"><font style="FONT-SIZE: 8.5pt;" face=돋움 color="#747474"><?php echo $__Context->val->nick_name ?></font></span>
						<?php } ?>						
					</td>
					<td width="28%" align="right" valign="middle">
						<font style="FONT-SIZE: 8.5pt;" face=돋움 color="#808080"><?php echo number_format($__Context->val->count) ?></font>&nbsp;<font style="FONT-SIZE: 8.5pt;" face=돋움 color="#939393">회</font>
					</td>
					<td width="4%" >&nbsp;</td>
				</tr>
				<?php  $__Context->img_count ++ ?>
            <?php } ?>
			</table>
		</div>
	</div>
							</div>
						</div>
					</div>
				</div>
			</div>    
		</div>
	</div>
</div>
<div class="ks_activity">
	<div class="bottom_mid">
		<div class="box_mid_left">
			<div class="box_mid_right">
				<div class="bottom_left">
					<div class="bottom_right">
						<div class="top_left">
							<div class="top_right">
	<div class="activity-section">
		<a class="activity-section-title" href="#activity<?php echo $__Context->id ?>-1">댓글&nbsp;등록&nbsp;횟수</a>
		<div id="activity<?php echo $__Context->id ?>-1" class="activity-section-content">
			<?php  $__Context->img_count=1 ?>
			<table width="100%" align="center" valign="middle" border="0"  bordercolor="#F9F9F9" cellspacing="0" cellpadding="0">
				<?php if($__Context->widget_info->ActivityCommCount&&count($__Context->widget_info->ActivityCommCount))foreach($__Context->widget_info->ActivityCommCount as $__Context->val){ ?>
				<tr>
					<td width="5%" >&nbsp;</td>
					<td width="63%" align="left" valign="middle" height="25">
						<?php if($__Context->img_count < 4){ ?>
							<img src="/xe/widgets/rank_activity/skins/default/normal/num<?php echo $__Context->img_count ?>.gif" align="absmiddle">&nbsp;<span class="member_<?php echo $__Context->val->member_srl ?>"><font style="FONT-SIZE: 8.5pt;" face=돋움 color="#747474"><?php echo $__Context->val->nick_name ?></font></span>
						<?php }else{ ?>
							<img src="/xe/widgets/rank_activity/skins/default/normal/num<?php echo $__Context->img_count ?>.gif" align="absmiddle">&nbsp;<span class="member_<?php echo $__Context->val->member_srl ?>"><font style="FONT-SIZE: 8.5pt;" face=돋움 color="#747474"><?php echo $__Context->val->nick_name ?></font></span>
						<?php } ?>						
					</td>
					<td width="28%" align="right" valign="middle">
						<font style="FONT-SIZE: 8.5pt;" face=돋움 color="#808080"><?php echo number_format($__Context->val->count) ?></font>&nbsp;<font style="FONT-SIZE: 8.5pt;" face=돋움 color="#939393">회</font>
					</td>
					<td width="4%" >&nbsp;</td>
				</tr>
				<?php  $__Context->img_count ++ ?>
            <?php } ?>
			</table>
		</div>
	</div>
							</div>
						</div>
					</div>
				</div>
			</div>    
		</div>
	</div>
</div>
	
<div class="ks_activity">
	<div class="bottom_mid">
		<div class="box_mid_left">
			<div class="box_mid_right">
				<div class="bottom_left">
					<div class="bottom_right">
						<div class="top_left">
							<div class="top_right">
	<div class="activity-section">
		<a class="activity-section-title" href="#activity<?php echo $__Context->id ?>-2">조회수</a>
		<div id="activity<?php echo $__Context->id ?>-2" class="activity-section-content">
			<?php  $__Context->img_count=1 ?>
			<table width="100%" align="center" valign="middle" border="0"  bordercolor="#C0C0C0" cellspacing="0" cellpadding="0">
				<?php if($__Context->widget_info->ActivityReadCount&&count($__Context->widget_info->ActivityReadCount))foreach($__Context->widget_info->ActivityReadCount as $__Context->val){ ?>
				<tr>
					<td width="5%" >&nbsp;</td>
					<td width="63%" align="left" valign="middle" height="25">
						<?php if($__Context->img_count < 4){ ?>
							<img src="/xe/widgets/rank_activity/skins/default/normal/num<?php echo $__Context->img_count ?>.gif" align="absmiddle">&nbsp;<span class="member_<?php echo $__Context->val->member_srl ?>"><font style="FONT-SIZE: 8.5pt;" face=돋움 color="#747474"><?php echo $__Context->val->nick_name ?></font></span>
						<?php }else{ ?>
							<img src="/xe/widgets/rank_activity/skins/default/normal/num<?php echo $__Context->img_count ?>.gif" align="absmiddle">&nbsp;<span class="member_<?php echo $__Context->val->member_srl ?>"><font style="FONT-SIZE: 8.5pt;" face=돋움 color="#747474"><?php echo $__Context->val->nick_name ?></font></span>
						<?php } ?>						
					</td>
					<td width="28%" align="right" align="right" valign="middle">
						<font style="FONT-SIZE: 8.5pt;" face=돋움 color="#808080"><?php echo number_format($__Context->val->count) ?></font>&nbsp;<font style="FONT-SIZE: 8.5pt;" face=돋움 color="#939393">회</font>
					</td>
					<td width="4%" >&nbsp;</td>
				</tr>
				<?php  $__Context->img_count ++ ?>
            <?php } ?>
			</table>
		</div>
	</div>
							</div>
						</div>
					</div>
				</div>
			</div>    
		</div>
	</div>
</div>
<div class="ks_activity">
	<div class="bottom_mid">
		<div class="box_mid_left">
			<div class="box_mid_right">
				<div class="bottom_left">
					<div class="bottom_right">
						<div class="top_left">
							<div class="top_right">
	<div class="activity-section">
		<a class="activity-section-title" href="#activity<?php echo $__Context->id ?>-3">추천수</a>
		<div id="activity<?php echo $__Context->id ?>-3" class="activity-section-content">
			<?php  $__Context->img_count=1 ?>
			<table width="100%" align="center" valign="middle" border="0"  bordercolor="#C0C0C0" cellspacing="0" cellpadding="0">
				<?php if($__Context->widget_info->ActivityVoteCount&&count($__Context->widget_info->ActivityVoteCount))foreach($__Context->widget_info->ActivityVoteCount as $__Context->val){ ?>
				<tr>
					<td width="5%" >&nbsp;</td>
					<td width="63%" align="left" valign="middle" height="25">
						<?php if($__Context->img_count < 4){ ?>
							<img src="/xe/widgets/rank_activity/skins/default/normal/num<?php echo $__Context->img_count ?>.gif" align="absmiddle">&nbsp;<span class="member_<?php echo $__Context->val->member_srl ?>"><font style="FONT-SIZE: 8.5pt;" face=돋움 color="#747474"><?php echo $__Context->val->nick_name ?></font></span>
						<?php }else{ ?>
							<img src="/xe/widgets/rank_activity/skins/default/normal/num<?php echo $__Context->img_count ?>.gif" align="absmiddle">&nbsp;<span class="member_<?php echo $__Context->val->member_srl ?>"><font style="FONT-SIZE: 8.5pt;" face=돋움 color="#747474"><?php echo $__Context->val->nick_name ?></font></span>
						<?php } ?>						
					</td>
					<td width="28%" align="right" align="right" valign="middle">
						<font style="FONT-SIZE: 8.5pt;" face=돋움 color="#808080"><?php echo number_format($__Context->val->count) ?></font>&nbsp;<font style="FONT-SIZE: 8.5pt;" face=돋움 color="#939393">회</font>
					</td>
					<td width="4%" >&nbsp;</td>
				</tr>
				<?php  $__Context->img_count ++ ?>
            <?php } ?>
			</table>
		</div>
	</div>
							</div>
						</div>
					</div>
				</div>
			</div>    
		</div>
	</div>
</div>
</div>
</div>
<script>
jQuery(document).ready(function($) {
    function close_activity_section() {
        $('#activity<?php echo $__Context->id ?> .activity-section-title').removeClass('active');
        $('#activity<?php echo $__Context->id ?> .activity-section-content').slideUp(300).removeClass('open');
    }
 
    $('#activity<?php echo $__Context->id ?> .activity-section-title').click(function(e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');
 
        if($(e.target).is('.active')) {
            close_activity_section();
        }else {
            close_activity_section();
 
            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $('.activity ' + currentAttrValue).slideDown(300).addClass('open'); 
        }
 
        e.preventDefault();
    });
});
</script>