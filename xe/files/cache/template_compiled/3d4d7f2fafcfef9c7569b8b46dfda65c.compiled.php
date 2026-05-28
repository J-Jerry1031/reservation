<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/rank_attend/skins/default/css/widget.css--><?php $__tmp=array('widgets/rank_attend/skins/default/css/widget.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__Context->id = rand(0, 9999); ?>
<div class="widget-wrapper default">
<div id="attend<?php echo $__Context->id ?>" class="attend">
	<div class="attend-section">
        <span class="widget-title"><?php echo $__Context->widget_info->Set_array[title] ?></span>
	</div>
<div class="ks_attend">
	<div class="bottom_mid">
		<div class="box_mid_left">
			<div class="box_mid_right">
				<div class="bottom_left">
					<div class="bottom_right">
						<div class="top_left">
							<div class="top_right">
	<div class="attend-section">
		<a class="attend-section-title active" href="#attend<?php echo $__Context->id ?>-0">금&nbsp;&nbsp;주</a>
		<div id="attend<?php echo $__Context->id ?>-0" class="attend-section-content open" style="display:block">
			<?php  $__Context->img_count=1 ?>
			<table width="100%" align="center" valign="middle" border="0"  bordercolor="#F9F9F9" cellspacing="0" cellpadding="0">
				<?php if($__Context->widget_info->DocumentWeekCount&&count($__Context->widget_info->DocumentWeekCount))foreach($__Context->widget_info->DocumentWeekCount as $__Context->val){ ?>
				<tr>
					<td width="5%" >&nbsp;</td>
					<td width="63%" align="left" valign="middle" height="25">
						<?php if($__Context->img_count < 4){ ?>
							&nbsp;<img src="/xe/widgets/rank_attend/skins/default/normal/num<?php echo $__Context->img_count ?>.gif" align="absmiddle">&nbsp;<span class="member_<?php echo $__Context->val->member_srl ?>"><font style="FONT-SIZE: 8.5pt;" face=돋움 color="#747474"><?php echo $__Context->val->nick_name ?></font></span>
						<?php }else{ ?>
							&nbsp;<img src="/xe/widgets/rank_attend/skins/default/normal/num<?php echo $__Context->img_count ?>.gif" align="absmiddle">&nbsp;<span class="member_<?php echo $__Context->val->member_srl ?>"><font style="FONT-SIZE: 8.5pt;" face=돋움 color="#747474"><?php echo $__Context->val->nick_name ?></font></span>
						<?php } ?>						
					</td>
					<td width="28%" align="right" valign="middle">
						<font style="FONT-SIZE: 8.5pt;" face=돋움 color="#808080"><?php echo number_format($__Context->val->count) ?></font>&nbsp;<font style="FONT-SIZE: 8.5pt;" face=돋움 color="#939393"><?php echo $__Context->widget_info->Set_array[list_unit] ?></font>
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
<div class="ks_attend">
	<div class="bottom_mid">
		<div class="box_mid_left">
			<div class="box_mid_right">
				<div class="bottom_left">
					<div class="bottom_right">
						<div class="top_left">
							<div class="top_right">
	<div class="attend-section">
		<a class="attend-section-title" href="#attend<?php echo $__Context->id ?>-1">금&nbsp;&nbsp;월</a>
		<div id="attend<?php echo $__Context->id ?>-1" class="attend-section-content">
			<?php  $__Context->img_count=1 ?>
			<table width="100%" align="center" valign="middle" border="0"  bordercolor="#F9F9F9" cellspacing="0" cellpadding="0">
				<?php if($__Context->widget_info->DocumentMonthCount&&count($__Context->widget_info->DocumentMonthCount))foreach($__Context->widget_info->DocumentMonthCount as $__Context->val){ ?>
				<tr>
					<td width="5%" >&nbsp;</td>
					<td width="63%" align="left" valign="middle" height="25">
						<?php if($__Context->img_count < 4){ ?>
							&nbsp;<img src="/xe/widgets/rank_attend/skins/default/normal/num<?php echo $__Context->img_count ?>.gif" align="absmiddle">&nbsp;<span class="member_<?php echo $__Context->val->member_srl ?>"><font style="FONT-SIZE: 8.5pt;" face=돋움 color="#747474"><?php echo $__Context->val->nick_name ?></font></span>
						<?php }else{ ?>
							&nbsp;<img src="/xe/widgets/rank_attend/skins/default/normal/num<?php echo $__Context->img_count ?>.gif" align="absmiddle">&nbsp;<span class="member_<?php echo $__Context->val->member_srl ?>"><font style="FONT-SIZE: 8.5pt;" face=돋움 color="#747474"><?php echo $__Context->val->nick_name ?></font></span>
						<?php } ?>						
					</td>
					<td width="28%" align="right" valign="middle">
						<font style="FONT-SIZE: 8.5pt;" face=돋움 color="#808080"><?php echo number_format($__Context->val->count) ?></font>&nbsp;<font style="FONT-SIZE: 8.5pt;" face=돋움 color="#939393"><?php echo $__Context->widget_info->Set_array[list_unit] ?></font>
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
	
<div class="ks_attend">
	<div class="bottom_mid">
		<div class="box_mid_left">
			<div class="box_mid_right">
				<div class="bottom_left">
					<div class="bottom_right">
						<div class="top_left">
							<div class="top_right">
	<div class="attend-section">
		<a class="attend-section-title" href="#attend<?php echo $__Context->id ?>-2">금&nbsp;&nbsp;년</a>
		<div id="attend<?php echo $__Context->id ?>-2" class="attend-section-content">
			<?php  $__Context->img_count=1 ?>
			<table width="100%" align="center" valign="middle" border="0"  bordercolor="#C0C0C0" cellspacing="0" cellpadding="0">
				<?php if($__Context->widget_info->DocumentYearCount&&count($__Context->widget_info->DocumentYearCount))foreach($__Context->widget_info->DocumentYearCount as $__Context->val){ ?>
				<tr>
					<td width="5%" >&nbsp;</td>
					<td width="63%" align="left" valign="middle" height="25">
						<?php if($__Context->img_count < 4){ ?>
							&nbsp;<img src="/xe/widgets/rank_attend/skins/default/normal/num<?php echo $__Context->img_count ?>.gif" align="absmiddle">&nbsp;<span class="member_<?php echo $__Context->val->member_srl ?>"><font style="FONT-SIZE: 8.5pt;" face=돋움 color="#747474"><?php echo $__Context->val->nick_name ?></font></span>
						<?php }else{ ?>
							&nbsp;<img src="/xe/widgets/rank_attend/skins/default/normal/num<?php echo $__Context->img_count ?>.gif" align="absmiddle">&nbsp;<span class="member_<?php echo $__Context->val->member_srl ?>"><font style="FONT-SIZE: 8.5pt;" face=돋움 color="#747474"><?php echo $__Context->val->nick_name ?></font></span>
						<?php } ?>						
					</td>
					<td width="28%" align="right" align="right" valign="middle">
						<font style="FONT-SIZE: 8.5pt;" face=돋움 color="#808080"><?php echo number_format($__Context->val->count) ?></font>&nbsp;<font style="FONT-SIZE: 8.5pt;" face=돋움 color="#939393"><?php echo $__Context->widget_info->Set_array[list_unit] ?></font>
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
<div class="ks_attend">
	<div class="bottom_mid">
		<div class="box_mid_left">
			<div class="box_mid_right">
				<div class="bottom_left">
					<div class="bottom_right">
						<div class="top_left">
							<div class="top_right">
	<div class="attend-section">
		<a class="attend-section-title" href="#attend<?php echo $__Context->id ?>-3">총&nbsp;&nbsp;합</a>
		<div id="attend<?php echo $__Context->id ?>-3" class="attend-section-content">
			<?php  $__Context->img_count=1 ?>
			<table width="100%" align="center" valign="middle" border="0"  bordercolor="#C0C0C0" cellspacing="0" cellpadding="0">
				<?php if($__Context->widget_info->DocumentSumCount&&count($__Context->widget_info->DocumentSumCount))foreach($__Context->widget_info->DocumentSumCount as $__Context->val){ ?>
				<tr>
					<td width="5%" >&nbsp;</td>
					<td width="63%" align="left" valign="middle" height="25">
						<?php if($__Context->img_count < 4){ ?>
							&nbsp;<img src="/xe/widgets/rank_attend/skins/default/normal/num<?php echo $__Context->img_count ?>.gif" align="absmiddle">&nbsp;<span class="member_<?php echo $__Context->val->member_srl ?>"><font style="FONT-SIZE: 8.5pt;" face=돋움 color="#747474"><?php echo $__Context->val->nick_name ?></font></span>
						<?php }else{ ?>
							&nbsp;<img src="/xe/widgets/rank_attend/skins/default/normal/num<?php echo $__Context->img_count ?>.gif" align="absmiddle">&nbsp;<span class="member_<?php echo $__Context->val->member_srl ?>"><font style="FONT-SIZE: 8.5pt;" face=돋움 color="#747474"><?php echo $__Context->val->nick_name ?></font></span>
						<?php } ?>						
					</td>
					<td width="28%" align="right" align="right" valign="middle">
						<font style="FONT-SIZE: 8.5pt;" face=돋움 color="#808080"><?php echo number_format($__Context->val->count) ?></font>&nbsp;<font style="FONT-SIZE: 8.5pt;" face=돋움 color="#939393"><?php echo $__Context->widget_info->Set_array[list_unit] ?></font>
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
    function close_attend_section() {
        $('#attend<?php echo $__Context->id ?> .attend-section-title').removeClass('active');
        $('#attend<?php echo $__Context->id ?> .attend-section-content').slideUp(300).removeClass('open');
    }
 
    $('#attend<?php echo $__Context->id ?> .attend-section-title').click(function(e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');
 
        if($(e.target).is('.active')) {
            close_attend_section();
        }else {
            close_attend_section();
 
            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $('.attend ' + currentAttrValue).slideDown(300).addClass('open'); 
        }
 
        e.preventDefault();
    });
});
</script>