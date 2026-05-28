jQuery(document).ready(function($)
{
	var $showindow = $('#showindow');
	$showindow.find('.show-close').click(windowAgree);

	function windowAgree()
	{
		var kyouwa = $('#kyouwa');
		if(kyouwa[0].checked) $.cookie('window-agree', true,{expires: 1});


		$showindow.fadeOut(600);

	}
});