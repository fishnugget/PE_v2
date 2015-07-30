$(document).ready(function(){
	$('.info-box a').bind('click', function(){
		$($(this).parent('div')).css('height', 'auto');
		  $(this).remove();
	});
});