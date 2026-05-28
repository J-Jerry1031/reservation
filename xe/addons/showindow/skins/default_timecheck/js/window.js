jQuery(document).ready(function($){
	var $showindow = $('#showindow');
	
	$showindow.find('.window-agree').click(windowAgree);

	function windowAgree(){
		$showindow.fadeOut(600);

		$.cookie('window-agree', true,{expires: 7});
	}
});