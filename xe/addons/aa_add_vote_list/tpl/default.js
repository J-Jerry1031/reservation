jQuery(function($){
	$('span.vote_list_more_btn').toggle(function(){
		$('#vote_member_list').addClass('ss_8');
		$('#vote_member_list .list_wrap').addClass('vete_member_list_wrap');
		$('#normal_vote_member_list').css('display','none');
		$('#plus_vote_member_list').css('display','block');
		$(this).html('닫기');
	},function(){
		$(this).html('더보기');
		$('#vote_member_list').removeClass('ss_8');
		$('#vote_member_list .list_wrap').removeClass('vete_member_list_wrap');
		$('#normal_vote_member_list').css('display','block');
		$('#plus_vote_member_list').css('display','none');
	});
});
