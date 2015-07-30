$(document).ready(function(){

	$('.part_qty').focus(function(){
		if($(this).val() != ''){
			$(this).val('');
		}
	});
	
	$('.part_qty').blur(function(){
		if($(this).val() == ''){
			$(this).val('0');
		}else{
			var part = $(this).attr('part');
			var qty = $('#'+part).val();
			var new_qty = $(this).val();
			if(Integer.parseInt(new_qty) > Integer.parseInt(qty)){
				if(qty == '0'){
					alert("Part unavailable.  Call your salesman for details");
					$(this).val('0');
				}else{
					alert("Quantity unavailable.  Maximum number added.");
					$(this).val(Integer.parseInt(qty));
				}
			}
		}
	});
	
	
});