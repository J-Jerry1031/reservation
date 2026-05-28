<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/phizRanking/skins/phizdefault/css/widget.css--><?php $__tmp=array('widgets/phizRanking/skins/phizdefault/css/widget.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php  
$__Context->id = rand(0, 9999);
if($__Context->widget_info->period == 'today') $__Context->title = '오늘 베스트'.$__Context->widget_info->list_count;
if($__Context->widget_info->period == 'this_week') $__Context->title = '금주 베스트'.$__Context->widget_info->list_count;
if($__Context->widget_info->period == 'this_month') $__Context->title = '이번달 베스트'.$__Context->widget_info->list_count;
 ?>
<div class="widget-wrapper default">
<div id="accordion<?php echo $__Context->id ?>" class="accordion">
	<div class="accordion-section">
		<span class="widget-title"><?php echo $__Context->title ?></span>
	</div>
	<div class="accordion-section">
		<a class="accordion-section-title active" href="#accordion<?php echo $__Context->id ?>-0">포인트 Best</a>
		<div id="accordion<?php echo $__Context->id ?>-0" class="accordion-section-content open" style="display:block">
			<ol class="widgetOlistA">
			<?php if($__Context->widget_info->PointCount&&count($__Context->widget_info->PointCount))foreach($__Context->widget_info->PointCount as $__Context->val){ ?>
				<li><a href="#" class="member_<?php echo $__Context->val->member_srl ?>" onclick="return false;"><?php echo $__Context->val->nick_name ?></a> <span class="count-no"><?php echo number_format($__Context->val->count) ?>&nbsp;P</span></li>
			<?php } ?>
			</ol>
		</div>
	</div>
	<div class="accordion-section">
		<a class="accordion-section-title" href="#accordion<?php echo $__Context->id ?>-1">게시물 Best</a>
		<div id="accordion<?php echo $__Context->id ?>-1" class="accordion-section-content">
			<ol class="widgetOlistA">
			<?php if($__Context->widget_info->DocumentCount&&count($__Context->widget_info->DocumentCount))foreach($__Context->widget_info->DocumentCount as $__Context->val){ ?>
				<li><a href="#" class="member_<?php echo $__Context->val->member_srl ?>" onclick="return false;"><?php echo $__Context->val->nick_name ?></a> <span class="count-no"><?php echo number_format($__Context->val->count) ?>개</span></li>
			<?php } ?>
			</ol>
		</div>
	</div>
	<div class="accordion-section">
		<a class="accordion-section-title" href="#accordion<?php echo $__Context->id ?>-2">댓글 Best</a>
		<div id="accordion<?php echo $__Context->id ?>-2" class="accordion-section-content">
			<ol class="widgetOlistA">
			<?php if($__Context->widget_info->CommentCount&&count($__Context->widget_info->CommentCount))foreach($__Context->widget_info->CommentCount as $__Context->val){ ?>
				<li><a href="#" class="member_<?php echo $__Context->val->member_srl ?>" onclick="return false;"><?php echo $__Context->val->nick_name ?></a> <span class="count-no"><?php echo number_format($__Context->val->count) ?>개</span></li>
			<?php } ?>
			</ol>
		</div>
	</div>
<!-- 16. 5. 4
	<div class="accordion-section">
		<a class="accordion-section-title" href="#accordion<?php echo $__Context->id ?>-3">조회수 Best</a>
		<div id="accordion<?php echo $__Context->id ?>-3" class="accordion-section-content">
			<ol class="widgetOlistA">
			!--@foreach($widget_info->ReadedCount as $val)--
				<li><a href="#" class="member_<?php echo $__Context->val->member_srl ?>" onclick="return false;"><?php echo $__Context->val->nick_name ?></a> <span class="count-no"><?php echo number_format($__Context->val->count) ?>회</span></li>
			!--@end--
			</ol>
		</div>
	</div>
-->
	<div class="accordion-section">
		<a class="accordion-section-title" href="#accordion<?php echo $__Context->id ?>-4">추천 Best</a>
		<div id="accordion<?php echo $__Context->id ?>-4" class="accordion-section-content">
			<ol class="widgetOlistA">
			<?php if($__Context->widget_info->VotedCount&&count($__Context->widget_info->VotedCount))foreach($__Context->widget_info->VotedCount as $__Context->val){ ?>
				<li><a href="#" class="member_<?php echo $__Context->val->member_srl ?>" onclick="return false;"><?php echo $__Context->val->nick_name ?></a> <span class="count-no"><?php echo number_format($__Context->val->count) ?>회</span></li>
        <?php } ?>
			</ol>
		</div>
	</div>
</div>
</div>
<script>
jQuery(document).ready(function($) {
    function close_accordion_section() {
        $('#accordion<?php echo $__Context->id ?> .accordion-section-title').removeClass('active');
        $('#accordion<?php echo $__Context->id ?> .accordion-section-content').slideUp(300).removeClass('open');
    }
 
    $('#accordion<?php echo $__Context->id ?> .accordion-section-title').click(function(e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');
 
        if($(e.target).is('.active')) {
            close_accordion_section();
        }else {
            close_accordion_section();
 
            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
        }
 
        e.preventDefault();
    });
});
</script>